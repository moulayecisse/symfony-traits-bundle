<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\EmailTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $email;
}
