<div>
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan nama anda : </label>
    <input type="text" id="small-input" wire:model.live='name' class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <p class="mb-3 text-gray-500 dark:text-gray-400">Halo nama saya adalah {{ $name }}</p>
    <br>

    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis kelamin anda adalah : </label>
    <div class="flex items-center mb-4">
        <input id="default-radio-1" type="radio" wire:model.live='jk' value="Laki-laki" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
    </div>
    <div class="flex items-center">
        <input checked id="default-radio-2" type="radio" wire:model.live='jk' value="Perempuan" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
    </div>
    <p class="mb-3 text-gray-500 dark:text-gray-400">Jenis kelamin anda adalah {{ $jk }}</p>
    <br>

    <form class="max-w-sm mb-3">
        <label for="agama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
        <select id="agama" wire:model.live='agama' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option hidden>Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
    </form>
    <p class="mb-3 text-gray-500 dark:text-gray-400">Agama anda adalah {{ $agama }}</p>

    <br>

    <div class="flex items-center mb-4">
        <input wire:model.live='hobi' id="gambar" type="checkbox" value="Gambar" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="gambar" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
    </div>
    <div class="flex items-center mb-4">
        <input wire:model.live='hobi' id="koding" type="checkbox" value="Koding" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="koding" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koding</label>
    </div>
    <div class="flex items-center mb-4">
        <input wire:model.live='hobi' id="mandi" type="checkbox" value="Mandi" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="mandi" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mandi</label>
    </div>
    <p class="mb-3 text-gray-500 dark:text-gray-400">Hobi anda adalah {{implode(', ', $hobi) }}</p>

    <br>
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan password anda : </label>
    <input
    @if ($showPassword == 'show')
    type="text"
    @else
    type="password"
    @endif
    id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <div class="flex items-center mb-4">
        <input wire:model.live='showPassword' type="checkbox" value="show" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="showPassword" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Show Password</label>
    </div>
    <br>
</div>
