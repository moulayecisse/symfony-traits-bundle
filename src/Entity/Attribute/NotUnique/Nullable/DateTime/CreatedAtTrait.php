<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait CreatedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\CreatedAtTrait;

    #[ORM\Column(type: "datetime", unique: false, nullable: true)]
    protected ?DateTime $createdAt;
}
