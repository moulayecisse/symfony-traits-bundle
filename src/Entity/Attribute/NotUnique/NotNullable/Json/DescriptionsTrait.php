<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\DescriptionsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $descriptions = [];
}
