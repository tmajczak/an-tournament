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
}
