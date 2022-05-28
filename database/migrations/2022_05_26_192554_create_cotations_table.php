<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotations', function (Blueprint $table) {
            $table->id();
            $table->string('symbol', 200);
            $table->timestamps();
            $table->bigInteger('avgTotalVolume')->nullable();
            $table->string('calculationPrice', 250)->nullable();
            $table->decimal('change', 20, 8)->nullable();
            $table->decimal('changePercent', 20, 8)->nullable();
            $table->string('companyName', 250)->nullable();
            $table->decimal('close', 20, 8)->nullable();
            $table->string('closeSource', 250)->nullable();
            $table->bigInteger('closeTime')->nullable();
            $table->string('currency', 250)->nullable();
            $table->decimal('delayedPrice', 20, 8)->nullable();
            $table->bigInteger('delayedPriceTime')->nullable();
            $table->decimal('extendedPrice', 20, 8)->nullable();
            $table->decimal('extendedChange', 20, 8)->nullable();
            $table->decimal('extendedChangePercent', 20, 8)->nullable();
            $table->bigInteger('extendedPriceTime')->nullable();
            $table->decimal('high', 20, 8)->nullable();
            $table->string('highSource', 250)->nullable();
            $table->bigInteger('highTime')->nullable();
            $table->decimal('iexAskPrice', 20, 8)->nullable();
            $table->decimal('iexAskSize', 20, 8)->nullable();
            $table->decimal('iexBidPrice', 20, 8)->nullable();
            $table->decimal('iexBidSize', 20, 8)->nullable();
            $table->decimal('iexClose', 20, 8)->nullable();
            $table->bigInteger('iexCloseTime')->nullable();
            $table->bigInteger('iexLastUpdated')->nullable();
            $table->decimal('iexOpen', 20, 8)->nullable();
            $table->bigInteger('iexOpenTime')->nullable();
            $table->decimal('iexRealtimePrice', 20, 8)->nullable();
            $table->decimal('iexRealtimeSize', 20, 8)->nullable();
            $table->decimal('iexMarketPercent', 20, 8)->nullable();
            $table->bigInteger('iexVolume')->nullable();
            $table->boolean('isUSMarketOpen')->nullable();
            $table->bigInteger('lastTradeTime')->nullable();
            $table->decimal('latestPrice', 20, 8)->nullable();
            $table->string('latestSource', 250)->nullable();
            $table->string('latestTime', 250)->nullable();
            $table->bigInteger('latestUpdate')->nullable();
            $table->decimal('latestVolume', 20, 8)->nullable();
            $table->decimal('low', 20, 8)->nullable();
            $table->bigInteger('lowTime')->nullable();
            $table->string('lowSource', 250)->nullable();
            $table->bigInteger('marketCap')->nullable();
            $table->decimal('oddLotDelayedPrice', 20, 8)->nullable();
            $table->bigInteger('oddLotDelayedPriceTime')->nullable();
            $table->decimal('open', 20, 8)->nullable();
            $table->string('openSource', 250)->nullable();
            $table->bigInteger('openTime')->nullable();
            $table->decimal('peRatio', 20, 8)->nullable();
            $table->decimal('previousClose', 20, 8)->nullable();
            $table->bigInteger('previousVolume')->nullable();            
            $table->string('primaryExchange', 250)->nullable();
            $table->decimal('week52High', 20, 8)->nullable();
            $table->decimal('week52Low', 20, 8)->nullable();
            $table->decimal('volume', 20, 8)->nullable();
            $table->decimal('ytdChange', 20, 8)->nullable();

            //$table->foreign('symbol')->references('symbol')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotations');
    }
}
