<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubjectsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\SubjectsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: false)]
    protected array $subjects = [];
}
