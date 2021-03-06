<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SwiftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SwiftTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $swift = null;
}
