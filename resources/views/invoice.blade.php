<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice') }}
        </h2>
    </x-slot>
    <div class="flex w-[300px] bg-white h-screen"></div>
    <div class="flex flex-1 px-12">
        <div class="w-[1040px] ">
            <div class="bg-white max-w-[800px] px-5 py-3 5 shadow-sm">
                <section>
                    <h2>create invoice</h2>
                    <p>add infoemation to generate a report</p>
                </section>
                <div>
                    <form method="POST" action="{{ route('invoice/create') }}">
                        @csrf
                        <div class="mb-3">
                            <x-label for="name" value="{{ __('Select Customer') }}" />
                            <select class="min-w-[400px]">
                                <option value="value1">Customer One</option>
                                <option value="value2">Customer Two</option>
                                <option value="value2">Customer Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <x-label for="name" value="{{ __('Add items') }}" />

                            <section class="flex flex-row gap-3 mb-3">
                                <select class="min-w-[400px]">
                                    <option value="value1">Customer One</option>
                                    <option value="value2">Customer Two</option>
                                    <option value="value2">Customer Three</option>
                                </select>
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                            </section>
                            <section class="flex flex-row gap-3 mb-3">
                                <select class="min-w-[400px]">
                                    <option value="value1">Customer One</option>
                                    <option value="value2">Customer Two</option>
                                    <option value="value2">Customer Three</option>
                                </select>
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                            </section>
                            <section class="flex flex-row gap-3 mb-3">
                                <select class="min-w-[400px]">
                                    <option value="value1">Customer One</option>
                                    <option value="value2">Customer Two</option>
                                    <option value="value2">Customer Three</option>
                                </select>
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                                <x-input id="email" class="block mt-1 min-w-[200px]" type="text" name="quantity" />
                            </section>

                            <div class="my-6 flex justify-between">
                                <x-button class="bg-blue-500">
                                    {{ __('Add New Column') }}
                                </x-button>
                                <span class="flex gap-3 px-7 py-3 bg-slate-100">
                                    <p>Total</p>
                                    <p>price</p>
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class="my-3 flex justify-between items-center gap-5">
                            <x-input id="expense" class="block mt-1 w-full" type="text" name="expense" placeholder="enter expense" />
                            <x-input id="expense" class="block mt-1 min-w-[200px]" type="text" name="expense" placeholder="amount" />
                        </div>
                        <div class="my-6 flex justify-between">
                            <x-button class="bg-blue-500">
                                {{ __('Add New Column') }}
                            </x-button>
                            <span class="flex gap-3 px-7 py-3 bg-slate-100">
                                <p>Total</p>
                                <p>price</p>
                            </span>
                        </div>
                        <hr>
                        <div class="flex justify-between mt-10 mb-2">
                            <section>
                                <p>total</p>
                                <p>total lkr</p>
                            </section>
                            <section>
                                <x-button>
                                    {{ __('Generate invoice') }}
                                </x-button>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>