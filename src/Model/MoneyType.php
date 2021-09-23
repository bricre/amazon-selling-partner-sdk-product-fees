<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class MoneyType extends AbstractModel
{
    /**
     * The currency code in ISO 4217 format.
     *
     * @var string
     */
    public $CurrencyCode = null;

    /**
     * The monetary value.
     *
     * @var float
     */
    public $Amount = null;
}
