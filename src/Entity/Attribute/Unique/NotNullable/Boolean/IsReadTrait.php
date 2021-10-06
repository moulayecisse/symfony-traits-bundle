<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsReadTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsReadTrait;

    #[ORM\Column(type: "boolean", unique: true, nullable: false)]
    protected bool $isRead;
}
