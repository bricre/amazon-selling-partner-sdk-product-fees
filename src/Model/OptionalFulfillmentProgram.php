<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An optional enrollment program to return the estimated fees when the offer is
 * fulfilled by Amazon (IsAmazonFulfilled is set to true).
 */
class OptionalFulfillmentProgram extends AbstractModel
{
    protected $isRawObject = true;
}
