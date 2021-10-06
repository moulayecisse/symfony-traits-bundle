<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Decimal\PriceTrait;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, unique=false, nullable=false)
     */
    protected int $price;
}
