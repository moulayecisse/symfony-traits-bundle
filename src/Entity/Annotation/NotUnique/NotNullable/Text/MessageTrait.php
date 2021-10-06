<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait MessageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\MessageTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $message;
}
