<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $name;
}
