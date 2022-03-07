<?php

namespace Amadeus;

use Amadeus\Airport\DirectDestinations;

class Airport
{
    public ?DirectDestinations $directDestinations;

    /**
     * @param Amadeus $client
     */
    public function __construct(Amadeus $client)
    {
        $this->directDestinations = new DirectDestinations($client);
    }

}