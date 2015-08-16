<?php

namespace WebVL\WebVillasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvailEquipment
 *
 * @ORM\Table(name="avail_equipment", indexes={@ORM\Index(name="fk_Avail_Equipment_Villas1_idx", columns={"Villas_id_villas"})})
 * @ORM\Entity
 */
class AvailEquipment
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="Pool", type="boolean", nullable=false)
     */
    private $pool;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gym", type="boolean", nullable=false)
     */
    private $gym;

    /**
     * @var integer
     *
     * @ORM\Column(name="Parking", type="integer", nullable=false)
     */
    private $parking;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Sauna", type="boolean", nullable=false)
     */
    private $sauna;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \WebVL\WebVillasBundle\Entity\Villas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="WebVL\WebVillasBundle\Entity\Villas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Villas_id_villas", referencedColumnName="id_villas")
     * })
     */
    private $villasVillas;

public function __construct(\WebVL\WebVillasBundle\Entity\Villas $villasVillas,$id)
    {
             
            $this->id = $id;
        $this->villasVillas = $villasVillas;

      
    
    }

    /**
     * Set pool
     *
     * @param boolean $pool
     * @return AvailEquipment
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * Get pool
     *
     * @return boolean 
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * Set gym
     *
     * @param boolean $gym
     * @return AvailEquipment
     */
    public function setGym($gym)
    {
        $this->gym = $gym;

        return $this;
    }

    /**
     * Get gym
     *
     * @return boolean 
     */
    public function getGym()
    {
        return $this->gym;
    }

    /**
     * Set parking
     *
     * @param integer $parking
     * @return AvailEquipment
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return integer 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set sauna
     *
     * @param boolean $sauna
     * @return AvailEquipment
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;

        return $this;
    }

    /**
     * Get sauna
     *
     * @return boolean 
     */
    public function getSauna()
    {
        return $this->sauna;
    }

  

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set villasVillas
     *
     * @param \WebVL\WebVillasBundle\Entity\Villas $villasVillas
     * @return AvailEquipment
     */
    public function setVillasVillas(\WebVL\WebVillasBundle\Entity\Villas $villasVillas)
    {
        $this->villasVillas = $villasVillas;

        return $this;
    }

    /**
     * Get villasVillas
     *
     * @return \WebVL\WebVillasBundle\Entity\Villas 
     */
    public function getVillasVillas()
    {
        return $this->villasVillas;
    }
}
