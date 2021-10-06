<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\AccountTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $account;
}
