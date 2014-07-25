<?php

namespace Mhor\PushMusicLibBundle\Entity\Push;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Device
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validated", type="boolean")
     */
    private $validated;

    /**
     * @var string
     *
     * @ORM\Column(name="androidId", type="string", length=255)
     */
    private $androidId;


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
     * Set name
     *
     * @param string $name
     * @return Device
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Device
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * @param boolean $validated
     * @return Device
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
        return $this;
    }


    /**
     * Set androidId
     *
     * @param string $androidId
     * @return Device
     */
    public function setAndroidId($androidId)
    {
        $this->androidId = $androidId;

        return $this;
    }

    /**
     * Get androidId
     *
     * @return string
     */
    public function getAndroidId()
    {
        return $this->androidId;
    }
}
