<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait InstitutionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\InstitutionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $institution;
}
