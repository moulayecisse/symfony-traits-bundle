<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ImageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ImageTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $image = null;
}
