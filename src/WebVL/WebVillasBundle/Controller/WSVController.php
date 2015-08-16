<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace WebVL\WebVillasBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 * Description of WSVController
 * Web Service Controller
 *  The very prototype of a Web Service that turns form selections
 * on xml form!!
 * 
 * @author NIKOLAS
 */
class WSVController extends Controller 
{
    public function indexAction() { // Render Web Service page
        
        try{
         $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT r.id, r.state FROM WebVLWebVillasBundle:States r')->getResult();
  
        return $this->render('WebVLWebVillasBundle:WSV:WebService.html.twig',
                array(
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
    
    public function WebXMLAction($id = -1,$Address = "",$State="", $all = 1) { // Creates the xml of 
        // the form selection 
        // $Id of Villa  if -1  then no villa selected
        // $Address is the Address for Villas
        // $State  = The State of the Villas
        // $all  1 for available equipment
        
        
        $respxml = '<?xml version="1.0" encoding="UTF-8"?>'.
                '<!DOCTYPE Villas SYSTEM "http://'.$_SERVER["HTTP_HOST"].'/ProIVWebVIlla/web/bundles/webvlwebvillas/VillasEntity.dtd">'
                .'<Villas>';
       
        $em = $this->getDoctrine()->getManager();
        if($id != -1 &&  preg_match('/^[0-9]+$/', $id))
        {
          $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE v.idVillas = :id')->setParameter('id',$id)->getResult();  
          $idb = true;
        }else{
            $idb = false;
        }
        if($Address != "" && preg_match('/^[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+$/u', $Address))
        {
           $addr = true;
           if($idb)
           {
             $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE v.idVillas = :id OR v.address LIKE :address ')->setParameters(array(
                      ':address'=>'%'.$Address.'%',
                      ':id'=>$id))->getResult();  
           }else{
               $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE v.address LIKE :address')->setParameter(':address','%'.$Address.'%')->getResult();  
           }
        }
        else{
            $addr = false;
            if(!$idb)
            {
        $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v')->getResult();
            }
        }
        
       if($State != "" &&  preg_match('/^[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+$/u', $State ))
       {
           $ste = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:States v '
                  . 'WHERE v.state = :state')->setParameter(':state',$State)->getResult();
           if($idb)
            {
             if($addr)
              {
                 if(count($ste) > 0)
                    {
            $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE v.idVillas = :id OR v.states = :state OR v.address LIKE :address')->setParameters(array(':state'=>$ste[0],
                      ':address'=>'%'.$Address.'%',':id'=>$id))->getResult();  
           
                     }
              }else{
                  if(count($ste) > 0)
                    {
            $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE v.idVillas = :id OR v.states = :state')->setParameters(array(':state'=>$ste[0],
                      ':id'=>$id))->getResult();  
           
           
                    }
           
                   }
            }else{
                 if($addr)
              {
                 if(count($ste) > 0)
                    {
            $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE  v.states = :state OR v.address LIKE :address')->setParameters(array(':state'=>$ste[0],
                      ':address'=>'%'.$Address.'%'))->getResult();  
           
                     }
              }else{
                  if(count($ste) > 0)
                    {
            $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v '
                  . 'WHERE  v.states = :state')->setParameter(':state',$ste[0])->getResult();  
           
           
                    }
           
                   } 
            }
       }else{
           
            if(!$addr && !$idb)
              {
            $Query = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v')->getResult();
              }
             
       }
      
               
if($all == 1)// 1 Means Villas With Available Equipment
        {
       
    foreach($Query as $vill)
        {
            $av = $em->createQuery('SELECT a FROM WebVLWebVillasBundle:AvailEquipment'
                    . ' a WHERE a.villasVillas = :villa')->setParameter('villa',$vill)->getResult();
            if(count($av) > 0)
            {
            $respxml.='<villa id="'.$vill->getIdVillas().'">'.
                    '<address>'.$vill->getAddress().'</address>'.
                    '<size>'.$vill->getSize().'</size>'.
                    '<Restrooms>'.$vill->getRestrooms().'</Restrooms>'.
                    '<Rooms>'.$vill->getRooms().'</Rooms>'.
                    '<View>'.$vill->getView().'</View>'.
                    '<Price>'.$vill->getPrice().'</Price>'.
                    '<Details>'.$vill->getDetails().'</Details>'.
                    '<State id="'.$vill->getStates()->getId().'">'.$vill->getStates()->getState().'</State>'.
                    '<GeoX>'.$vill->getGeox().'</GeoX>'.
                    '<GeoY>'.$vill->getGeoy().'</GeoY>'.
                    '<user>'.$vill->getUsers()->getUsername().'</user>'.
                    '<Pool>'.($av[0]->getPool() == 1 ? 'True' : 'False').'</Pool>'.
                    '<Sauna>'.($av[0]->getSauna() == 1 ? 'True' : 'False').'</Sauna>'.
                    '<Parking>'.($av[0]->getParking()).'</Parking>'.
                     '<Gym>'.($av[0]->getGym() == 1 ? 'True' : 'False').'</Gym>'.
                    '</villa>';
            }
            else{
                $respxml.='<villa>'.
                    '<address>'.$vill->getAddress().'</address>'.
                    '<size>'.$vill->getSize().'</size>'.
                    '<Restrooms>'.$vill->getRestrooms().'</Restrooms>'.
                    '<Rooms>'.$vill->getRooms().'</Rooms>'.
                    '<View>'.$vill->getView().'</View>'.
                    '<Price>'.$vill->getPrice().'</Price>'.
                    '<Details>'.$vill->getDetails().'</Details>'.
                    '<State>'.$vill->getStates()->getState().'</State>'.
                    '<GeoX>'.$vill->getGeox().'</GeoX>'.
                    '<GeoY>'.$vill->getGeoy().'</GeoY>'.
                    '<id>'.$vill->getIdVillas().'</id>'.
                    '<user>'.$vill->getUsers()->getUsername().'</user>'.
                    '</villa>';
            }
        }
        }
        else{
          foreach($Query as $vill)
        {
          
                $respxml.='<villa>'.
                    '<address>'.$vill->getAddress().'</address>'.
                    '<size>'.$vill->getSize().'</size>'.
                    '<Restrooms>'.$vill->getRestrooms().'</Restrooms>'.
                    '<Rooms>'.$vill->getRooms().'</Rooms>'.
                    '<View>'.$vill->getView().'</View>'.
                    '<Price>'.$vill->getPrice().'</Price>'.
                    '<Details>'.$vill->getDetails().'</Details>'.
                    '<State>'.$vill->getStates()->getState().'</State>'.
                    '<GeoX>'.$vill->getGeox().'</GeoX>'.
                    '<GeoY>'.$vill->getGeoy().'</GeoY>'.
                    '<id>'.$vill->getIdVillas().'</id>'.
                    '<user>'.$vill->getUsers()->getUsername().'</user>'.
                    '</villa>';
            }
          
        }
        
        $respxml .= '</Villas>';
        
        return new Response($respxml,200,array('Content-Type'=>'text/xml'));
        
    }
}
