<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ResumeTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $resume;
}
