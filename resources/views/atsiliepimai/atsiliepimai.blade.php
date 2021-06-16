<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atsiliepimų puslapis') }}
        </h2>
    </x-slot>

        <div class="container mx-auto">
            <ul class="block w-11/12 my-14 mx-auto" x-data="{selected:null}">
                <li class="flex align-center flex-col">
                    <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                        class="py-4 border-solid border-2 border-blue-700 cursor-pointer px-5 py-3 bg-white text-blue-700 text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3 rounded-t"><i class="fas fa-plus"></i>+ Rašyti atsiliepimą
                        </h4>
                    <div x-show="selected == 0" class="border py-4 px-2">
                        <ul class="ml-4">
                            @livewire('atsiliepimai-create')
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container mx-auto">

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
