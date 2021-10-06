<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AppVersionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\AppVersionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $appVersion;
}
