<?php

namespace WebVL\WebVillasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
class DefaultController extends Controller
{
    public function ThemeAction(Request $request) // Theme Assign based on user or Default!!
    {
        $dt = date_create(date("y-m-d"));
       date_add($dt,  date_interval_create_from_date_string("40 days"));
    //   echo date_format($dt, "D-M-Y");
     $Resp = $this->redirect($this->generateUrl('_homepage'));
     if($this->getUser() != null)
     {
          // Getting the whole user from the database!
         $em = $this->getDoctrine()->getManager();
        $user = $em->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id")
                ->setParameter(':id',$this->getUser()->getId())->getOneOrNullResult();
   
     
        if($user != null) // If there is a user then take the selected theme and save it on the database
       {
            $th = $request->request->get('SelectTheme',0); // Takes the value of SelectTheme If there isnt any return 0
       
           
               
           if($th != 0 && preg_match("/^[0-9]$/",$th ))
           {
        $user->setTheme($th);
        $em->flush();
           }else{
               $user->setTheme(0);
                 $em->flush();
           }
       }else{
            $cookie = new Cookie("theme", 0, $dt);
             $Resp->headers->setCookie($cookie);
       }
     }else{ // If the user == anonymous (A.k.a not logged in or guest) save the theme only in cookies 
         
     
       if($request->cookies->get('theme',null) == null)
       {
           $th = $request->request->get('SelectTheme',0);
       
           
                    
           if($th != 0 && preg_match("/^[0-9]$/",$th ))
           {
       $cookie = new Cookie("theme", (int)$th, $dt);
           }else{
               $cookie = new Cookie("theme", 0, $dt);
           }
       }else{
           $request->cookies->remove('theme');
            $th = $request->request->get('SelectTheme',0);
           if($th != 0 && preg_match("/^[0-9]$/",$th ))
           {
     $cookie = new Cookie("theme", (int)$th, $dt);
           }else{
             $cookie = new Cookie("theme", 0, $dt);
           }
         
       }
        $Resp->headers->setCookie($cookie);
           }
      
      
        return $Resp;
      //  return $this->redirect($this->generateUrl('_homepage'));
       
    }
    
    public function indexAction() // returns  the home page
    {
        
                
        return $this->render('WebVLWebVillasBundle:Default:index.html.twig');
    }

    public function ContactAction() // returns the contact page
    {
        return $this->render('WebVLWebVillasBundle:Default:Contact.html.twig');
    }

    public function CreateTestAction() { //Creates The Admin User and some fake users as well Villa's
        try{
        $em = $this->getDoctrine()->getManager();
        //<editor-fold defaultstate="collapsed" desc="Admin User">
        $AdminUser =  $em->createQuery("SELECT r FROM WebVLWebVillasBundle:Users r WHERE r.username = 'Administrator'"
               )->getSingleResult();
      
        if(count($AdminUser)== 0)
        {
        $admin = \WebVL\WebVillasBundle\Entity\Users();
        $factory = $this->get('security.encoder_factory');
           
           $admin->setUsername("Administrator");
          $admin->setActivated(true);
            $admin->setEmail("nikos@plus.gr");
            $ActiveCode = rand(1000000000,9999999999);
          //  var_dump( $ActiveCode);
           $admin->setActivationCode($ActiveCode);
            $encoder = $factory->getEncoder($admin);
            $password = $encoder->encodePassword('Adm1n1str@t0r', $admin->getSalt());
           $admin->setPassword($password);
            $admin->setJoined(new \DateTime());
              
       
        
        $AdminRole = $em->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Admin'"
               )->getSingleResult();
           $admin->addRole($AdminRole);
             
            $em->persist($admin);
            $em->flush();
        }
      
         //</editor-fold>
        $roleUser = $em->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'"
               )->getSingleResult();
         if(true == false)
         {
        //<editor-fold defaultstate="collapsed" desc="Users">
        
        for($i = 0; $i <40; $i++)
        {
        $user = new \WebVL\WebVillasBundle\Entity\Users();
        $factory = $this->get('security.encoder_factory');
           
            $user->setUsername("User$i");
            $user->setActivated(true);
            $user->setEmail("User$i@plus.gr");
            $ActiveCode = rand(1000000000,9999999999);
          //  var_dump( $ActiveCode);
            $user->setActivationCode($ActiveCode);
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword('0123456789AA', $user->getSalt());
            $user->setPassword($password);
            $user->setJoined(new \DateTime());
              
       
       
            $user->addRole($roleUser);
             
            $em->persist($user);
           
        }
         $em->flush();
         
         //</editor-fold>
         }
         
         //<editor-fold defaultstate="collapsed" desc="Villas">
          $rr = $this->getDoctrine()->getManager();
          
         $roleOwner = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'")
                 ->getSingleResult();
          for($i =0; $i<40; $i++)
          {
         $User = $rr->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.username = 'User$i'")
                 ->getSingleResult();
      
         $User->removeRole($roleUser);
         $User->addRole($roleOwner);
         
           $villas = new \WebVL\WebVillasBundle\Entity\Villas();
           $villas->setAddress("$i Paradise");
            $villas->setDetails("Somethings $i");
            $villas->setView("Views WhatEver $i");
            $villas->setGeox(37.94130964422101-$i);
            $villas->setGeoy(23.90991121530533-$i);
            $villas->setPrice(20000+($i*2000));
            $villas->setRestrooms(rand(1,10));
            $villas->setRooms(rand(1,15));
            $villas->setSize(rand(1,20));
            $villas->setUsers($User);
            
            $state = new \WebVL\WebVillasBundle\Entity\States();
           
                 $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT r FROM WebVLWebVillasBundle:States r WHERE r.id = :id"
               )->setParameter(':id',(int)rand(1,15));
            $state = $query->getSingleResult();
            $villas->setStates($state);
             $em = $this->getDoctrine()->getManager();
            $em->persist($villas);
              $em->flush();
           $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT count(r) FROM WebVLWebVillasBundle:AvailEquipment r "
               );
            $id = $query->getSingleResult();
          
            $Avail = new \WebVL\WebVillasBundle\Entity\AvailEquipment($villas,$id[1]+1);
             $Avail->setParking(rand(0,5));
            if($i == 2 ||$i == 5 || $i == 10 || $i == 18)
            {
                $Avail->setGym(true);
            }else
            {
                 $Avail->setGym(false);
            }
            if($i == 2 ||$i == 4 || $i == 10 || $i == 14 )
            {
                $Avail->setPool(true);
            }else
            {
                 $Avail->setPool(false);
            }
            if($i == 2 ||$i == 3  || $i == 14 || $i == 18)
            {
                $Avail->setSauna(true);
            }else
            {
                 $Avail->setSauna(false);
            }
          
            $em->persist($Avail);
            $em->flush();
         
          }
         //</editor-fold>
        return new \Symfony\Component\HttpFoundation\Response('Test Vars Created!');
        
       }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
        }

    //Search boxes 
    public function SearchAction(Request $request,$stxt = "") {
            if($stxt == "")
            {
                $stxt =  preg_match('/^[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+$/u',
                        $request->query->get('SearchBox'))? $request->query->get('SearchBox') : '';
            }
            return $this->render('WebVLWebVillasBundle:Villas:Search.html.twig',
                    array('Searchtext'=> $stxt));
        }
        // Search engine and pager 
        public function SearchTakerAction(Request $request,$SrchTxt = "",$start = 1,$end = 5) 
                {
            if($SrchTxt == "")
            {
                $SrchTxt = $request->query->all()["SearchForm"]["SearchBox"];
            }
     if($SrchTxt != "" && preg_match('/^[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+$/u',$SrchTxt))
      {
            try{
        $startpage = 1;
        if(preg_match('/^[0-9]+$/', $start))
        {
            $startpage = (int) $start;
        }
        $recperpage = 5;
        if(preg_match('/^[0-9]+$/', $end))
        {
           $recperpage = (int) $end;
        }
         $em = $this->getDoctrine()->getManager();
         $startoffset = $em->createQuery('SELECT count(v) as con FROM WebVLWebVillasBundle:Villas v '
                 . 'WHERE v.address LIKE :add OR v.view LIKE :add OR v.details LIKE :add '
               )->setParameter(':add','%'.$SrchTxt.'%')->getResult();
      
         $pages = ceil(number_format($startoffset[0]['con'])/$recperpage);
         $startindex = ($startpage-1)*$recperpage;
        $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                . 'WHERE v.address LIKE :add OR v.view LIKE :add OR v.details LIKE :add'
               )->setParameter(':add','%'.$SrchTxt.'%')
                ->setFirstResult($startindex)
                ->setMaxResults($recperpage)->getResult();
    
     
        return $this->render('WebVLWebVillasBundle:Villas:VillaTaker.html.twig',array(
            'Villas' =>$Query,
            'pages'=> (int)$pages,
            'recs'=>$recperpage,
            'curpage'=> $startpage
               
        ));
            }
        catch(\PDOException $e)
        {
              return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        ); 
        }
            
        }else{
            
             return $this->redirect($this->generateUrl('_Villas'),
               array('Errors'=> 'You must put some text in the search!'
                    ));
        }
        
        
        }
    
}
