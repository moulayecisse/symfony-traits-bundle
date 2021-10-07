<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait TotalTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\TotalTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    protected ?int $total = null;
}
