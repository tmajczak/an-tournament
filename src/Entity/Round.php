<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:38
 */

namespace ANTournament\Entity;

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
    public $id;
}
