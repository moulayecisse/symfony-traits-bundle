<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\RolesTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $roles = ['ROLE_USER'];
}
