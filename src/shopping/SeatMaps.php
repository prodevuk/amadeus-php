<?php

declare(strict_types=1);

namespace Amadeus\Shopping;

use Amadeus\Amadeus;
use Amadeus\Exceptions\ResponseException;
use Amadeus\Resources\Resource;
use Amadeus\Resources\SeatMap;

/**
 * A namespaced client for the
 * "/v1/shopping/seatmaps" endpoints.
 *
 * Access via the Amadeus client object.
 *
 *      $amadeus = Amadeus::builder("clientId", "secret")->build();
 *      $amadeus->getShopping()->getSeatMaps();
 *
 */
class SeatMaps
{
    private Amadeus $amadeus;

    /**
     * @param Amadeus $amadeus
     */
    public function __construct(Amadeus $amadeus)
    {
        $this->amadeus = $amadeus;
    }

    /**
     * Returns all the seat maps of a given order.
     *
     * @link https://developers.amadeus.com/self-service/category/air/api-doc/seatmap-display/api-reference
     *
     * @param array|null $params   Required URL parameters such with either:
     *                              flightOrderId : Identifier of the order
     *                              flight-orderId : (Deprecated) Identifier of the order.
     * @return object              Returns an instance of the SeatMap class.
     * @throws ResponseException   When an exception occurs
     */
    public function get(array $params): object
    {
        $response = $this->amadeus->getClient()->getWithArrayParams(
            '/v1/shopping/seatmaps',
            $params
        );
        return Resource::fromObject($response, SeatMap::class);
    }

    public function post()
    {

    }
}