<?php

namespace Yab\ShoppingCart\Tests\Logistics;

use Yab\ShoppingCart\Tests\Models\Product;
use Yab\ShoppingCart\Contracts\CartLogistics as CartLogisticsInterface;

class CartLogistics implements CartLogisticsInterface
{
    /**
     * Get the purchaseable entity given the type and ID.
     *
     * @param string $type
     * @param mixed $id
     *
     * @return mixed
     */
    public static function getPurchaseable(string $type, mixed $id) : mixed
    {
        return Product::findOrFail($id);
    }
}