<?php
// api/src/Entity/Phone.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * A phone.
 *
 * @ORM\Entity
 */
class Phone
{
    /**
     * @var int The id of this phone.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of the model.
     *
     * @ORM\Column
     */
    public $modelName;

    /**
     * @var string The reference of the model.
     *
     * @ORM\Column
     */
    public $modelRef;

    /**
     * @var smallint The memory size in Gb of the model.
     *
     * @ORM\Column(type="smallint")
     */
    public $memory;

    /**
     * @var string The color of the phone.
     *
     * @ORM\Column
     */
    public $color;

    /**
     * @var float The price of the phone
     *
     * @ORM\Column(type="float")
     */
    public $price;

    /**
     * @var string The description of the phone
     *
     * @ORM\Column
     */
    public $description;

    public function getId(): ?int
    {
        return $this->id;
    }
}
