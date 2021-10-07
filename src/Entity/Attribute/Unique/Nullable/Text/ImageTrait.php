<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ImageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ImageTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $image = null;
}
