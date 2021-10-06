<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TypeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TypeTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $type;
}
