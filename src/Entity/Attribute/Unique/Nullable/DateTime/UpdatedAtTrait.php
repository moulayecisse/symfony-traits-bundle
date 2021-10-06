<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait UpdatedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\UpdatedAtTrait;

    #[ORM\Column(type: "datetime", unique: true, nullable: true)]
    protected ?DateTime $updatedAt;
}
