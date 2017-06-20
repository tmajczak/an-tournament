<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:38
 */

namespace ANTournament\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("repository=PlayerRepository")
 * @ORM\Table(name="player")
 */
class Player
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
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="players")
     * @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     *
     * @var Tournament
     */
    private $tournament;

    /**
     * @ORM\ManyToOne(targetEntity="Identity")
     * @ORM\JoinColumn(name="runner", referencedColumnName="id")
     *
     * @var Identity
     */
    private $runner;

    /**
     * @ORM\ManyToOne(targetEntity="Identity")
     * @ORM\JoinColumn(name="corp", referencedColumnName="id")
     *
     * @var Identity
     */
    private $corporation;

    /**
     * @ORM\Column(name="name")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(name="points", type="smallint")
     *
     * @var int
     */
    private $points = 0;

    /**
     * @ORM\Column(name="sos", type="decimal", precision=10, scale=2)
     *
     * @var float
     */
    private $sos = 0.00;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Tournament
     */
    public function getTournament(): Tournament
    {
        return $this->tournament;
    }

    /**
     * @param Tournament $tournament
     *
     * @return Player
     */
    public function setTournament(Tournament $tournament): Player
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * @return Identity
     */
    public function getRunner(): Identity
    {
        return $this->runner;
    }

    /**
     * @param Identity $runner
     *
     * @return Player
     */
    public function setRunner(Identity $runner): Player
    {
        $this->runner = $runner;

        return $this;
    }

    /**
     * @return Identity
     */
    public function getCorporation(): Identity
    {
        return $this->corporation;
    }

    /**
     * @param Identity $corporation
     *
     * @return Player
     */
    public function setCorporation(Identity $corporation): Player
    {
        $this->corporation = $corporation;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Player
     */
    public function setName(string $name): Player
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     *
     * @return Player
     */
    public function setPoints(int $points): Player
    {
        $this->points = $points;

        return $this;
    }

    /**
     * @return float
     */
    public function getSos(): float
    {
        return $this->sos;
    }

    /**
     * @param float $sos
     *
     * @return Player
     */
    public function setSos(float $sos): Player
    {
        $this->sos = $sos;

        return $this;
    }
}
