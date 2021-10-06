<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AppVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AppVersionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $appVersion;
}
