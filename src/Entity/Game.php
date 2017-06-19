<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:38
 */

namespace ANTournament\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("repository=GameRepository")
 * @ORM\Table(name="game")
 */
class Game
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
     * @ORM\ManyToOne(targetEntity="Match", inversedBy="games")
     *
     * @var Match
     */
    private $match;

    /**
     * @ORM\ManyToOne(targetEntity="Player")
     *
     * @var Player
     */
    private $runnerPlayer;

    /**
     * @ORM\Column(name="runner_points", type="smallint")
     *
     * @var int
     */
    private $runnerPoints = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Player")
     *
     * @var Player
     */
    private $corpPlayer;

    /**
     * @ORM\Column(name="corp_points", type="smallint")
     *
     * @var int
     */
    private $corpPoints = 0;
}
