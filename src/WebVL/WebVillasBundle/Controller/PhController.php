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
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Description of PhotosController
 *
 * @author NIKOLAS
 */
class PhController extends Controller {
    
    // Render Add Photo Page
    public function AddPAction() {
        
        return $this->render('WebVLWebVillasBundle:Villas:Ph/AddPhoto.html.twig');
        
    }
    
    // Uploads the Photo and check for the conditions that is required for the Photo to be uploaded
    public function AddPCheckAction(Request $request)
    {
      //  $Photos =  $_FILES["imgFilename"];
        $Counter = 0;
       $Photos = $request->files->get('imgFilename'); 
        $Desc = $request->request->get("ImageDescription");
   if(($Desc != "" || $Desc != null) && preg_match("/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u", $Desc))
      {
      $flagD = True;
       }else{
     $flagD = false;
 }
if(count($Photos) > 0 )
{
      foreach($Photos as $photo)
      {
          if($photo->getClientSize() <= "2422455") // size about 2 mb
          {
       if($photo->getClientMimeType() == "image/jpeg" || $photo->getClientMimeType() == "image/png")   
       {
           try{
                  $em = $this->getDoctrine()->getManager();
                 
                  $villa = $em->createQuery("SELECT v FROM WebVLWebVillasBundle:Villas v WHERE v.users = :user")
                          ->setParameter(":user",$this->getUser())->getOneOrNullResult();
                  if($villa != null)
                  {
                          $st = $this->getDoctrine()->getManager();
                 $query = $st->createQuery("SELECT count(r) FROM WebVLWebVillasBundle:Photos r "
               );
            $id = $query->getSingleResult();
          
                      $InsPhotos = new \WebVL\WebVillasBundle\Entity\Photos($villa,$id[1]+1);
                   $newfilename = "".uniqid("Image-",true).'.'.$photo->getClientOriginalExtension();
     $photo->move("../web/bundles/webvlwebvillas/images/UserImages/",$newfilename);
                      $Desc = $request->request->get("ImageDescription");
                      if($flagD)
                      {
                          $InsPhotos->setDescription($Desc);
                      }
                      $InsPhotos->setFilename($newfilename);
                  
                       $em->persist($InsPhotos);
                       $em->flush();
                      $Counter++;
                      }else{
                          return $this->redirect($this->generateUrl('_Villas',
                   array('Errors'=>'You dont have a Villa Or Permission to do this!')));
                      }
                  

//               ,$photo->getClientMimeType()
//               ,$photo->getClientSize());
           }catch(\PDOException $e)
           {
                   return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
           }
       }else{
           return $this->render('WebVLWebVillasBundle:Villas:Ph/AddPhoto.html.twig',array(
            'Error'=>  "Error on Photo: ".$photo->getClientOriginalName()."The type of file must be jpeg(jpg) or png"
        )); 
       }  
       
       }else{
              return $this->render('WebVLWebVillasBundle:Villas:Ph/AddPhoto.html.twig',array(
            'Error'=>  "Error on Photo: ".$photo->getClientOriginalName()."The size of file must be bellow 2,3 Mb "
        ));
    }  
          }
          
    
        return $this->redirect($this->generateUrl('_Villas',
                        array('Success'=> 'You Successfuly uploaded '.$Counter.' Photo/\'s!')
        ));
    }else{
      return $this->render('WebVLWebVillasBundle:Villas:Ph/AddPhoto.html.twig',array(
            'Error'=>  "Error try to put 1 or 2 photos!"
        ));   
    }
    
    }
    
    //Renders the Edit Photo Action Only if the Conditions are true
    public function EditAction($id = -1) {
      if(preg_match('/^(\-)?[0-9]+$/', $id))
            {
        try{
          $em = $this->getDoctrine()->getManager();
         $villa = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v WHERE v.users = :id '
               )->setParameter(':id',$this->getUser())->getSingleResult();
            
        $photos = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.idVillas = :vill')
                ->setParameter(":vill",$villa)->getResult();
   if(count($photos) >0 )
   {
       if($id == -1)
       {
     return $this->render('WebVLWebVillasBundle:Villas:Ph/EditPhoto.html.twig',array('id'=>$id,
         'Photo' => $photos)); 
       }else{
           $img = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.id = :vill')
                ->setParameter(":vill",$id)->getOneOrNullResult();
            return $this->render('WebVLWebVillasBundle:Villas:Ph/EditPhoto.html.twig',array('id'=>$id,
         'img' => $img )); 
       }
     
   }else{
       return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'You dont have any photo\'s'
                    ))); 
   }
        }catch(\PDOException $e)
        {
          return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );   
        }
            }else{
               return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'Something Happend with Id!'
                    )));
               
           }
    }
    
    //Stores the Edit 
    public function EditCheckAction(Request $request,$id = -1)
    {
          if($id != -1 && preg_match('/^[0-9]+$/', $id))
            {
        try{
              $em = $this->getDoctrine()->getManager();
             $photos = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.id= :vill')
                ->setParameter(":vill",$id)->getResult();
   if(count($photos) >0 )
   {
       $textitext =  $request->request->get("ImageDescription",null);
       if(preg_match("/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",$textitext) && $textitext != null)
       {
           $photos[0]->setDescription($textitext);
           $em->flush();
   return $this->redirect($this->generateUrl('_Villas',
               array('Success'=> 'The Photo with Id '.$id.' Edited Successfully!'
                    )));
       }else{
           return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'Good Try!'
                    ))); 
       }
   }else{
       return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'You dont have any photo\'s'
                    ))); 
   }
            
         }catch(\PDOException $e)
        {
          return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );   
        }  
            
            }else{
               return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'Something Happend with Id!'
                    )));
               
           }
    }
    
    //Renders Delete Photo page
    public function DeleteAction()
    {
        try{
          $em = $this->getDoctrine()->getManager();
         $villa = $em->createQuery('SELECT v FROM WebVLWebVillasBundle:Villas v WHERE v.users = :id '
               )->setParameter(':id',$this->getUser())->getSingleResult();
            
        $photos = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.idVillas = :vill')
                ->setParameter(":vill",$villa)->getResult();
   if(count($photos) >0 )
   {
       return $this->render('WebVLWebVillasBundle:Villas:Ph/DelPhoto.html.twig',array(
             'photo' => $photos
         )); 
   }else{
       return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'You dont have any photo\'s'
                    )));
   }

        }catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
    }
    
    // Delete's The Photo
     public function DeleteCheckAction($id = -1)
    {
            if($id != -1 && preg_match('/^[0-9]+$/', $id))
            {
        try{
          $em = $this->getDoctrine()->getManager();
        
            
        $photos = $em->createQuery('SELECT p FROM WebVLWebVillasBundle:Photos p WHERE p.id = :vill')
                ->setParameter(":vill",$id)->getResult();
   if(count($photos) >0 )
   { 
       
       $file_path = '../web/bundles/webvlwebvillas/images/UserImages/'.$photos[0]->getFilename();
    if(file_exists($file_path))
    {
        
        unlink($file_path);
    $em->remove($photos[0]);
    $em->flush();
    
    }else{
        $em->remove($photos[0]);
    $em->flush();
      return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'The File Does not Exist!'
                    )));   
    }
      return $this->redirect($this->generateUrl('_Villas',
               array('Success'=> 'The Photo with Id '.$id.' just have been deleted!'
                    )));
   }else{
       return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'You dont have any photo\'s'
                    )));
   }

        }catch(\PDOException $e)
        {
             return $this->render('WebVLWebVillasBundle:Default:Errors.html.twig',array(
                 'Errors' => array("Name"=>"Database Error","Message"=>"We have some problem with our database!")
             )
        );
        }
           }else{
               return $this->redirect($this->generateUrl('_Villas',
               array('Errors'=> 'Something Happend with Id!'
                    )));
               
           }
    }
    //put your code here
}
