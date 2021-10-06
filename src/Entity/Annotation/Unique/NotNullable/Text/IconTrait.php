<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\IconTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $icon;
}
