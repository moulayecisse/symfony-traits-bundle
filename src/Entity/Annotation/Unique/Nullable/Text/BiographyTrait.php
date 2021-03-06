<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BiographyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BiographyTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $biography = null;
}
