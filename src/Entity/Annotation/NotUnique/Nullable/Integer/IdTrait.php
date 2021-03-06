<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\IdTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique: false, nullable=true)
     * @ORM\GeneratedValue
     */
    protected ?int $id = null;
}
