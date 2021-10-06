<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Float\RateTrait;

    #[ORM\Column(type: "float", unique: false, nullable: false)]
    protected float $rate;
}
