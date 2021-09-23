<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The total estimated fees for an item and a list of details.
 */
class FeesEstimate extends AbstractModel
{
    /**
     * The time at which the fees were estimated. This defaults to the time the request
     * is made.
     *
     * @var string
     */
    public $TimeOfFeesEstimation = null;

    /**
     * Total estimated fees for a given item, price, and fulfillment channel.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $TotalFeesEstimate = null;

    /**
     * @var \Amz\ProductFees\Model\FeeDetailList
     */
    public $FeeDetailList = null;
}
