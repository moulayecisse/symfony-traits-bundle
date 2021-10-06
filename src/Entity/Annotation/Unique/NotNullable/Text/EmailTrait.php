<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\EmailTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $email;
}
