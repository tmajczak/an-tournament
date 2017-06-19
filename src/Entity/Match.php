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
 * @ORM\Entity("repository=MatchRepository")
 * @ORM\Table(name="match")
 */
class Match
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
     * @ORM\ManyToOne(targetEntity="Round", inversedBy="rounds")
     *
     * @var Round
     */
    private $round;

    /**s
     * @ORM\OneToMany(targetEntity="Game", mappedBy="match", cascade={"persist", "remove"})
     *
     * @var ArrayCollection
     */
    private $games;
//
//    /**
//     * @ORM\ManyToMany(targetEntity="Player")
//     * @ORM\JoinTable(name="match_players",
//     *      joinColumns={@ORM\JoinColumn(name="match_id", referencedColumnName="id")},
//     *      inverseJoinColumns={@ORM\JoinColumn(name="player_id", referencedColumnName="id", unique=true)}
//     * )
//     *
//     * @var ArrayCollection
//     */
//    private $players;
}
