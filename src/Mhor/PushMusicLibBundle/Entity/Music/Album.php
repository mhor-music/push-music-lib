<?php

namespace Mhor\PushMusicLibBundle\Entity\Music;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album")
 * @ORM\Entity
 */
class Album
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
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string")
     */
    private $year;

    /**
     * @var Artist
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Artist")
     * @ORM\JoinColumn(nullable=false)
     */
    private $artist;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Track",
     *  mappedBy="album"
     * )
     */
    private $tracks;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Album
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
     * Set year
     *
     * @param string $year
     * @return Album
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     *
     * @param Track $track
     * @return Album
     */
    public function addTrack(Track $track)
    {
        $this->tracks[] = $track;
        return $this;
    }

    /**
     *
     * @param Track $track
     */
    public function removeTrack(Track $track)
    {
        $this->tracks->removeElement($track);
    }

    /**
     *
     * @return ArrayCollection
     */
    public function getTrack()
    {
        return $this->tracks;
    }

    /**
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param Artist $artist
     * @return Album
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
        return $this;
    }
}
