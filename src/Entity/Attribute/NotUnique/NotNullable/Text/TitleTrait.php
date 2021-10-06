<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TitleTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $title;
}
