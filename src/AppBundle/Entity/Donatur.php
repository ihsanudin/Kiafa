<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfonian\Indonesia\CoreBundle\Toolkit\DoctrineManager\Model\EntityInterface;

/**
 * @ORM\Table(name="donatur")
 * @ORM\Entity
 */
class Donatur implements EntityInterface
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="full_name", type="string", length=77)
     */
    protected $fullName;

    /**
     * @ORM\Column(name="address", type="string", length=255)
     */
    protected $address;

    /**
     * @ORM\Column(name="email", type="string", length=77)
     */
    protected $email;

    /**
     * @ORM\Column(name="phone_number", type="string", length=27)
     */
    protected $phoneNumber;

    /**
     * @ORM\Column(name="is_hamba_allah", type="boolean")
     */
    protected $isHambaAllah;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function isHambaAllah($hambaAllah = null)
    {
        if (null === $hambaAllah) {
            return $this->isHambaAllah;
        }

        $this->isHambaAllah = (boolean) $hambaAllah;
    }
}
