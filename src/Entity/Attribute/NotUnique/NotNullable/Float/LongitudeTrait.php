<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\LongitudeTrait;

    #[ORM\Column(type: "float", unique: false, nullable: false)]
    protected float $longitude;
}
