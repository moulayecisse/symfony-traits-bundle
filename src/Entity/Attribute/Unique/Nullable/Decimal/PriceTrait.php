<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Decimal;

use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Decimal\PriceTrait;

    #[ORM\Column(type: "decimal", precision: 12, scale: 2, unique: true, nullable: true)]
    protected ?int $price;
}
