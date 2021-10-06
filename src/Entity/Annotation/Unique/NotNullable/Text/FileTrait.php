<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FileTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FileTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $file;
}
