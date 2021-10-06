<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ImageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ImageTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $image;
}
