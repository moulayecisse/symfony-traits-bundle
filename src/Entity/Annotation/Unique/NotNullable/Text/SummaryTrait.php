<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SummaryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SummaryTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $summary;
}
