@if (session()->has('message'))
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
        <h1>{{ session('message') }}</h1>
    </div>
@endif
