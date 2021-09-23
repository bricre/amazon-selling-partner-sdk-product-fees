<?php

namespace Amz\ProductFees\Api;

use Amz\ProductFees\Model\GetMyFeesEstimateRequest as GetMyFeesEstimateRequest;
use Amz\ProductFees\Model\GetMyFeesEstimateResponse as GetMyFeesEstimateResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Fees extends AbstractAPI
{
    /**
     * Returns the estimated fees for the item indicated by the specified seller SKU in
     * the marketplace specified in the request body.
     *
     * You can call getMyFeesEstimateForSKU for an item on behalf of a seller before
     * the seller sets the item's price. They can then take estimated fees into
     * account. With each fees estimate request, you must include an original
     * identifier. This identifier is included in the fees estimate so you can
     * correlate a fees estimate with the original request.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $SellerSKU Used to identify an item in the given marketplace. SellerSKU
     * is qualified by the seller's SellerId, which is included with every operation
     * that you submit.
     * @param GetMyFeesEstimateRequest $Model Returns the estimated fees for the item
     *                                        indicated by the specified seller SKU in the marketplace specified in the
     *                                        request body.
     *
     * You can call getMyFeesEstimateForSKU for an item on behalf of a seller before
     * the seller sets the item's price. They can then take estimated fees into
     * account. With each fees estimate request, you must include an original
     * identifier. This identifier is included in the fees estimate so you can
     * correlate a fees estimate with the original request.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return GetMyFeesEstimateResponse
     */
    public function getMyEstimateForSKU($SellerSKU, GetMyFeesEstimateRequest $Model): GetMyFeesEstimateResponse
    {
        return $this->client->request('getMyFeesEstimateForSKU', 'POST', "products/fees/v0/listings/{$SellerSKU}/feesEstimate",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns the estimated fees for the item indicated by the specified Asin in the
     * marketplace specified in the request body.
     *
     * You can call getMyFeesEstimateForASIN for an item on behalf of a seller before
     * the seller sets the item's price. They can then take estimated fees into
     * account. With each product fees request, you must include an original
     * identifier. This identifier is included in the fees estimate so you can
     * correlate a fees estimate with the original request.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $Asin The Amazon Standard Identification Number (ASIN) of the item
     * @param GetMyFeesEstimateRequest $Model Returns the estimated fees for the item
     *                                        indicated by the specified Asin in the marketplace specified in the request
     *                                        body.
     *
     * You can call getMyFeesEstimateForASIN for an item on behalf of a seller before
     * the seller sets the item's price. They can then take estimated fees into
     * account. With each product fees request, you must include an original
     * identifier. This identifier is included in the fees estimate so you can
     * correlate a fees estimate with the original request.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return GetMyFeesEstimateResponse
     */
    public function getMyEstimateForASIN($Asin, GetMyFeesEstimateRequest $Model): GetMyFeesEstimateResponse
    {
        return $this->client->request('getMyFeesEstimateForASIN', 'POST', "products/fees/v0/items/{$Asin}/feesEstimate",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
