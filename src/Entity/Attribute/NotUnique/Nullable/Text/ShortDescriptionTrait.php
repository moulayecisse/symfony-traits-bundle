<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ShortDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ShortDescriptionTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $shortDescription = null;
}
