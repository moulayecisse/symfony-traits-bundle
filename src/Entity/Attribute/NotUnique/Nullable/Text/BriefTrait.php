<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BriefTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BriefTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $brief;
}
