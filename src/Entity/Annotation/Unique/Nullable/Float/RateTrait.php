<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\RateTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
    protected ?float $rate = null;
}
