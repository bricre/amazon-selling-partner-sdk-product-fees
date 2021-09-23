<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The type of fee, fee amount, and other details.
 */
class FeeDetail extends AbstractModel
{
    /**
     * The type of fee charged to a seller.
     *
     * @var string
     */
    public $FeeType = null;

    /**
     * The amount charged for a given fee.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $FeeAmount = null;

    /**
     * The promotion amount for a given fee.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $FeePromotion = null;

    /**
     * The tax amount for a given fee.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $TaxAmount = null;

    /**
     * The final fee amount for a given fee.
     *
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $FinalFee = null;

    /**
     * @var \Amz\ProductFees\Model\IncludedFeeDetailList
     */
    public $IncludedFeeDetailList = null;
}
