<?php
/**
 * Created by PhpStorm.
 * User: tmajczak
 * DateTime: 08.06.17 21:40
 */

namespace ANTournament\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity("repository=IdentityRepository")
 * @ORM\Table(name="identity")
 */
class Identity
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
