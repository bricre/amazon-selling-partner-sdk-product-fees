<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item identifier, marketplace, time of request, and other details that
 * identify an estimate.
 */
class FeesEstimateIdentifier extends AbstractModel
{
    /**
     * A marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The seller identifier.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * The type of item identifier specified.
     *
     * @var string
     */
    public $IdType = null;

    /**
     * The item identifier.
     *
     * @var string
     */
    public $IdValue = null;

    /**
     * When true, the offer is fulfilled by Amazon.
     *
     * @var bool
     */
    public $IsAmazonFulfilled = null;

    /**
     * The item price on which the fee estimate is based.
     *
     * @var \Amz\ProductFees\Model\PriceToEstimateFees
     */
    public $PriceToEstimateFees = null;

    /**
     * A unique identifier provided by the caller to track this request.
     *
     * @var string
     */
    public $SellerInputIdentifier = null;

    /**
     * @var \Amz\ProductFees\Model\OptionalFulfillmentProgram
     */
    public $OptionalFulfillmentProgram = null;
}
