<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\NameTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $name;
}
