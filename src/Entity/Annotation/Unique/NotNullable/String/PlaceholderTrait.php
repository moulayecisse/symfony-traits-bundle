<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\PlaceholderTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $placeholder;
}
