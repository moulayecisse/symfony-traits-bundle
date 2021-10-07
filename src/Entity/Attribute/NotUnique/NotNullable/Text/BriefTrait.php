<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BriefTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BriefTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $brief;
}