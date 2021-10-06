<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LabelTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\LabelTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: true)]
    protected ?string $label;
}
