<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ProfessionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\ProfessionTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $profession;
}
