<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransactionId extends BaseDto
{
    /**
     * @param  ?string  $transactionId GUID assigned by Amazon to identify this transaction. This value can be used with the Transaction Status API to return the status of this transaction.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
