<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait UsageLimitTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\UsageLimitTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $usageLimit;
}
