<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CurrencyTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $currency;
}
