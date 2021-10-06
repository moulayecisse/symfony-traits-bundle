<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ThumbnailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ThumbnailTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $thumbnail;
}
