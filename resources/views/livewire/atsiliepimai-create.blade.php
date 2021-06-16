<form class="p-6 flex flex-col">
    <div class="flex flex-col">
        <label for="name">Vardas *</label>
        <input type="name" name="name" wire:model="name" id="name" placeholder="Įveskite savo vardą"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
    </div>

    <div class="flex flex-col mt-2">
        <label for="name">Pavardė *</label>
        <input type="name" name="lastname" id="lastname" wire:model="lastname" placeholder="Įveskite savo pavardę"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
    </div>

    <div class="flex flex-col mt-2">
        <label for="email">El.pašto adresas *</label>
        <input type="email" name="email" id="email" wire:model="email" placeholder="Įveskite savo el.pašto adresą"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
    </div>

    <div class="flex flex-col mt-2">
        <label>Kokiomis mūsų paslaugomis naudojatės?</label>
        <div class="mt-2">
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio" name="services_uses" value="Skrydžiai" wire:model="services_uses">
                <span class="ml-2">Skrydžiai</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="services_uses" value="Automobilių nuoma" wire:model="services_uses">
                <span class="ml-2">Automobilių nuoma</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="services_uses" value="Dviračių nuoma" wire:model="services_uses">
                <span class="ml-2">Dviračių nuoma</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="services_uses" value="Autobusų nuoma" wire:model="services_uses">
                <span class="ml-2">Autobusų nuoma</span>
            </label>
        </div>
    </div>

    <div class="flex flex-col mt-2">
        <label>Kaip vertinate mūsų paslaugų kokybę?</label>
        <div class="mt-2">
            <label class="inline-flex items-center">
                <input type="radio" class="form-radio" name="services_quality" value="Gerai" wire:model="services_quality">
                <span class="ml-2">Gerai</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="services_quality" value="Patenkinamai" wire:model="services_quality">
                <span class="ml-2">Patenkinamai</span>
            </label>
            <label class="inline-flex items-center ml-6">
                <input type="radio" class="form-radio" name="services_quality" value="Blogai" wire:model="services_quality">
                <span class="ml-2">Blogai</span>
            </label>
        </div>
    </div>

    <div class="flex flex-col mt-2 mb-2">
        <label for="content">Jūsų nuomonė apie mus:</label>
        <textarea name="opinion_about_us" wire:model="opinion_about_us"
            class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none"
            rows="3"></textarea>
    </div>

    <button type="submit" wire:click.prevent="save()"
        class="w-52 border-2 px-6 py-3 font-bold rounded-md bg-blue-500 hover:bg-red-700 focus:outline-none focus:shadow-outline">
        Siųsti atsiliepimą
    </button>
</form>
