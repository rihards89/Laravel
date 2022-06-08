<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight text-rose-400" >
            {{ __('Dashboard') }}
        </h2>
        @include('layouts.menu')
    </x-slot>

    <div class="py-12">
        @yield('content')
    </div>
</x-app-layout>