<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CompanyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CompanyTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $company;
}
