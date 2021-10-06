<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubjectsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SubjectsTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=true)
     */
    protected ?array $subjects = [];
}
