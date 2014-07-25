<?php

namespace Mhor\PushMusicLibBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFeedback
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserFeedback
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
     * @var integer
     *
     * @ORM\Column(name="mark", type="integer")
     */
    private $mark;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set mark
     *
     * @param integer $mark
     * @return UserFeedback
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return integer 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return UserFeedback
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
