<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LabelTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LabelTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $label;
}
