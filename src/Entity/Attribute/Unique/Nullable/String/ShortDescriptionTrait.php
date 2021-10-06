<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ShortDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\ShortDescriptionTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: true)]
    protected ?string $shortDescription;
}
