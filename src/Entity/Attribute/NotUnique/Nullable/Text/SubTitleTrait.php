<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SubTitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SubTitleTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $subTitle;
}
