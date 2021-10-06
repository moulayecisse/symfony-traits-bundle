<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CustomerNoteTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CustomerNoteTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $customerNote;
}
