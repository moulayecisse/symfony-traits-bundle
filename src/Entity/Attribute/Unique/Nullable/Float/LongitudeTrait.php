<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LongitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\LongitudeTrait;

    #[ORM\Column(type: "float", unique: true, nullable: true)]
    protected ?float $longitude = null;
}
