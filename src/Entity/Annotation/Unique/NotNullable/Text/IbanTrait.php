<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IbanTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\IbanTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $iban;
}
