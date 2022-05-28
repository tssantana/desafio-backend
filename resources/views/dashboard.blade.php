<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Informe o symbol da companhia para consultar as informações.</p>
                    <br>
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('company') }}">
                        @csrf

                        <!-- Company Name -->
                        <div>
                            <x-label for="symbol" :value="__('Symbol')" />

                            <x-input id="symbol" class="block mt-1 w-full" type="text" name="symbol"
                                :value="old('symbol')" autofocus placeholder="Ex: AAPL, TWTR, NU" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Search
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Company -->
    <x-company :company="session('company')" :cotation="session('cotation')" />

</x-app-layout>