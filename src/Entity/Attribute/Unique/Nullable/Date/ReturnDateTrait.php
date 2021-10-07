<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Date;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ReturnDateTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Date\ReturnDateTrait;

    #[ORM\Column(type: "date", unique: true, nullable: true)]
    protected ?DateTime $returnDate = null;
}
