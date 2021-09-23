<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetMyFeesEstimateResponse extends AbstractModel
{
    /**
     * The payload for the operation.
     *
     * @var \Amz\ProductFees\Model\GetMyFeesEstimateResult
     */
    public $payload = null;

    /**
     * @var \Amz\ProductFees\Model\ErrorList
     */
    public $errors = null;
}
