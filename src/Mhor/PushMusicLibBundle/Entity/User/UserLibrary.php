<?php

namespace Mhor\PushMusicLibBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLibrary
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserLibrary
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
