<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubjectsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SubjectsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $subjects = [];
}
