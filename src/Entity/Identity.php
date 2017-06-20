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
    private $id;

    /**
     * @ORM\Column(name="name")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(name="faction")
     *
     * @var string
     */
    private $faction;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return Identity
     */
    public function setName(string $name): Identity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaction(): string
    {
        return $this->faction;
    }

    /**
     * @param string $faction
     *
     * @return Identity
     */
    public function setFaction(string $faction): Identity
    {
        $this->faction = $faction;

        return $this;
    }
}
