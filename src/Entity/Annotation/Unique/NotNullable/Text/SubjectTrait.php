<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SubjectTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SubjectTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $subject;
}
