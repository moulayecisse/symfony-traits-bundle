<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait NationalityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\NationalityTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $nationality;
}
