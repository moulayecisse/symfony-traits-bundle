<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\TitleTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $title = null;
}
