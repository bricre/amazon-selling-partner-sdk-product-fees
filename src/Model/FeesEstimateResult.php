<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item identifier and the estimated fees for the item.
 */
class FeesEstimateResult extends AbstractModel
{
    /**
     * The status of the fee request. Possible values: Success, ClientError,
     * ServiceError.
     *
     * @var string
     */
    public $Status = null;

    /**
     * Information used to identify a fees estimate request.
     *
     * @var \Amz\ProductFees\Model\FeesEstimateIdentifier
     */
    public $FeesEstimateIdentifier = null;

    /**
     * The total estimated fees for an item and a list of details.
     *
     * @var \Amz\ProductFees\Model\FeesEstimate
     */
    public $FeesEstimate = null;

    /**
     * An error object with a type, code, and message.
     *
     * @var \Amz\ProductFees\Model\FeesEstimateError
     */
    public $Error = null;
}
