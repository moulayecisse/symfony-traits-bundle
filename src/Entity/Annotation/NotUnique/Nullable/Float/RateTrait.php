<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait RateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\RateTrait;

    /**
     * @ORM\Column(type="float", unique=false, nullable=true)
     */
    protected ?float $rate = null;
}
