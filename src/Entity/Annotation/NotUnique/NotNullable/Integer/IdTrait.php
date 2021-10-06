<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\IdTrait;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique: false, nullable=false)
     * @ORM\GeneratedValue
     */
    protected int $id;
}
