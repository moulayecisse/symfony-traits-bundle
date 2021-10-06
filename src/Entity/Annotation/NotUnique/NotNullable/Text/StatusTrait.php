<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\StatusTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $status;
}
