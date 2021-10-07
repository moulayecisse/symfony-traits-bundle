<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ExtensionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ExtensionTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $extension = null;
}
