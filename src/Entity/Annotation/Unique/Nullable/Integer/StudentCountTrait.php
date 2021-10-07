<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait StudentCountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\StudentCountTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $studentCount = null;
}
