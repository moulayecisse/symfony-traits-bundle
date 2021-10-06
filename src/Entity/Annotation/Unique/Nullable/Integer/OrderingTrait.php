<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait OrderingTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\OrderingTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $ordering;
}
