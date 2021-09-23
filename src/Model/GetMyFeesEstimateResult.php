<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetMyFeesEstimateResult extends AbstractModel
{
    /**
     * The item's estimated fees.
     *
     * @var \Amz\ProductFees\Model\FeesEstimateResult
     */
    public $FeesEstimateResult = null;
}
