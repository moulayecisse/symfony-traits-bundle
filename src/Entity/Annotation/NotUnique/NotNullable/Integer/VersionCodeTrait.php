<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait VersionCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\VersionCodeTrait;

    /**
     * @ORM\Column(type="integer", unique=false, nullable=false)
     */
    protected int $versionCode;
}
