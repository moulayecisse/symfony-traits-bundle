<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait OrderKeyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\OrderKeyTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $orderKey;
}
