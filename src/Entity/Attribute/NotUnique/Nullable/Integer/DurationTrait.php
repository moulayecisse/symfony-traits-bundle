<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DurationTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DurationTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $duration = null;
}
