<?php

namespace Mhor\PushMusicLibBundle\Entity\Push;

use Doctrine\ORM\Mapping as ORM;

/**
 * Push
 *
 * @ORM\Table()
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
}
