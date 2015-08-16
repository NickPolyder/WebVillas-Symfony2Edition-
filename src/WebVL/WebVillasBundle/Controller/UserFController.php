<?php

namespace WebVL\WebVillasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use WebVL\WebVillasBundle\Entity\Forms\LogInF;
use WebVL\WebVillasBundle\Entity\Forms\LogInFType;
use WebVL\WebVillasBundle\Entity\Forms\RegisF;
use WebVL\WebVillasBundle\Entity\Forms\RegisFType;
use WebVL\WebVillasBundle\Entity\Forms\CaptchaSecurityImages;


class UserFController extends Controller
{
    public function LogInAction(Request $request)// Render the log in page
            // Checks if the user is already logged in if yes sends him back to homepage
    {
        try{
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') || $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
        return $this->redirect($this->generateUrl('_homepage'));
        }
  $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

        return $this->render(
            'WebVLWebVillasBundle:UserF:LogIn.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    
            }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
        }
    
   
    public function RegisterAction()// Register Render page
    {
        
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') || $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
        return $this->redirect($this->generateUrl('_homepage'));
        }
        $Regis = new RegisF(); // Renders the Form of Register
       $form = $this->createForm(new RegisFType(),$Regis);
       
        return $this->render('WebVLWebVillasBundle:UserF:Register.html.twig',array('form'=>$form->createView()));
    }
    public function LogOutAction()//Request $request)
           
    {
        
        return $this->redirect($this->generateUrl('_homepage'));
    }
    
    public function RegistedAction(Request $request)//  Register Action Checker and 
            // insert on database
    {
    try{
      
       
       $Regis = new RegisF(); // Create's the register form
       $form = $this->createForm(new RegisFType(),$Regis);
       $form->handleRequest($request);// takes the data from the $_POST
       
       if($form->isValid()) // if the form is valid
       {
           $factory = $this->get('security.encoder_factory'); // Creates the security class from the config file
            $user = new \WebVL\WebVillasBundle\Entity\Users(); // Creates the User object
            $user->setUsername($Regis->getUsername());
            $user->setActivated(false);
            $user->setEmail($Regis->getEmail());
            $ActiveCode = rand(1000000000,9999999999);
          //  var_dump( $ActiveCode);
            $user->setActivationCode($ActiveCode);
            $encoder = $factory->getEncoder($user); // Create's the encode for the exact user
            $password = $encoder->encodePassword($Regis->getPassword(), $user->getSalt()); // Encodes the password
            $user->setPassword($password);
            $user->setJoined(new \DateTime());
              $em = $this->getDoctrine()->getManager();
       $roles = $em->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'"
               )->getSingleResult(); // Takes the Roles from the database
       
            $user->addRole($roles); // adding Roles to the user
             $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush(); // saves user to the database
            
            mail($user->getEmail(), 'Registration on WebVillas', 
                   'Hello '. $user->getUsername() ." and thank you for registering to WebVillas ".PHP_EOL
                    . 'Your Activation Code Is: '.$user->getActivationCode().PHP_EOL.
                    "Click this -> ".$this->generateUrl('_Reg_Activation',array('usern'=>$user->getUsername(),'Activation'=>$user->getActivationCode()),true));
           return $this->redirect($this->generateUrl('_homepage',array('Registered'=>'Thank you for'
               . ' your registration '. $Regis->getUsername().'!' .PHP_EOL." We will send you e-mail with your activation Code!"))); 
       }  else {
            return $this->render('WebVLWebVillasBundle:UserF:Register.html.twig',array('form'=>$form->createView()));
   
       }
         }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }   
    }
    
    public function ActivateCodeAction($usern,$Activation) // Create's the Activation Code page
    {
           
      
     $ActiveCode = new \WebVL\WebVillasBundle\Entity\Forms\ActiveCodeF();
       $form = $this->createForm(new \WebVL\WebVillasBundle\Entity\Forms\ActiveCodeFType(), $ActiveCode);
        if($Activation == null)
        {
       return $this->render('WebVLWebVillasBundle:UserF:ActivateCode.html.twig'
               ,array('form'=>$form->createView(),'usernm'=>$usern));
        }else
        {
             return $this->render('WebVLWebVillasBundle:UserF:ActivateCode.html.twig',
                     array('form'=>$form->createView(),'usernm'=>$usern,'Activation'=>$Activation));

        }
            
    }
    
    public function ActivateCheckCodeAction(Request $request) // Activation Code Check
    {
        try{
    $ActiveCode = new \WebVL\WebVillasBundle\Entity\Forms\ActiveCodeF();
       $form = $this->createForm(new \WebVL\WebVillasBundle\Entity\Forms\ActiveCodeFType(), $ActiveCode);
       $form->handleRequest($request);
    if($form->isValid())  // if the form is valid
    {
        $em = $this->getDoctrine()->getManager();
       $User = $em->getRepository('WebVLWebVillasBundle:Users')
               ->findByusername($ActiveCode->getUserName()); // get the user by the activation code
               
      
       
       if (!$User) {
        throw $this->createNotFoundException(
            'No User found for id '.$id
        );
    }
   if($User[0]->getActivationCode() == $ActiveCode->getActivationCode())
   {
    $User[0]->setActivated(true);
       
       $em->flush();
   
    
            
       
       return $this->redirect($this->generateUrl('_homepage',array('WelcomeMes'=>'Your Account has being activated!')));
   }else{
        return $this->render('WebVLWebVillasBundle:UserF:ActivateCode.html.twig',
                     array('form'=>$form->createView(),'usernm'=>$ActiveCode->getUserName(),
                         'Error'=>'This isnt your Activation Code'
              ));
   }
    }else{
       return $this->render('WebVLWebVillasBundle:UserF:ActivateCode.html.twig',
                     array('form'=>$form->createView(),'usernm'=>$ActiveCode->getUserName()));
    }
      // 
       }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
    }
    
    public function AccountAction() { // Gets the account managment page
        
        return $this->render('WebVLWebVillasBundle:UserF:Account.html.twig');
        
    }
    
    public function ThemeUpdAction(Request $request) { // Theme update function
        //Checks for the user in session and saves it to Database and to the Cookie
        //If there is not a user saves the theme to the cookie
        try{
        $theme = $request->request->get('ThemeSelector',null);
       
        if($theme != null && preg_match('/^[0-9]$/', $theme))
        {
        $em = $this->getDoctrine()->getManager();
        $user = $em->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id")
                ->setParameter(':id',$this->getUser()->getId())->getOneOrNullResult();
       if($user != null)
       {
        $user->setTheme($theme);
        $em->flush();
         $return=array("responseCode"=>200, "Success"=>"The Default theme has been successfull updated!");
          $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
       }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error with the User!");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json')); 
       }
        
        }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error in the selection");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
        }
        }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
    }
    
    public function MailUpdAction(Request $request)// Mail update function!!
    {
        try{
        $email = $request->request->get('Email',null);
        $remail = $request->request->get('Emailreenter',null);
       if($email != null && $email == $remail && preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email))
       {
       $SetMail = true;
       }else{
           $SetMail = false;
       }
        if($SetMail)
        {
        $em = $this->getDoctrine()->getManager();
        $user = $em->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id")
                ->setParameter(':id',$this->getUser()->getId())->getOneOrNullResult();
       if($user != null)
       {
        $user->setEmail($email);
        $em->flush();
         $return=array("responseCode"=>200, "Success"=>"Your mail has been successfull updated!");
          $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
       }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error with the User!");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json')); 
       }
        
        }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error in the Mail");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
        }
        }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
    }
    
    public function PassUpdAction(Request $request) { // Pass update function
        
         try{
        $pass = $request->request->get('Password',null);
        $repass = $request->request->get('RePassword',null);
       
       if($pass != null && $pass == $repass && preg_match("/^[a-zA-Z0-9_@!]+$/", $pass))
       {
       $SetMail = true;
       }else{
           $SetMail = false;
       }
        if($SetMail)
        {
        $em = $this->getDoctrine()->getManager();
        $user = $em->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id")
                ->setParameter(':id',$this->getUser()->getId())->getOneOrNullResult();
       if($user != null)
       {
         $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($pass, $user->getSalt());
            $user->setPassword($password);
        $em->flush();
         $return=array("responseCode"=>200, "Success"=>"Your password has been successfull updated!");
          $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
       }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error with the User!");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json')); 
       }
        
        }else{
            $return=array("responseCode"=>400,  "Error"=>"Some Error in the password");
            $return=json_encode($return);
        return new Response($return,200,array('Content-Type'=>'application/json'));
        }
        }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
        
    }
}
