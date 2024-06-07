<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\GeneratePackingOptionsResponse;

/**
 * generatePackingOptions
 */
class GeneratePackingOptions extends Request
{
    protected Method $method = Method::POST;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     */
    public function __construct(
        protected string $inboundPlanId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/packingOptions";
    }

    public function createDtoFromResponse(Response $response): GeneratePackingOptionsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => GeneratePackingOptionsResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
