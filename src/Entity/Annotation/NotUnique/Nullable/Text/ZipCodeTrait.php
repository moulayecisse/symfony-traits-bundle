<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ZipCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ZipCodeTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $zipCode = null;
}
