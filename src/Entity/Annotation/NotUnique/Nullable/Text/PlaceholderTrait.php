<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\PlaceholderTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $placeholder;
}
