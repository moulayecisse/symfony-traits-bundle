<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\AddressTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $address;
}
