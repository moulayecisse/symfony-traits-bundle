<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\IconTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $icon;
}
