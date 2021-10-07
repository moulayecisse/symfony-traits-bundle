<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BiographyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BiographyTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $biography = null;
}
