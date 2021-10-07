<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AccountTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AccountTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $account = null;
}
