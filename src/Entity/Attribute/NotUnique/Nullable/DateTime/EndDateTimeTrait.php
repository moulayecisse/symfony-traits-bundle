<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait EndDateTimeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\EndDateTimeTrait;

    #[ORM\Column(type: "datetime", unique: false, nullable: true)]
    protected ?DateTime $endDateTime;
}
