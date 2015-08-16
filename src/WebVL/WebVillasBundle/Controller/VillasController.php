<?php

namespace WebVL\WebVillasBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebVL\WebVillasBundle\Entity\Forms\AddVilF;
use WebVL\WebVillasBundle\Entity\Forms\AddVilFType;


class VillasController extends Controller
{
    public function VillasAction() // Render for Villas page
    {
       

        return $this->render('WebVLWebVillasBundle:Villas:Villas.html.twig'
        );
    }
    
    public function ShowVillaAction($id = -1) //Render The Villa profile page
    {
        try{
          if($id != -1 && preg_match('/^[0-9]+$/', $id))
          {
              
               $em = $this->getDoctrine()->getManager();
               $villa = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v WHERE v.idVillas = :id '
               )->setParameter(':id',$id)->getSingleResult();
              $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$id)->getResult();
        $photos = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.idVillas = :vill')
                ->setParameter(":vill",$villa)->getResult();
   if(count($photos) >0 )
   {
       $flagp = true;
   }else
   {
       $flagp = false;
   }

        
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
        
     
      
         return $this->render('WebVLWebVillasBundle:Villas:ShowVilla.html.twig',array(
            'villa'=>  $villa,
            'Avail' => $availeq[$i],
             'photo'=> $flagp ? $photos : -1
        )
        );
        }else{
               return $this->render('WebVLWebVillasBundle:Villas:ShowVilla.html.twig',
                array('villa'=>$villa,
                   'photo'=> $flagp ? $photos : -1
                       ));
        }
              
          }else{
               return $this->redirect($this->generateUrl('_Villas'),
               array('Errors'=> 'Something Occured! With the Id'
                    ));
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
    
    public function TakeVillasAction($start,$end) // Takes the  Villas for pagination
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
               )->getResult();
      
         $pages = ceil(number_format($startoffset[0]['con'])/$recperpage);
         $startindex = ($startpage-1)*$recperpage;
        $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
               )->setFirstResult($startindex)->setMaxResults($recperpage)->getResult();
    
     
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
    }

    
     public function addAction() // Render Add Villa page 
    {
        try{
         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
     $AddVilf = new AddVilF();
       $form = $this->createForm(new AddVilFType(),$AddVilf);
        return $this->render('WebVLWebVillasBundle:Villas:AddVilla.html.twig',
                array('form' => $form->createView(),
                    'Query'=>$query
                    ));
            }
        catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
    }
    
    
    public function AddCheckAction(Request $request) { // Check's the added Villa
        try{
        $AddVilf = new AddVilF();
       $form = $this->createForm(new AddVilFType(),$AddVilf);
        $form->handleRequest($request);
   
        if($form->isValid())
       {
             
              $sc = $this->get('security.context');
           if(($sc->isGranted('ROLE_USER') && !$sc->isGranted('ROLE_OWNER')) 
                   || $sc->isGranted('ROLE_ADMIN')) // Checks the User  for the current role
           {
                $user = $this->getUser();
                $rr = $this->getDoctrine()->getManager();
                 $query = $rr->createQuery("SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id"
               )->setParameter(':id',$user->getId());
           $eduser = $query->getSingleResult();
         $res = false;
         $adm = false;
         $i = 0;
         $rl = $eduser->getRoles();
      
         while(!$res && $i < count($rl) )
         {
           
          
             if($rl[$i]->getName() == "User")
             {
               $res = true;  
                
                if($rl[$i]->getName() == "Admin")
             {
               $adm = true;  
             }
             }else {
                $i++; 
             }
             
            
            
         }
         
          if($res)
          {
             
             $villas = new \WebVL\WebVillasBundle\Entity\Villas();
           $villas->setAddress($AddVilf->getAddress());
           if($AddVilf->getDetails()!= "")
           {
               $villas->setDetails($AddVilf->getDetails());
           }
            $villas->setGeox($AddVilf->getGeoX());
            $villas->setGeoy($AddVilf->getGeoY());
            $villas->setPrice($AddVilf->getPrice());
            $villas->setRestrooms($AddVilf->getRestrooms());
            $villas->setRooms($AddVilf->getRooms());
            $villas->setSize($AddVilf->getSize());
            $villas->setUsers($user);
            if($AddVilf->getView() != "")
            {
            $villas->setView($AddVilf->getView());
            }
            $state = new \WebVL\WebVillasBundle\Entity\States();
            if(($request->request->get('_State') != null && $request->request->get('_State') != '') && preg_match("/^[0-9]+$/",$request->request->get('_State')))
            {
                $sta = $request->request->get('_State');
                 $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT r FROM WebVLWebVillasBundle:States r WHERE r.id = :id"
               )->setParameter(':id',(int)$sta);
            $state = $query->getSingleResult();
            $villas->setStates($state);
            }else{//state not valid
                 $sta = $request->request->get('_State');
                  $er = $this->getDoctrine()->getManager();
         $query = $er->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
                return $this->render('WebVLWebVillasBundle:Villas:AddVilla.html.twig',
                        array(
                            'form'=>$form->createView(),
                            'statere'=>'Please choose a state! '. $sta,
                            'Query'=>$query
                           
                        ));
            }
            
           
            $em = $this->getDoctrine()->getManager();
            $em->persist($villas);
              $em->flush();
           $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT count(r) FROM WebVLWebVillasBundle:AvailEquipment r "
               );
            $id = $query->getSingleResult();
          
            $Avail = new \WebVL\WebVillasBundle\Entity\AvailEquipment($villas,$id[1]+1);
             $Avail->setParking($AddVilf->getParking());
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getGym()))
            {
                $Avail->setGym(true);
            }else
            {
                 $Avail->setGym(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getPool()))
            {
                $Avail->setPool(true);
            }else
            {
                 $Avail->setPool(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getSauna()))
            {
                $Avail->setSauna(true);
            }else
            {
                 $Avail->setSauna(false);
            }
          
            $em->persist($Avail);
            $em->flush();
           
            
            if($adm == false)
              {
               $eduser->removeRole($rl[$i]);
          
           
           $roles = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'"
               )->getSingleResult(); // $rr  = Doctrine Manager (aka Database manager)
       // updates the user role to Owner!!
            $eduser->addRole($roles);
            $this->get('security.context')->getToken()->setUser($eduser);
            // Creates a token for $_SESSION update!!
            $token = new \Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken(
  $eduser,
  null,
  'main',
  $eduser->getRoles()
);
$this->container->get('security.context')->setToken($token);
            $rr->flush();
            
            // $this->get('security.context')->getToken()->setAuthenticated(false);
              }
           
            
            return $this->redirect($this->generateUrl('_Villas',
                        array('Success'=>'you created the Villa in this address: '.$AddVilf->getAddress())));
          }else
          {
           return $this->redirect($this->generateUrl('_Villas',
                   array('Errors'=>'You dont have the right kind of permissions!')));
          } }else{
                return $this->redirect($this->generateUrl('_Villas',
                   array('Errors'=>'You dont have the right kind of permissions!')));
          }
       }else{//form not valid
           $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
           return $this->render('WebVLWebVillasBundle:Villas:AddVilla.html.twig',
                        array('form'=>$form->createView(),
                            'Query'=>$query));
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
    
   
    public function EditAction($id) { // Render  the Edit Villa Page
    try{
        if($id != -1 && preg_match('/^[0-9]+$/', $id))
        {
          $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.idVillas = :id')
                 ->setParameter(':id',$id)->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$id)->getResult();
       
         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
     $AddVilf = new AddVilF();
     $AddVilf->setAddress($villas->getAddress());
     $AddVilf->setDetails($villas->getDetails());
     $AddVilf->setGeoX($villas->getGeox());
     $AddVilf->setGeoY($villas->getGeoy());
     $AddVilf->setPrice($villas->getPrice());
     $AddVilf->setRestrooms($villas->getRestrooms());
     $AddVilf->setRooms($villas->getRooms());
     $AddVilf->setSize($villas->getSize());
     $AddVilf->setView($villas->getView());
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
         $AddVilf->setGym($availeq[$i]->getGym());
         $AddVilf->setParking($availeq[$i]->getParking());
         $AddVilf->setPool($availeq[$i]->getPool());
         $AddVilf->setSauna($availeq[$i]->getSauna());
     }
       $form = $this->createForm(new \WebVL\WebVillasBundle\Entity\Forms\EditVilFType(),$AddVilf);
       
        return $this->render('WebVLWebVillasBundle:Villas:EditVillas.html.twig',
                array('form' => $form->createView(),
                    'Query'=>$query,
                    'selected'=> $villas->getStates()->getId()
                    ));
        }else{
            
             $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.users = :id')
                 ->setParameter(':id',$this->getUser())->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$villas->getIdVillas())->getResult();
       
         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
     $AddVilf = new AddVilF();
     $AddVilf->setAddress($villas->getAddress());
     $AddVilf->setDetails($villas->getDetails());
     $AddVilf->setGeoX($villas->getGeox());
     $AddVilf->setGeoY($villas->getGeoy());
     $AddVilf->setPrice($villas->getPrice());
     $AddVilf->setRestrooms($villas->getRestrooms());
     $AddVilf->setRooms($villas->getRooms());
     $AddVilf->setSize($villas->getSize());
     $AddVilf->setView($villas->getView());
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
         $AddVilf->setGym($availeq[$i]->getGym());
         $AddVilf->setParking($availeq[$i]->getParking());
         $AddVilf->setPool($availeq[$i]->getPool());
         $AddVilf->setSauna($availeq[$i]->getSauna());
     }
       $form = $this->createForm(new \WebVL\WebVillasBundle\Entity\Forms\EditVilFType(),$AddVilf);
       
         return $this->render('WebVLWebVillasBundle:Villas:EditVillas.html.twig',
                array('form' => $form->createView(),
                    'Query'=>$query,
                    'selected'=> $villas->getStates()->getId(),
                    'idval'=>$villas->getIdVillas(),
                    'ParkValue'=>$availeq[$i]->getParking()
                    ));
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
    
    public function CheckEditAction(Request $request,$id) { // Checks Edit villa form 
    try{
         $AddVilf = new AddVilF();
       $form = $this->createForm(new \WebVL\WebVillasBundle\Entity\Forms\EditVilFType(),$AddVilf);
        $form->handleRequest($request);
   
        if($form->isValid())
       {
           
          if($id != -1 && preg_match('/^[0-9]+$/', $id))
        {
          $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.idVillas = :id')
                 ->setParameter(':id',$id)->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$id)->getResult();
       
         $rm = $this->getDoctrine()->getManager();
         $query = $rm->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
    
     $villas->setAddress($AddVilf->getAddress());
     $villas->setDetails($AddVilf->getDetails());
     $villas->setGeox($AddVilf->getGeoX());
     $villas->setGeoy($AddVilf->getGeoY());
     $villas->setPrice($AddVilf->getPrice());
     $villas->setRestrooms($AddVilf->getRestrooms());
     $villas->setRooms($AddVilf->getRooms());
     $villas->setSize($AddVilf->getSize());
     $villas->setView($AddVilf->getView());
     $state = new \WebVL\WebVillasBundle\Entity\States();
            if(($request->request->get('_State') != null && $request->request->get('_State') != '') && preg_match("/^[0-9]+$/",$request->request->get('_State')))
            {
                $sta = $request->request->get('_State');
                 $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT r FROM WebVLWebVillasBundle:States r WHERE r.id = :id"
               )->setParameter(':id',(int)$sta);
            $state = $query->getSingleResult();
            $villas->setStates($state);
            }else{//state not valid
                 $sta = $request->request->get('_State');
                  $er = $this->getDoctrine()->getManager();
         $query = $er->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
                return $this->render('WebVLWebVillasBundle:Villas:EditVillas.html.twig',
                        array(
                            'form'=>$form->createView(),
                            'statere'=>'Please choose a state! '. $sta,
                            'Query'=>$query
                           
                        ));
            }
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
         $availeq[$i]->setGym($AddVilf->getGym());
        $availeq[$i]->setParking( $AddVilf->getParking());
         $availeq[$i]->setPool($AddVilf->getPool());
        $availeq[$i]->setSauna($AddVilf->getSauna());
     }else{
          $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT count(r) FROM WebVLWebVillasBundle:AvailEquipment r "
               );
            $id = $query->getSingleResult();
          
            $Avail = new \WebVL\WebVillasBundle\Entity\AvailEquipment($villas,$id[1]+1);
             $Avail->setParking($AddVilf->getParking());
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getGym()))
            {
                $Avail->setGym(true);
            }else
            {
                 $Avail->setGym(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getPool()))
            {
                $Avail->setPool(true);
            }else
            {
                 $Avail->setPool(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getSauna()))
            {
                $Avail->setSauna(true);
            }else
            {
                 $Avail->setSauna(false);
            }
          
            $em->persist($Avail);
         
     }
       $em->flush();
       
        return $this->redirect($this->generateUrl('_Villas',array('Success'=> 
               'Your Villa have been Updated!')));
        }
        else{
            
             $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.users = :id')
                 ->setParameter(':id',$this->getUser())->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$villas->getIdVillas())->getResult();
       
        
        
    
     $villas->setAddress($AddVilf->getAddress());
     $villas->setDetails($AddVilf->getDetails());
     $villas->setGeox($AddVilf->getGeoX());
     $villas->setGeoy($AddVilf->getGeoY());
     $villas->setPrice($AddVilf->getPrice());
     $villas->setRestrooms($AddVilf->getRestrooms());
     $villas->setRooms($AddVilf->getRooms());
     $villas->setSize($AddVilf->getSize());
     $villas->setView($AddVilf->getView());
   $state = new \WebVL\WebVillasBundle\Entity\States();
            if(($request->request->get('_State') != null && $request->request->get('_State') != '') && preg_match("/^[0-9]+$/",$request->request->get('_State')))
            {
                $sta = $request->request->get('_State');
                 $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT r FROM WebVLWebVillasBundle:States r WHERE r.id = :id"
               )->setParameter(':id',(int)$sta);
            $state = $query->getSingleResult();
            $villas->setStates($state);
            }else{//state not valid
                 $sta = $request->request->get('_State');
                  $er = $this->getDoctrine()->getManager();
         $query = $er->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
                return $this->render('WebVLWebVillasBundle:Villas:EditVillas.html.twig',
                        array(
                            'form'=>$form->createView(),
                            'statere'=>'Please choose a state! '. $sta,
                            'Query'=>$query
                           
                        ));
            }
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
         $availeq[$i]->setGym($AddVilf->getGym());
        $availeq[$i]->setParking( $AddVilf->getParking());
         $availeq[$i]->setPool($AddVilf->getPool());
        $availeq[$i]->setSauna($AddVilf->getSauna());
     }else{
         
          $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT count(r) FROM WebVLWebVillasBundle:AvailEquipment r "
               );
            $id = $query->getSingleResult();
          
            $Avail = new \WebVL\WebVillasBundle\Entity\AvailEquipment($villas,$id[1]+1);
             $Avail->setParking($AddVilf->getParking());
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getGym()))
            {
                $Avail->setGym(true);
            }else
            {
                 $Avail->setGym(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getPool()))
            {
                $Avail->setPool(true);
            }else
            {
                 $Avail->setPool(false);
            }
            if(!preg_match("/^True|TRUE|true|1$/",$AddVilf->getSauna()))
            {
                $Avail->setSauna(true);
            }else
            {
                 $Avail->setSauna(false);
            }
          
            $em->persist($Avail);
         
     
     }
       $em->flush();
      
       
          return $this->redirect($this->generateUrl('_Villas',array('Success'=> 
               'Your Villa have been Updated!')));
        }
        
        
       }else{
          
          
             return $this->render('WebVLWebVillasBundle:Villas:EditVillas.html.twig',
                array('form' => $form->createView()));
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
    
    public function DeleteAction($id) { // Render Delete Villa page
        try{
         if($id != -1 && preg_match('/^[0-9]+$/', $id))
        {
          $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.idVillas = :id')
                 ->setParameter(':id',$id)->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$id)->getResult();
       
        
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
        
     
      
        return $this->render('WebVLWebVillasBundle:Villas:DeleteVilla.html.twig',
                array('villa'=>$villas,
                   'Avail'=> $availeq[$i]
                    ));
        }else{
               return $this->render('WebVLWebVillasBundle:Villas:DeleteVilla.html.twig',
                array('villa'=>$villas
                       ));
        }
        }else{
            
             $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.users = :id')
                 ->setParameter(':id',$this->getUser())->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$villas->getIdVillas())->getResult();
       
         
    
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
        
     
      
        return $this->render('WebVLWebVillasBundle:Villas:DeleteVilla.html.twig',
                array('villa'=>$villas,
                   'Avail'=> $availeq[$i]
                    ));
        }else{
               return $this->render('WebVLWebVillasBundle:Villas:DeleteVilla.html.twig',
                array('villa'=>$villas
                       ));
        }
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
    
    
    public function DeleteCheckAction(Request $request,$id) // Delete Check function
    {
        try{
          if($id != -1 && preg_match('/^[0-9]+$/', $id))
        {
          $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.idVillas = :id')
                 ->setParameter(':id',$id)->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$id)->getResult();
         
    
        
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
        
         $em->remove($villas);
     $em->remove($availeq[$i]);
     $em->flush();
           $rr = $this->getDoctrine()->getManager();
         $User = $rr->createQuery('SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id')
                 ->setParameter(':id',$villas->getUsers()->getId())->getSingleResult();
       $roleUser = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'")
                 ->getSingleResult();
         $roleOwner = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'")
                 ->getSingleResult();
         $User->removeRole($roleOwner);
         $User->addRole($roleUser);
         if($this->getUser()->getId() == $User->getId())
         {
          $this->get('security.context')->getToken()->setUser($User);
            $token = new \Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken(
 $User,
  null,
  'main',
  $User->getRoles()
);
$this->container->get('security.context')->setToken($token);
         }
            $rr->flush();
        return $this->render('WebVLWebVillasBundle:Villas:Villas.html.twig',
                array('Success'=> 'Your Villa in Address: '. $villas->getAddress() . 'Has been deleted!'
                    ));
        }else{
             $em->remove($villas);
    
     $em->flush();
          $rr = $this->getDoctrine()->getManager();
         $User = $rr->createQuery('SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id')
                 ->setParameter(':id',$villas->getUsers()->getId())->getSingleResult();
       $roleUser = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'")
                 ->getSingleResult();
         $roleOwner = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'")
                 ->getSingleResult();
         $User->removeRole($roleOwner);
         $User->addRole($roleUser);
         if($this->getUser()->getId() == $User->getId())
         {
          $this->get('security.context')->getToken()->setUser($User);
            $token = new \Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken(
 $User,
  null,
  'main',
  $User->getRoles()
);
$this->container->get('security.context')->setToken($token);
         }
            $rr->flush();
               return $this->redirect($this->generateUrl('_Villas'),
                       array('Success'=>  'Your Villa in Address: '. $villas->getAddress() . 'Has been deleted!'
                       ));
        }
        }else{ // else of  $id != -1 && preg_match('/^[0-9]+$/', $id)
            
             $em = $this->getDoctrine()->getManager();
         $villas = $em->createQuery('SELECT r FROM WebVLWebVillasBundle:Villas r WHERE r.users = :id')
                 ->setParameter(':id',$this->getUser())->getSingleResult();
         $availeq = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                 . ' a WHERE a.villasVillas = :id')
                 ->setParameter(':id',$villas->getIdVillas())->getResult();
       
         
    
   
     if(count($availeq)>0)
     {
         $i = count($availeq) -1;
        
      $em->remove($villas);
     $em->remove($availeq[$i]);
     $em->flush();
      
          $rr = $this->getDoctrine()->getManager();
         $User = $rr->createQuery('SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id')
                 ->setParameter(':id',$villas->getUsers()->getId())->getSingleResult();
       $roleUser = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'")
                 ->getSingleResult();
         $roleOwner = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'")
                 ->getSingleResult();
         $User->removeRole($roleOwner);
         $User->addRole($roleUser);
         if($this->getUser()->getId() == $User->getId())
         {
          $this->get('security.context')->getToken()->setUser($User);
            $token = new \Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken(
 $User,
  null,
  'main',
  $User->getRoles()
);
$this->container->get('security.context')->setToken($token);
         }
            $rr->flush();
       return $this->redirect($this->generateUrl('_Villas'),
               array('Success'=> 'Your Villa in Address: '. $villas->getAddress() . 'Has been deleted!'
                    ));
        }else{
             $em->remove($villas);

     $em->flush();
          $rr = $this->getDoctrine()->getManager();
         $User = $rr->createQuery('SELECT u FROM WebVLWebVillasBundle:Users u WHERE u.id = :id')
                 ->setParameter(':id',$villas->getUsers()->getId())->getSingleResult();
       $roleUser = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'User'")
                 ->getSingleResult();
         $roleOwner = $rr->createQuery("SELECT r FROM WebVLWebVillasBundle:Roles r WHERE r.name = 'Villas Owner'")
                 ->getSingleResult();
         $User->removeRole($roleOwner);
         $User->addRole($roleUser);
         if($this->getUser()->getId() == $User->getId())
         {
          $this->get('security.context')->getToken()->setUser($User);
            $token = new \Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken(
 $User,
  null,
  'main',
  $User->getRoles()
);
$this->container->get('security.context')->setToken($token);
         }
            $rr->flush();
              return $this->redirect($this->generateUrl('_Villas'),
                      array('Success'=> 'Your Villa in Address: '. $villas->getAddress() . 'Has been deleted!'
                       ));
        }
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
 
   
    
    
    //<editor-fold defaultstate="collapsed" desc="Jquery - ajax try">
  
     public function mapAction() {
        
        return $this->render('WebVLWebVillasBundle:Villas:map.html.twig');
        
    }
    
    
    public function greetAction()
    {
    $request = $this->get('request');
   $name=$request->request->get('formName');
   
   if($name !="")
   {
      $greeting='Hello Master!! May The Force Be With You'.$name;
      $return=array("responseCode"=>200,  "greeting"=>$greeting);
   }else{
       $greeting='Fuck You';
      $return=array("responseCode"=>200,  "greeting"=>$greeting);
   }
   $return=json_encode($return);//jscon encode the array
 //  return new Response($return,200,array('Content-Type'=>'application/json'));
 return $this->render('WebVLWebVillasBundle:Villas:Unkown.html.twig');     
    }
    //</editor-fold>
}
