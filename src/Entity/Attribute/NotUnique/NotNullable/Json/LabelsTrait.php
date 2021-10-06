<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LabelsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\LabelsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $labels = [];
}
