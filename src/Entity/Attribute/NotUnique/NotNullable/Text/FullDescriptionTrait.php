<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FullDescriptionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $fullDescription;
}
