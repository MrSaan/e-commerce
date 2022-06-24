@extends('layouts.app')

@section('head')
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="config('services.midtrans.client_key')">
</script>
@endsection

@section('content')
<div class="pt-10 bg-white dark:bg-gray-800">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 lg:max-w-6xl mx-auto">

        <!-- list cart -->
        <div class="flex flex-col item-center gap-6 lg:col-span-2">
            <span class="capitalize text-2xl font-semibold px-4 text-slate-800 dark:text-white">Shopping cart</span>

            <!-- livewire cart list -->
            <livewire:shop.cart />
        </div>

        <!-- checkout product -->
        <livewire:shop.checkout />
    </div>
</div>
@endsection