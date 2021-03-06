<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait VersionNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\VersionNameTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $versionName = null;
}
