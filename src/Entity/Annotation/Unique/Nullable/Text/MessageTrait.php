<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait MessageTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\MessageTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $message;
}
