<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LabelsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\LabelsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $labels = [];
}
