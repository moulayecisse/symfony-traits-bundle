<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SummaryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\SummaryTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $summary = null;
}
