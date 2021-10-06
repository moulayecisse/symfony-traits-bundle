<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SerialTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SerialTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $serial;
}
