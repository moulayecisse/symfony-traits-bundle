<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\RolesTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $roles = [];
}
