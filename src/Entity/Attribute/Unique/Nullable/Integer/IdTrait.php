<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\IdTrait;

    #[ORM\Id]
    #[ORM\Column(type: "integer", unique: true, nullable: true)]
    #[ORM\GeneratedValue]
    protected ?int $id;
}
