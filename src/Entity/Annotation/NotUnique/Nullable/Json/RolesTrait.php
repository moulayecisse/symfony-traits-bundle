<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\RolesTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $roles = ['ROLE_USER'];
}
