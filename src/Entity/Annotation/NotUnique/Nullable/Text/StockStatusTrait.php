<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait StockStatusTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\StockStatusTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $stockStatus = null;
}
