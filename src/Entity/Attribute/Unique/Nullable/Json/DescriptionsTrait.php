<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\DescriptionsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $descriptions = [];
}
