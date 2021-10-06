<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait UsageLimitTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\UsageLimitTrait;

    #[ORM\Column(type: "integer", unique: true, nullable: false)]
    protected int $usageLimit;
}
