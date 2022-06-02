<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotation extends Model
{
    use HasFactory;

    protected $table = "cotations";

    public $incrementing = false;

    protected $primaryKey = "symbol";

    protected $fillable = [
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
    ];

    protected $casts = [
        'symbol' => 'string',
        'avgTotalVolume' => 'float',
        'calculationPrice' => 'string',
        'change' => 'float',
        'changePercent' => 'float',
        'companyName' => 'string',
        'close' => 'float',
        'closeSource' => 'string',
        'closeTime' => 'float',
        'currency' => 'string',
        'delayedPrice' => 'float',
        'delayedPriceTime' => 'float',
        'extendedPrice' => 'float',
        'extendedChange' => 'float',
        'extendedChangePercent' => 'float',
        'extendedPriceTime' => 'float',
        'high' => 'float',
        'highSource' => 'string',
        'highTime' => 'float',
        'iexAskPrice' => 'float',
        'iexAskSize' => 'float',
        'iexBidPrice' => 'float',
        'iexBidSize' => 'float',
        'iexClose' => 'float',
        'iexCloseTime' => 'float',
        'iexLastUpdated' => 'float',
        'iexOpen' => 'float',
        'iexOpenTime' => 'float',
        'iexRealtimePrice' => 'float',
        'iexRealtimeSize' => 'float',
        'iexMarketPercent' => 'float',
        'iexVolume' => 'float',
        'isUSMarketOpen' => 'boolean',
        'lastTradeTime' => 'float',
        'latestPrice' => 'float',
        'latestSource' => 'string',
        'latestTime' => 'string',
        'latestUpdate' => 'float',
        'latestVolume' => 'float',
        'low' => 'float',
        'lowTime' => 'float',
        'lowSource' => 'string',
        'marketCap' => 'float',
        'oddLotDelayedPrice' => 'float',
        'oddLotDelayedPriceTime' => 'float',
        'open' => 'float',
        'openSource' => 'string',
        'openTime' => 'float',
        'peRatio' => 'float',
        'previousClose' => 'float',
        'previousVolume' => 'float',
        'primaryExchange' => 'string',
        'week52High' => 'float',
        'week52Low' => 'float',
        'volume' => 'float',
        'ytdChange' => 'float',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'symbol', 'symbol');
    }

    public function getLatestUpdateAttribute($value)
    {
        return Carbon::createFromTimestampMsUTC($value);
    }
}
