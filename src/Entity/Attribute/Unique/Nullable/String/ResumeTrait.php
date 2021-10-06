<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\ResumeTrait;

    #[ORM\Column(type: "string", length: 255, unique: true, nullable: true)]
    protected ?string $resume;
}
