<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait RibTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\RibTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $rib;
}
