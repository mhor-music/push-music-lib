<?php

namespace Mhor\PushMusicLibBundle\Entity\Push;

use Doctrine\ORM\Mapping as ORM;

/**
 * Push
 *
 * @ORM\Table(name="push")
 * @ORM\Entity
 */
class Push
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
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="chunk", type="integer")
     */
    private $chunk;

    /**
     * @var boolean
     *
     * @ORM\Column(name="success", type="boolean")
     */
    private $success;

    /**
     * @var boolean
     *
     * @ORM\Column(name="first", type="boolean")
     */
    private $first = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="last", type="boolean")
     */
    private $last = false;

    /**
     * @var Device
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Push\Device",
     *  inversedBy="pushs"
     * )
     * @ORM\JoinColumn(nullable=true)
     */
    private $device;

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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Push
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return Push
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return int
     */
    public function getChunk()
    {
        return $this->chunk;
    }

    /**
     * @param int $chunk
     * @return Push
     */
    public function setChunk($chunk)
    {
        $this->chunk = $chunk;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param boolean $first
     * @return Push
     */
    public function setFirst($first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param boolean $last
     * @return Push
     */
    public function setLast($last)
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return Device
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param Device $device
     * @return Push
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }
}
