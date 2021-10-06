<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait MessageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\MessageTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $message;
}
