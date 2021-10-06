<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ZipCodeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ZipCodeTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $zipCode;
}
