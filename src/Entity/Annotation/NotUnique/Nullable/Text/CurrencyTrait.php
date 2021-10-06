<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CurrencyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CurrencyTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $currency;
}
