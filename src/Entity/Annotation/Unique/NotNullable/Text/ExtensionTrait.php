<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ExtensionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ExtensionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $extension;
}
