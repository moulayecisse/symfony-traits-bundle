<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PathTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PathTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $path;
}
