<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\FullContentTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $fullContent = null;
}
