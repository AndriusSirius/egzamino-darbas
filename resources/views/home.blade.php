<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Titulinis') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">

        <div class="bg-gray-200 shadow-2xl rounded-lg text-center ml-10 py-12 mt-4">
            <h2 class="m-4 p-4 text-2xl font-bold text-black">
                Paslaugos
            </h2>
            <h2 class="m-4 p-4 text-base font-bold text-black">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio ipsam rerum aspernatur expedita nam.
            </h2>
            <div class="mt-8 flex ml-10 justify-center">
                <div class="inline-flex rounded-md bg-black shadow">
                    <a href="{{ route('atsiliepimai') }}" class="text-blue-700 font-bold py-2 px-6">
                        Palikite atsiliepimą
                    </a>
                </div>
            </div>
        </div>

    </div>


</x-guest-layout>
