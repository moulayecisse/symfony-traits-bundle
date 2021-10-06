<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ContextsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $contexts = [];
}
