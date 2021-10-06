<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\FullNameTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $fullName;
}
