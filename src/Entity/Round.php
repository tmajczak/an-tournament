<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:38
 */

namespace ANTournament\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("repository=RoundRepository")
 * @ORM\Table(name="round")
 */
class Round
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
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="rounds")
     * @ORM\JoinColumn(name="tournament_id", referencedColumnName="id")
     *
     * @var Tournament
     */
    private $tournament;

    /**
     * @ORM\OneToMany(targetEntity="Match", mappedBy="round", cascade={"persist", "remove"})
     *
     * @var ArrayCollection
     */
    private $matches;

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
     * @return Round
     */
    public function setTournament(Tournament $tournament): Round
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getMatches(): ArrayCollection
    {
        return $this->matches;
    }

    /**
     * @param ArrayCollection $matches
     *
     * @return Round
     */
    public function setMatches(ArrayCollection $matches): Round
    {
        $this->matches = $matches;

        return $this;
    }
}
