<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BriefTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BriefTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $brief = null;
}
