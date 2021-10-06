<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ThumbnailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\ThumbnailTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $thumbnail;
}
