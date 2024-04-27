<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="bg-amber-300 h-96 place-content-center">
        <div class="flex flex-wrap mx-auto place-content-center">
            <input type="text" class="border-0 rounded-md w-80" placeholder="Search ...">
            <button class="bg-white rounded-md mx-2 px-2 hover:bg-slate-300 ml-5">Search <i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>
    <div class="flex flex-wrap w-full h-96 flex flex-wrap">
        <div class="h-96 w-1/2 bg-amber-100 mx-auto place-content-center">
            <div class="mx-auto text-center">
                <div class="text-2xl p-2">WTS</div>
                <button class="bg-white rounded-md mx-2 px-4 py-2 hover:bg-slate-300">View</button>
            </div>
        </div>
        <div class="h-96 w-1/2 bg-amber-200 mx-auto place-content-center">
            <div class="mx-auto text-center">
                <div class="text-2xl p-2">WTB</div>
                <button class="bg-white rounded-md mx-2 px-4 py-2 hover:bg-slate-300">View</button>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap w-full h-96 flex flex-wrap">
        <div class="h-96 w-1/2 bg-amber-400 mx-auto place-content-center">
            <div class="mx-auto text-center">
                <div class="text-2xl p-2">WTT</div>
                <button class="bg-white rounded-md mx-2 px-4 py-2 hover:bg-slate-300">View</button>
            </div>
        </div>
        <div class="h-96 w-1/2 bg-amber-500 mx-auto place-content-center">
            <div class="mx-auto text-center">
                <div class="text-2xl p-2">GO</div>
                <button class="bg-white rounded-md mx-2 px-4 py-2 hover:bg-slate-300">View</button>
            </div>
        </div>
    </div>
</x-app-layout>