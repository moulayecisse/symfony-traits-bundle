<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\VersionNameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $versionName;
}
