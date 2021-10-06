<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ThumbnailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ThumbnailTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $thumbnail;
}
