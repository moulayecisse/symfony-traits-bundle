<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait UsageLimitTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\UsageLimitTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=true)
     */
    protected ?int $usageLimit;
}
