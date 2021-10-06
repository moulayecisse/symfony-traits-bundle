<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BriefContentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BriefContentTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $briefContent;
}
