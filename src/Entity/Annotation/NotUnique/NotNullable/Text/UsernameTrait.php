<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait UsernameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\UsernameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $username;
}
