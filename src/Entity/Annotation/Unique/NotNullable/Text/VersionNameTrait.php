<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\VersionNameTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $versionName;
}
