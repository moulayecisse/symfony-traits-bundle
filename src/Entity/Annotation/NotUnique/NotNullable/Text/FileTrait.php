<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FileTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FileTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $file;
}
