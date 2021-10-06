<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CompanyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CompanyTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $company;
}
