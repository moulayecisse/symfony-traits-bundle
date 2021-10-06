<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsFeatureTrait;

    /**
     * @ORM\Column(type="boolean", unique=false, nullable=false)
     */
    protected bool $isFeature;
}
