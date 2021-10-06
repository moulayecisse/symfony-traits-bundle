<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\PhoneTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $phone;
}
