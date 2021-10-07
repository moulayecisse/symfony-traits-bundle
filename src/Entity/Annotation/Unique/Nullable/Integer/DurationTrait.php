<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait DurationTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\DurationTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $duration = null;
}
