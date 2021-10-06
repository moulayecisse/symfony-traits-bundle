<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ProfessionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ProfessionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $profession;
}
