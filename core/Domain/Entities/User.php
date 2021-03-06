<?php
declare(strict_types=1);
namespace Core\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private string $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private string $lastName;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255)
     */
    private string $email;

    /**
     * @var string
     * @ORM\Column(name="password", type="string", length=255)
     */
    private string $password;

    /**
     * @var Role
     * @ORM\ManyToOne (targetEntity="Core\Domain\Entities\Role", inversedBy="user", fetch="EAGER", cascade={"persist"})
     * @ORM\JoinColumn (name="role_id", referencedColumnName="id")
     */
    private Role $role;


    
    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    
    /**
     * @param $firstName
     */
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
   
    
    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
  
     /**
     * @param $lastName
     */
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
   
    
    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
  
     /**
     * @param $email
     */
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
   
    
    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
  
     /**
     * @param $password
     */
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
   
    
   /**
    * @return Role
    */
    public function getRole() : Role
    {
        return $this->role;
    }
  
   /**
    * @param $role
    */
    public function setRole(Role $role) : void
    {
        $this->role = $role;
    }
   



}