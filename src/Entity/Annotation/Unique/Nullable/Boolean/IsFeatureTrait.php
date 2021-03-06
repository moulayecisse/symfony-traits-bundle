<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsFeatureTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsFeatureTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isFeature = null;
}
