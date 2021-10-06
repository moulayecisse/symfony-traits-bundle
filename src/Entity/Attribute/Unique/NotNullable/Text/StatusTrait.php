<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\StatusTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $status;
}
