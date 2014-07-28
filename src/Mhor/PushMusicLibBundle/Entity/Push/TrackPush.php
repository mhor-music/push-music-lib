<?php


namespace Mhor\PushMusicLibBundle\Entity\Push;

use Doctrine\ORM\Mapping as ORM;
use Mhor\PushMusicLibBundle\Entity\Music\Track;
use Mhor\PushMusicLibBundle\Entity\User\UserFeedback;

/**
 * TrackPush
 *
 * @ORM\Table(name="push_track")
 * @ORM\Entity
 */
class TrackPush
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
     * @var Track
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Track")
     * @ORM\JoinColumn(nullable=false)
     */
    private $track;

    /**
     * @var Push
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Push\Push")
     * @ORM\JoinColumn(nullable=false)
     */
    private $push;


    /**
     * @var UserFeedback
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\User\UserFeedback")
     * @ORM\JoinColumn(nullable=true)
     */
    private $userFeedback;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Push
     */
    public function getPush()
    {
        return $this->push;
    }

    /**
     * @param Push $push
     * @return TrackPush
     */
    public function setPush($push)
    {
        $this->push = $push;
        return $this;
    }

    /**
     * @return Track
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param Track $track
     * @return TrackPush
     */
    public function setTrack($track)
    {
        $this->track = $track;
        return $this;
    }

    /**
     * @return UserFeedback
     */
    public function getUserFeedback()
    {
        return $this->userFeedback;
    }

    /**
     * @param UserFeedback $userFeedback
     * @return TrackPush
     */
    public function setUserFeedback($userFeedback)
    {
        $this->userFeedback = $userFeedback;
        return $this;
    }
}
 