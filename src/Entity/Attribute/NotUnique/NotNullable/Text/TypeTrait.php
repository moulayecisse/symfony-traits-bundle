<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TypeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TypeTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $type;
}