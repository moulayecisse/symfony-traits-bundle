<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ButtonTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ButtonTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $button;
}
