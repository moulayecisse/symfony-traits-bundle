<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PasswordTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PasswordTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $password;
}
