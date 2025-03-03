<div>
    @livewire('components.navbar-component')
    @livewire('components.sidebar-component')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-center h-full mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                <div class="w-full h-full p-6">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                        nilai :
                    </label>
                    <input type="text" id="small-input" wire:model='count'
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <br>
                    @if ($message == 'tambah')
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <span class="font-medium">Data Berhasil Ditambah!</span>
                        </div>
                    @elseif ($message == 'kurang')
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <span class="font-medium">Data Berhasil Dikurangi!</span>
                        </div>
                    @else
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <span class="font-medium">Masukkan Data atau Klik Button Dibawah!</span>
                        </div>
                    @endif
                    <button type="button" wire:click='tambah'
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+
                        Tambah</button>
                    @if ($count != 0)
                        <button type="button" wire:click='kurang'
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">-
                            Kurang</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
