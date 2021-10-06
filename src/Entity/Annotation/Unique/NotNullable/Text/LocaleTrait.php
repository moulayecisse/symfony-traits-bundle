<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LocaleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LocaleTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $locale;
}
