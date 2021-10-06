<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\PhoneTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $phone;
}
