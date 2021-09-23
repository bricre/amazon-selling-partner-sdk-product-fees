<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class FeesEstimateRequest extends AbstractModel
{
    /**
     * A marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * When true, the offer is fulfilled by Amazon.
     *
     * @var bool
     */
    public $IsAmazonFulfilled = null;

    /**
     * The product price that the fee estimate is based on.
     *
     * @var \Amz\ProductFees\Model\PriceToEstimateFees
     */
    public $PriceToEstimateFees = null;

    /**
     * A unique identifier provided by the caller to track this request.
     *
     * @var string
     */
    public $Identifier = null;

    /**
     * @var \Amz\ProductFees\Model\OptionalFulfillmentProgram
     */
    public $OptionalFulfillmentProgram = null;
}
