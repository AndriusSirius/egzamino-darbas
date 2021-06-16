<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atsiliepimų puslapis') }}
        </h2>
    </x-slot>
        <div class="container mx-auto">

            @livewire('atsiliepimai-create')

            <div class="flex justify-center">
                <div class="container mx-auto px-4">

                    <h2 class="ml-6 mt-14 font-semibold uppercase text-dark text-lg">Atsiliepimų sąrašas
                    </h2>

                    <section class="pt-8 px-4">
                        <div class="bg-white rounded flex flex-wrap overflow-hidden sm:-mx-1">

                            <div class="mb-96 border-b-2 w-full overflow-hidden sm:my-1 sm:px-1">

                                <table class="rounded-t-lg m-5 w-full mx-auto bg-gray-200 text-gray-800">
                                    <tr class="text-left border-b-2 border-gray-300">
                                        <th class="px-4 py-3">#</th>
                                        <th class="px-4 py-3">Vardas</th>
                                        <th class="px-4 py-3">Pavardė</th>
                                        <th class="px-4 py-3">El.Paštas</th>
                                        <th class="px-4 py-3">Paslaugų sąrašas</th>
                                        <th class="px-4 py-3">Vertinimas</th>
                                        <th class="px-4 py-3">Nuomonė</th>
                                    </tr>

                                    @foreach ($atsiliepimai as $atsiliepimas)

                                        <tr class="bg-gray-100 border-b border-gray-200">
                                            <td class="px-4 py-3">{{ $atsiliepimas->id }}</td>
                                            <td class="px- py-3">{{ $atsiliepimas->name }}</td>
                                            <td class="px-4 py-3">{{ $atsiliepimas->lastname }}</td>
                                            <td class="px-4 py-3">{{ $atsiliepimas->email }}</td>
                                            <td class="px-4 py-3">{{ $atsiliepimas->services_uses }}</td>
                                            <td class="px-4 py-3">{{ $atsiliepimas->services_quality }}</td>
                                            <td class="px-4 py-3">{{ $atsiliepimas->opinion_about_us }}</td>

                                    @endforeach
                                </table>

                            </div>

                    </section>
                </div>
            </div>
        </div>

</x-guest-layout>
