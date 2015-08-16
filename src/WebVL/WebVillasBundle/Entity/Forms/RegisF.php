<?php

namespace WebVL\WebVillasBundle\Entity\Forms;
use Symfony\Component\Validator\Constraints as Assert;

class RegisF
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
    protected $Username;
    
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = "8",
     *      max = "50",
     *      minMessage = "Your Password must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Password cannot be longer than {{ limit }} characters length!"
     * )  
     * @Assert\Regex(
     * pattern="/^[a-zA-Z0-9_@!]+$/",
     * htmlPattern = "^[a-zA-Z0-9_@!]+$",
     * message="Your Password must have only these characters --> (a-z,A-Z,0-9, _ , @ , ! ) !"
     * )    
     * 
     */
    protected $Password;
    
     
    protected $RePassword;
    
    /**
     * @Assert\NotBlank
     * @Assert\Email(
     * checkMX = true,
     * checkHost = true
     * )   
     * 
     */
    protected $Email;
    
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
    
    public function getUsername()
    {
        return $this->Username;
    }
    
    public function setUsername($UserName)
    {
        $this->Username = $UserName;
        return $this;
    }
       /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = "8",
     *      max = "50",
     *      minMessage = "Your Password must be at least {{ limit }} characters length!",
     *      maxMessage = "Your Password cannot be longer than {{ limit }} characters length!"
     * )  
     * @Assert\Regex(
     * pattern="/^[a-zA-Z0-9_@!]+$/",
     * htmlPattern = "^[a-zA-Z0-9_@!]+$",
     * message="Your Password must have only these characters --> (a-z,A-Z,0-9, _ , @ , ! ) !"
     * )    
     * 
     */
    public function getPassword()
    {
        return $this->Password;
    }
    
   
    public function SetPassword($pass)
    {
         $this->Password = $pass;
         return $this;
    }
     
    public function getRePassword()
    {
        return $this->RePassword;
    }
    public function SetRePassword($RePass) {
        
        $this->RePassword = $RePass;
        return $this;
        
    }
    /**
     * @Assert\NotBlank
     * @Assert\Email(
     * checkMX = true,
     * checkHost = true
     * )   
     * 
     */
    public function getEmail() {
        
        return $this->Email;
    }
    
    public function setEmail($emaill) {
        
        $this->Email = $emaill;
        return $this;
    }
    
    
}
