<?php

namespace WebVL\WebVillasBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="id users_UNIQUE", columns={"ID"}), @ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"}), @ORM\UniqueConstraint(name="email_UNIQUE", columns={"email"})})
 * @ORM\Entity(repositoryClass="WebVL\WebVillasBundle\Entity\UsersRepository")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="Theme", type="integer", nullable=true)
     */
    private $theme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activated", type="boolean", nullable=false)
     */
    private $activated;

    /**
     * @var string
     *
     * @ORM\Column(name="Activation_Code", type="string", length=255, nullable=false)
     */
    private $activationCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joined", type="datetime", nullable=false)
     */
    private $joined;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="WebVL\WebVillasBundle\Entity\Roles", inversedBy="users")
     * @ORM\JoinTable(name="users_roles",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Users_ID", referencedColumnName="ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Roles_id", referencedColumnName="id")
     *   }
     * )
     */
    private $roles;

    
    /**
     * Constructor
     */
    public function __construct()
    {
         // $this->activated = FALSE;
        $this->salt = md5(uniqid(null, true));
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

/**
* @inheritDoc
*/
public function eraseCredentials()
{
}
/**
* @see \Serializable::serialize()
*/
public function serialize()
{
return serialize(array(
$this->id,
$this->username,
$this->salt,
$this->password,
$this->theme,
));
}
/**
* @see \Serializable::unserialize()
*/
public function unserialize($serialized)
{
list (
$this->id,
$this->username,
$this->salt,
$this->password,
$this->theme,
) = unserialize($serialized);
}



    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set theme
     *
     * @param integer $theme
     * @return Users
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return integer 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set activated
     *
     * @param boolean $activated
     * @return Users
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return boolean 
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set activationCode
     *
     * @param string $activationCode
     * @return Users
     */
    public function setActivationCode($activationCode)
    {
        $this->activationCode = $activationCode;

        return $this;
    }

    /**
     * Get activationCode
     *
     * @return string 
     */
    public function getActivationCode()
    {
        return $this->activationCode;
    }

    /**
     * Set joined
     *
     * @param \DateTime $joined
     * @return Users
     */
    public function setJoined($joined)
    {
        $this->joined = $joined;

        return $this;
    }

    /**
     * Get joined
     *
     * @return \DateTime 
     */
    public function getJoined()
    {
        return $this->joined;
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
     * Add roles
     *
     * @param \WebVL\WebVillasBundle\Entity\Roles $roles
     * @return Users
     */
    public function addRole(\WebVL\WebVillasBundle\Entity\Roles $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param \WebVL\WebVillasBundle\Entity\Roles $roles
     */
    public function removeRole(\WebVL\WebVillasBundle\Entity\Roles $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }
}
