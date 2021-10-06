<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ImageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\ImageTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $image;
}
