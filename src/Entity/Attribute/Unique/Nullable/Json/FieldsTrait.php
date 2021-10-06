<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait FieldsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\FieldsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $fields = [];
}
