<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContextTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ContextTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $context;
}