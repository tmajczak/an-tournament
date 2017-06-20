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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Match
     */
    public function getMatch(): Match
    {
        return $this->match;
    }

    /**
     * @param Match $match
     *
     * @return Game
     */
    public function setMatch(Match $match): Game
    {
        $this->match = $match;

        return $this;
    }

    /**
     * @return Player
     */
    public function getRunnerPlayer(): Player
    {
        return $this->runnerPlayer;
    }

    /**
     * @param Player $runnerPlayer
     *
     * @return Game
     */
    public function setRunnerPlayer(Player $runnerPlayer): Game
    {
        $this->runnerPlayer = $runnerPlayer;

        return $this;
    }

    /**
     * @return int
     */
    public function getRunnerPoints(): int
    {
        return $this->runnerPoints;
    }

    /**
     * @param int $runnerPoints
     *
     * @return Game
     */
    public function setRunnerPoints(int $runnerPoints): Game
    {
        $this->runnerPoints = $runnerPoints;

        return $this;
    }

    /**
     * @return Player
     */
    public function getCorpPlayer(): Player
    {
        return $this->corpPlayer;
    }

    /**
     * @param Player $corpPlayer
     *
     * @return Game
     */
    public function setCorpPlayer(Player $corpPlayer): Game
    {
        $this->corpPlayer = $corpPlayer;

        return $this;
    }

    /**
     * @return int
     */
    public function getCorpPoints(): int
    {
        return $this->corpPoints;
    }

    /**
     * @param int $corpPoints
     *
     * @return Game
     */
    public function setCorpPoints(int $corpPoints): Game
    {
        $this->corpPoints = $corpPoints;

        return $this;
    }
}
