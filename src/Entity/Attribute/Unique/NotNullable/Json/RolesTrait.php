<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\RolesTrait;

    #[ORM\Column(type: "json", unique: true, nullable: false)]
    protected array $roles = [];
}
