<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An unexpected error occurred during this operation.
 */
class FeesEstimateError extends AbstractModel
{
    /**
     * An error type, identifying either the receiver or the sender as the originator
     * of the error.
     *
     * @var string
     */
    public $Type = null;

    /**
     * An error code that identifies the type of error that occurred.
     *
     * @var string
     */
    public $Code = null;

    /**
     * A message that describes the error condition.
     *
     * @var string
     */
    public $Message = null;

    /**
     * @var \Amz\ProductFees\Model\FeesEstimateErrorDetail
     */
    public $Detail = null;
}
