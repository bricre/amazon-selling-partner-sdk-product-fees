<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Request schema.
 */
class GetMyFeesEstimateRequest extends AbstractModel
{
    /**
     * @var \Amz\ProductFees\Model\FeesEstimateRequest
     */
    public $FeesEstimateRequest = null;
}
