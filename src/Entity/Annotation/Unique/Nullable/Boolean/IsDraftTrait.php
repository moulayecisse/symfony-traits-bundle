<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsDraftTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Boolean\IsDraftTrait;

    /**
     * @ORM\Column(type="boolean", unique=true, nullable=true)
     */
    protected ?bool $isDraft = null;
}
