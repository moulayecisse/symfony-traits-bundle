<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IsbnTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\IsbnTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $isbn;
}
