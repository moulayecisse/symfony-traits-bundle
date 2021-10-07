<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CustomerNoteTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CustomerNoteTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $customerNote = null;
}
