<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait GenderTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\GenderTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $gender = null;
}
