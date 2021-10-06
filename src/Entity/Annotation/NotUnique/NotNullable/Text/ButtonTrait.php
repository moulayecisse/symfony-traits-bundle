<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ButtonTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ButtonTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $button;
}
