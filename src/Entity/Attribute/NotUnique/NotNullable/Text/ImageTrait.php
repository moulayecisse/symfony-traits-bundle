<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ImageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ImageTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $image;
}
