<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\StatusTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $status;
}
