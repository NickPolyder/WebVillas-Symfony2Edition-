<?php

namespace WebVL\WebVillasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="fk_Photos_villas1_idx", columns={"Id_villas"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var string
     *
     * @ORM\Column(name="FIleName", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=150, nullable=true)
     */
    private $description;

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
     *   @ORM\JoinColumn(name="Id_villas", referencedColumnName="id_villas")
     * })
     */
    private $idVillas;

public function __construct(\WebVL\WebVillasBundle\Entity\Villas $villasVillas,$id) {
     $this->id = $id;
        $this->idVillas = $villasVillas;
}

    /**
     * Set filename
     *
     * @param string $filename
     * @return Photos
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Photos
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Photos
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set idVillas
     *
     * @param \WebVL\WebVillasBundle\Entity\Villas $idVillas
     * @return Photos
     */
    public function setIdVillas(\WebVL\WebVillasBundle\Entity\Villas $idVillas)
    {
        $this->idVillas = $idVillas;

        return $this;
    }

    /**
     * Get idVillas
     *
     * @return \WebVL\WebVillasBundle\Entity\Villas 
     */
    public function getIdVillas()
    {
        return $this->idVillas;
    }
}
