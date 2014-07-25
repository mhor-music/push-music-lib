<?php

namespace Mhor\PushMusicLibBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTrackModification
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserTrackModification
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
     * @ORM\Column(name="dateModification", type="datetime")
     */
    private $dateModification;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modification", type="boolean")
     */
    private $modification;

    /**
     * @var boolean
     *
     * @ORM\Column(name="creation", type="boolean")
     */
    private $creation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deletion", type="boolean")
     */
    private $deletion;


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
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return UserTrackModification
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set modification
     *
     * @param boolean $modification
     * @return UserTrackModification
     */
    public function setModification($modification)
    {
        $this->modification = $modification;

        return $this;
    }

    /**
     * Get modification
     *
     * @return boolean 
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * Set creation
     *
     * @param boolean $creation
     * @return UserTrackModification
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return boolean 
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set deletion
     *
     * @param boolean $deletion
     * @return UserTrackModification
     */
    public function setDeletion($deletion)
    {
        $this->deletion = $deletion;

        return $this;
    }

    /**
     * Get deletion
     *
     * @return boolean 
     */
    public function getDeletion()
    {
        return $this->deletion;
    }
}
