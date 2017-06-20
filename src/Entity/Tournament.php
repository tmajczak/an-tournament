<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:31
 */

namespace ANTournament\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("repository=TournamentRepository")
 * @ORM\Table(name="tournament")
 */
class Tournament
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Round", mappedBy="tournament", cascade={"persist", "remove"})
     *
     * @var ArrayCollection
     */
    private $rounds;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="tournament", cascade={"persist", "remove"})
     *
     * @var ArrayCollection
     */
    private $players;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return ArrayCollection
     */
    public function getRounds(): ArrayCollection
    {
        return $this->rounds;
    }

    /**
     * @param ArrayCollection $rounds
     *
     * @return Tournament
     */
    public function setRounds(ArrayCollection $rounds): Tournament
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getPlayers(): ArrayCollection
    {
        return $this->players;
    }

    /**
     * @param ArrayCollection $players
     *
     * @return Tournament
     */
    public function setPlayers(ArrayCollection $players): Tournament
    {
        $this->players = $players;

        return $this;
    }
}
