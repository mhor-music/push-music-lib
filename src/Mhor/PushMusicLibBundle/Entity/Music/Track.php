<?php

namespace Mhor\PushMusicLibBundle\Entity\Music;

use Doctrine\ORM\Mapping as ORM;

/**
 * Track
 *
 * @ORM\Table(name="track")
 * @ORM\Entity
 */
class Track
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
     * @ORM\Column(name="duration", type="string")
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var Album
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Album",
     *  inversedBy="tracks"
     * )
     * @ORM\JoinColumn(nullable=false)
     */
    private $album;

    /**
     * @var Style
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Style")
     * @ORM\JoinColumn(nullable=true)
     */
    private $style;

    /**
     * @var Artist
     * @ORM\ManyToOne(
     *  targetEntity="Mhor\PushMusicLibBundle\Entity\Music\Artist")
     * @ORM\JoinColumn(nullable=false)
     */
     private $artist;

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
     * @return Track
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
     * Set duration
     *
     * @param string $duration
     * @return Track
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Track
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param Album $album
     * @return Track
     */
    public function setAlbum(Album $album)
    {
        $this->album = $album;
        return $this;
    }

    /**
     * @return Style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param Style $style
     * @return Track
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
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
     * @return Track
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
        return $this;
    }
}
