<?php

namespace WebVL\WebVillasBundle\Entity\Forms;
use Symfony\Component\Validator\Constraints as Assert;

class ActiveCodeF
{
    
    /**
     * @Assert\NotBlank
      * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Your Username must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Username cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern= "/^[a-zA-Z0-9_-]+$/",
     * htmlPattern = "^[a-zA-Z0-9_-]+$",
     * message = "Your Username must have only these characters --> (a-z,A-Z,0-9, _ , - ) !"
     * )    
     * 
     */
    protected $UserName;

    /**
     * @Assert\NotBlank
      * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Your Username must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Username cannot be longer than {{ limit }} characters length!"
     * )   
     * @Assert\Regex(
     * pattern= "/^[a-zA-Z0-9_-]+$/",
     * htmlPattern = "^[a-zA-Z0-9_-]+$",
     * message = "Your Username must have only these characters --> (a-z,A-Z,0-9, _ , - ) !"
     * )    
     * 
     */
    public function getUserName() {
        
        return $this->UserName;
    }
    public function setUserName($UsrName) {
        
        $this->UserName = $UsrName;
        return $this;
    }
    
    /**
     * @Assert\NotBlank(message="Activation Code  must not be Blank!")
     * @Assert\Length(min="10")
     * 
     */
    protected $ActivationCode;
    
    public function setActivationCode($ActiveCode) {
        
        $this->ActivationCode = $ActiveCode;
        return $this;
    }
    /**
     * @Assert\NotBlank(message="Activation Code  must not be Blank!")
     * @Assert\Length(min="10")
     * 
     */
    public function getActivationCode() {
        
        return $this->ActivationCode;
        
    }
    
    
}