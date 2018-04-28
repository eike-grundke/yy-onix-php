<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\ProductFeatures\HasProductForm;
use AragornYang\Onix\ProductFeatures\HasProductFormDescription;
use AragornYang\Onix\ProductFeatures\HasProductIdentifiers;

class ContainedItem extends Composite
{
    use HasProductForm, HasProductFormDescription, HasProductIdentifiers;
    protected $itemQuantity = 0;

    public function getItemQuantity(): int
    {
        return $this->itemQuantity;
    }

    public function setItemQuantity(string $itemQuantity): void
    {
        $this->itemQuantity = (int)$itemQuantity;
    }
}