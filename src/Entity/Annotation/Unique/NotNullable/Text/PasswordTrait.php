<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PasswordTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PasswordTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $password;
}
