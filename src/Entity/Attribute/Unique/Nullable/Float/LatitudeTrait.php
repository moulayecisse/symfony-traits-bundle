<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait LatitudeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\LatitudeTrait;

    #[ORM\Column(type: "float", unique: true, nullable: true)]
    protected ?float $latitude = null;
}
