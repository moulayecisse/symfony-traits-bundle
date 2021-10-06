<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait TitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\TitleTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $title;
}
