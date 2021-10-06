<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Boolean\IsFeatureTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=false)
     */
    protected bool $isFeature;
}
