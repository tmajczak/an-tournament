<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:31
 */

namespace ANTournament\Entity;

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
    public $id;
}
