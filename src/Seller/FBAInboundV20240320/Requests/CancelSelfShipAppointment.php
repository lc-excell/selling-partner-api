<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CancelSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\CancelSelfShipAppointmentResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * cancelSelfShipAppointment
 */
class CancelSelfShipAppointment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  CancelSelfShipAppointmentRequest  $cancelSelfShipAppointmentRequest  The `cancelSelfShipAppointment` request.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
        public CancelSelfShipAppointmentRequest $cancelSelfShipAppointmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/selfShipAppointmentCancellation";
    }

    public function createDtoFromResponse(Response $response): CancelSelfShipAppointmentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => CancelSelfShipAppointmentResponse::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->cancelSelfShipAppointmentRequest->toArray();
    }
}
