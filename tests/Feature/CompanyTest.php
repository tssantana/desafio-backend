<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /** @test */
    public function check_if_api_company_response_is_correct()
    {
        $response = $this->getJson('/api/company/AAPL');

        $response->assertJsonStructure([
            'data' => [
                'symbol',
                'companyName',
                "symbol",
                "companyName",
                "exchange",
                "industry",
                "website",
                "description",
                "CEO",
                "securityName",
                "issueType",
                "sector",
                "primarySicCode",
                "employees",
                "tags",
                "address",
                "address2",
                "state",
                "city",
                "zip",
                "country",
                "phone",
            ]
        ]);
    }

    /** @test */
    public function check_if_api_cotation_response_is_correct()
    {
        $response = $this->getJson('/api/company/AAPL/quote');

        $response->assertJsonStructure([
            'data' => [
                'symbol',
                'avgTotalVolume',
                'calculationPrice',
                'change',
                'changePercent',
                'companyName',
                'close',
                'closeSource',
                'closeTime',
                'currency',
                'delayedPrice',
                'delayedPriceTime',
                'extendedPrice',
                'extendedChange',
                'extendedChangePercent',
                'extendedPriceTime',
                'high',
                'highSource',
                'highTime',
                'iexAskPrice',
                'iexAskSize',
                'iexBidPrice',
                'iexBidSize',
                'iexClose',
                'iexCloseTime',
                'iexLastUpdated',
                'iexOpen',
                'iexOpenTime',
                'iexRealtimePrice',
                'iexRealtimeSize',
                'iexMarketPercent',
                'iexVolume',
                'isUSMarketOpen',
                'lastTradeTime',
                'latestPrice',
                'latestSource',
                'latestTime',
                'latestUpdate',
                'latestVolume',
                'low',
                'lowTime',
                'lowSource',
                'marketCap',
                'oddLotDelayedPrice',
                'oddLotDelayedPriceTime',
                'open',
                'openSource',
                'openTime',
                'peRatio',
                'previousClose',
                'previousVolume',
                'primaryExchange',
                'week52High',
                'week52Low',
                'volume',
                'ytdChange',
            ]
        ]);
    }
}
