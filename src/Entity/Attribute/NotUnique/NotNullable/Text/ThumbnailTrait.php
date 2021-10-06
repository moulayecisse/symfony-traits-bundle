<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ThumbnailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ThumbnailTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $thumbnail;
}
