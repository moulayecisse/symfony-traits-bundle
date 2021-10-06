<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DurationTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\DurationTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $duration;
}
