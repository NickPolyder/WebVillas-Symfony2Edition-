<?php

namespace WebVL\WebVillasBundle\Entity\Forms;
use Symfony\Component\Validator\Constraints as Assert;

class AddVilF
{
     // <editor-fold defaultstate="collapsed" desc="Variables">
    
     /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your Size must be a Number !"
     * )
     * 
     */
   
    protected $size;
    
     /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your Rooms must be a Number !"
     * )
     * 
     */
   
    protected $rooms;
    
     /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your RestRooms must be a Number !"
     * )
     * 
     */
  
    protected $restrooms;
    
   /**
     *
     * @var string
     * @Assert\Length(
     *      min = "2",
     *      max = "100",
     *      minMessage = "Your View must be at least {{ limit }} characters length!",
     *      maxMessage = "Your View cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your View must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
   
    protected $view;
    
    /**
     *
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = "2",
     *      max = "60",
     *      minMessage = "Your Address must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Address cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your Address must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
   
    protected $address;
    
    /**
     * @var float
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+((\.|\,)[0-9]+)?/",
     * htmlPattern="[0-9]+((\.|\,)[0-9]+)?",
     * message = "Your Price must be a Number !"
     * )
     * 
     */
    
    protected $price;
    
    /**
     *
     * @var string
     * 
     * 
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your Details must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
    
    protected $details;
    
     /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9 \. \-]+$/",
     * htmlPattern="^[0-9 \. \-]+$",
     * message = "Must be coordinates"
     * )
     */
    protected $geoX;
    
     /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9 \. \-]+$/",
     * htmlPattern="^[0-9 \. \-]+$",
     * message = "Must be coordinates"
     * )
     */
    
    protected $geoY;
    
    protected $pool;
    
    protected $gym;
   
    /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9]+$/",
     * htmlPattern="^[0-9]+$",
     * message = "Must be a number but not negative"
     * )
     */
    protected $parking;

    protected $sauna;
      // </editor-fold>
   
    
    // <editor-fold defaultstate="collapsed" desc="Getters">

    
    /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your Size must be a Number !"
     * )
     * 
     */
  
    public function getSize() {
        
        return $this->size;
    }
    
   /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your Rooms must be a Number !"
     * )
     * 
     */
  
    public function getRooms() {
        return $this->rooms;
    } 
    
    /**
     * @var integer
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+/",
     * htmlPattern="[0-9]+",
     * message = "Your RestRooms must be a Number !"
     * )
     * 
     */
   
    public function getRestrooms() {
        return $this->restrooms;
        
    } 

       /**
     *
     * @var string
     * @Assert\Length(
     *      min = "2",
     *      max = "100",
     *      minMessage = "Your View must be at least {{ limit }} characters length!",
     *      maxMessage = "Your View cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your View must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
    
     public function getView() {
        return $this->view;
        
    } 

     /**
     *
     * @var string
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = "2",
     *      max = "60",
     *      minMessage = "Your Address must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Address cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9 \!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your Address must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
    
     public function getAddress() {
        return $this->address;
        
    } 
    
    /**
     * @var float
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/[0-9]+((\.|\,)[0-9]+)?/",
     * htmlPattern="[0-9]+((\.|\,)[0-9]+)?",
     * message = "Your Price must be a Number !"
     * )
     * 
     */
    
    public function getPrice() {
        return $this->price;
        
    } 
    
    /**
     *
     * @var string
     * 
     * 
     * @Assert\Regex(
     * pattern="/[ \x{0374}-\x{03FF}A-Za-z0-9\!\.\'\n\t\r\<br\/\>]+/u",
     * message = "Your Details must have only these characters --> (Α-Ω ,α-ω ,a-z ,A-Z ,0-9 , . , " ) !"
     * )
     */
    
    
    public function getDetails() {
        return $this->details;
        
    } 
    
     /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9 \. \-]+$/",
     * htmlPattern="^[0-9 \. \-]+$",
     * message = "Must be coordinates"
     * )
     */
   
    public function getGeoX() {
        return $this->geoX;
        
    } 
    
     /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9 \. \-]+$/",
     * htmlPattern="^[0-9 \. \-]+$", 
     * message = "Must be coordinates"
     * )
     */
    
    public function getGeoY() {
        return $this->geoY;
        
    } 
    
    
    public function getPool()
    {
        return $this->pool;
    }
    
    
    public function getGym()
    {
        return $this->gym;
    }
   
    /**
     *
     * 
     * 
     * @Assert\NotBlank
     * @Assert\Regex(
     * pattern="/^[0-9 \. \-]+$/",
     * htmlPattern="^[0-9 \. \-]+$",
     * message = "Must be coordinates"
     * )
     */
    
    public function getParking()
    {
        return $this->parking;
    }
    
    public function getSauna()
    {
        return $this->sauna;
    }
    
    
    // </editor-fold>
   
   
     // <editor-fold defaultstate="collapsed" desc="Setters">
    public function setSize($siz) {
        
         $this->size = $siz;
         return $this;
    }
    
   
    public function setRooms($room) {
        $this->rooms = $room;
        return $this;
    } 
   
    public function setRestrooms($restRo) {
        $this->restrooms = $restRo;
        return $this;
    } 
  
     public function setView($View) {
       $this->view = $View;
        return $this;
    } 
   
     public function setAddress($addr) {
       $this->address = $addr;
        return $this;
    } 
    public function setPrice($Price) {
        $this->price = $Price;
        return $this;
    } 
    
     public function setDetails($dets) {
        $this->details = $dets;
        return $this;
    } 
    
     public function setGeoX($Gex) {
        $this->geoX = $Gex;
        return $this;
    } 
    
     public function setGeoY($Gey) {
        $this->geoY = $Gey;
        return $this;
    } 
    
      public function setPool($poool)
    {
         $this->pool = $poool;
         return $this;
    }
    
    
    public function setGym($gymn)
    {
         $this->gym = $gymn;
         return $this;
    }
   
    
    public function setParking($park)
    {
         $this->parking = $park;
    
         return $this;
    }
    
    public function setSauna($saun)
    {
        $this->sauna = $saun;
    
        return $this;
    }
     // </editor-fold>
    
}
