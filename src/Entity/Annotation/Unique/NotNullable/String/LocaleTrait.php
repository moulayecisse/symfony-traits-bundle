<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\LocaleTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $locale;
}
