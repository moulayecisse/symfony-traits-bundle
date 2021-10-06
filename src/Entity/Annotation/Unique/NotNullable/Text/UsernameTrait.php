<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait UsernameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\UsernameTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $username;
}
