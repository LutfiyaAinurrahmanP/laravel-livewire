<div>
    <form class="max-w-sm mx-auto" wire:submit.prevent='store'>
        @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">Selamat!</span> Data {{ session('success') }}
            </div>

        @endif
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="name" wire:model='name'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="masukkan nama kamu" />
            @error('name')
                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                        class="font-medium">Nama tidak boleh menggandung angka maupun karakter khusus!</span></p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
            <input type="text" id="email" wire:model='email'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="masukkan email kamu" />
            @error('email')
                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                        class="font-medium">Pastikan struktur email valid yah</span></p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
            <input type="password" id="password" wire:model='password'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            @error('password')
                <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                        class="font-medium">Masukkan password lebih dari 6 karakter</span></p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
