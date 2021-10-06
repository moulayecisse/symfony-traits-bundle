<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SerialTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SerialTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $serial;
}
