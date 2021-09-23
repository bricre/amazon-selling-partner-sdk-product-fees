<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Price information for an item, used to estimate fees.
 */
class PriceToEstimateFees extends AbstractModel
{
    /**
     * The price of the item.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $ListingPrice = null;

    /**
     * The shipping cost.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $Shipping = null;

    /**
     * The number of Amazon Points offered with the purchase of an item.
     *
     * @var \Amz\ProductFees\Model\Points
     */
    public $Points = null;
}
