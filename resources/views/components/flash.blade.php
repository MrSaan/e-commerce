<!-- session check -->
@if (session()->has('success'))
<div x-data="{ show: true  }" x-init="setTimeout(() => show = false, 8000)" x-show="show"
    class="bg-blue-500 bottom-0 fixed mb-3 px-4 py-2 right-3 rounded-xl text-sm text-white">

    <p>{{ session()->get('success') }}</p>
</div>
@endif