<?php

namespace WebVL\WebVillasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Villas
 *
 * @ORM\Table(name="villas", uniqueConstraints={@ORM\UniqueConstraint(name="id_villas_UNIQUE", columns={"id_villas"})}, indexes={@ORM\Index(name="fk_villas_States1_idx", columns={"States_ID"}), @ORM\Index(name="fk_Villas_Users1_idx", columns={"Users_ID"})})
 * @ORM\Entity
 */
class Villas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=false)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="rooms", type="integer", nullable=false)
     */
    private $rooms;

    /**
     * @var integer
     *
     * @ORM\Column(name="restrooms", type="integer", nullable=false)
     */
    private $restrooms;

    /**
     * @var string
     *
     * @ORM\Column(name="view", type="string", length=100, nullable=true)
     */
    private $view;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=60, nullable=false)
     */
    private $address;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="GeoX", type="string", length=255, nullable=false)
     */
    private $geox;

    /**
     * @var string
     *
     * @ORM\Column(name="GeoY", type="string", length=255, nullable=false)
     */
    private $geoy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_villas", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVillas;

    /**
     * @var \WebVL\WebVillasBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="WebVL\WebVillasBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Users_ID", referencedColumnName="ID")
     * })
     */
    private $users;

    /**
     * @var \WebVL\WebVillasBundle\Entity\States
     *
     * @ORM\ManyToOne(targetEntity="WebVL\WebVillasBundle\Entity\States")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="States_ID", referencedColumnName="ID")
     * })
     */
    private $states;

public function __construct()
    {
    
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return Villas
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set rooms
     *
     * @param integer $rooms
     * @return Villas
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Get rooms
     *
     * @return integer 
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Set restrooms
     *
     * @param integer $restrooms
     * @return Villas
     */
    public function setRestrooms($restrooms)
    {
        $this->restrooms = $restrooms;

        return $this;
    }

    /**
     * Get restrooms
     *
     * @return integer 
     */
    public function getRestrooms()
    {
        return $this->restrooms;
    }

    /**
     * Set view
     *
     * @param string $view
     * @return Villas
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return string 
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Villas
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Villas
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Villas
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set geox
     *
     * @param string $geox
     * @return Villas
     */
    public function setGeox($geox)
    {
        $this->geox = $geox;

        return $this;
    }

    /**
     * Get geox
     *
     * @return string 
     */
    public function getGeox()
    {
        return $this->geox;
    }

    /**
     * Set geoy
     *
     * @param string $geoy
     * @return Villas
     */
    public function setGeoy($geoy)
    {
        $this->geoy = $geoy;

        return $this;
    }

    /**
     * Get geoy
     *
     * @return string 
     */
    public function getGeoy()
    {
        return $this->geoy;
    }

    /**
     * Get idVillas
     *
     * @return integer 
     */
    public function getIdVillas()
    {
        return $this->idVillas;
    }

    /**
     * Set users
     *
     * @param \WebVL\WebVillasBundle\Entity\Users $users
     * @return Villas
     */
    public function setUsers(\WebVL\WebVillasBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \WebVL\WebVillasBundle\Entity\Users 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set states
     *
     * @param \WebVL\WebVillasBundle\Entity\States $states
     * @return Villas
     */
    public function setStates(\WebVL\WebVillasBundle\Entity\States $states = null)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * Get states
     *
     * @return \WebVL\WebVillasBundle\Entity\States 
     */
    public function getStates()
    {
        return $this->states;
    }
}
