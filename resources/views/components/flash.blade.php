@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="fixed inset-x-0 top-0 bg-blue-500 text-center text-white py-2 px-4 rounded-xl py-2 px-4 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
