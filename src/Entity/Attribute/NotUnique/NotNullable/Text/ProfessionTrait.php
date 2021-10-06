<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ProfessionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ProfessionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $profession;
}
