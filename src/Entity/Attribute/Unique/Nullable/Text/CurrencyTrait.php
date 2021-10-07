<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CurrencyTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $currency = null;
}
