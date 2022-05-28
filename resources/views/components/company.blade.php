@if ($company && $cotation)
<div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <p>
                <strong>Symbol:</strong>
                <span>{{$company->companyName}} ({{$company->symbol}})</span>
            </p>
            <p>
                <strong>Latest Price:</strong>
                <span>{{$cotation->currency}} {{$cotation->latestPrice}}</span>
            </p>
            <p>
                <strong>Variação:</strong>
                <span>{{$cotation->currency}} {{$cotation->change}} ({{$cotation->changePercent * 100}}%)</span>
            </p>
            <p>
                <strong>Description:</strong>
                <span>{{$company->description}}</span>
            </p>
        </div>
    </div>
</div>
@endif