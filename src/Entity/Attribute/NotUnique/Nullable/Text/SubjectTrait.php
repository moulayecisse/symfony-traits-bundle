<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SubjectTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SubjectTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $subject;
}
