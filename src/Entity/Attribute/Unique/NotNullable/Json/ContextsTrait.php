<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ContextsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: false)]
    protected array $contexts = [];
}
