<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Float;

use Doctrine\ORM\Mapping as ORM;

trait AmountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Float\AmountTrait;

    /**
     * @ORM\Column(type="float", unique=true, nullable=true)
     */
    protected ?float $amount;
}
