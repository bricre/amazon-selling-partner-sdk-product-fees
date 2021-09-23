<?php

namespace Amz\ProductFees\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Points extends AbstractModel
{
    /**
     * @var int
     */
    public $PointsNumber = null;

    /**
     * @var \Amz\ProductFees\Model\MoneyType
     */
    public $PointsMonetaryValue = null;
}
