<div>
    @livewire('components.navbar-component')
    @livewire('components.sidebar-component')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                <div class="w-full h-full p-5">
                    @livewire('components.heading-component', ['article' => 'Form'])
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4">
            {{-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            nama anda :
                        </label>
                        <input type="text" id="small-input" wire:model.live='name'
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <p class="mb-3 text-gray-500 dark:text-gray-400">Halo nama saya adalah {{ $name }}</p>
                        <br>

                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            kelamin anda adalah : </label>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" wire:model.live='jk' value="Laki-laki"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" wire:model.live='jk' value="Perempuan"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>
                        <p class="mb-3 text-gray-500 dark:text-gray-400">Jenis kelamin anda adalah {{ $jk }}
                        </p>
                        <br>

                        <form>
                            <label for="agama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <select id="agama" wire:model.live='agama'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                            <input wire:model.live='hobi' id="gambar" type="checkbox" value="Gambar"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gambar"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input wire:model.live='hobi' id="koding" type="checkbox" value="Koding"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="koding"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koding</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input wire:model.live='hobi' id="mandi" type="checkbox" value="Mandi"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mandi"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mandi</label>
                        </div>
                        <p class="mb-3 text-gray-500 dark:text-gray-400">Hobi anda adalah {{ implode(', ', $hobi) }}</p>

                        <br>
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            password anda :
                        </label>
                        <input
                            @if ($showPassword == 'show') type="text"
                        @else type="password" @endif
                            id="small-input"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <div class="flex items-center mb-4">
                            <input wire:model.live='showPassword' type="checkbox" value="show"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="showPassword"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Show
                                Password</label>
                        </div>
                        <br>
                    </div>
                </div>
            </div> --}}
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            nama kamu :
                        </label>
                        <input type="text" id="small-input" wire:model.live='name'
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @if ($name)
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">{{ $name }}</span> nama kamu kerennn 😎
                                </div>
                            </div>
                        @else
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">nama</span> kamu belum dimasukkan nih!
                                </div>
                            </div>
                        @endif
                        {{-- <p class="mb-3 text-gray-500 dark:text-gray-400">Halo nama saya adalah {{ $name }}</p> --}}
                    </div>
                </div>
            </div>

            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            kelamin anda adalah : </label>
                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" wire:model.live='jk' value="Laki-laki"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-1"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" wire:model.live='jk' value="Perempuan"
                                name="default-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>
                        @if ($jk == 'Laki-laki')
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Owh kamu
                                    <span class="font-medium">{{ $jk }}</span> 🥱
                                </div>
                            </div>
                        @elseif ($jk == 'Perempuan')
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Salam Kenal kak
                                    <span class="font-medium">{{ $name }}</span> 😊
                                </div>
                            </div>
                        @else
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Aku belum tau
                                    <span class="font-medium">Jenis kelamin</span> kamu nih!
                                </div>
                            </div>
                        @endif
                        {{-- <p class="mb-3 text-gray-500 dark:text-gray-400">Jenis kelamin anda adalah {{ $jk }} --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <form>
                            <label for="agama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <select id="agama" wire:model.live='agama'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option hidden>Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </form>
                        @if ($agama)
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Agama kamu adalah
                                    <span class="font-medium">{{ $agama }}</span>
                                </div>
                            </div>
                        @else
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Agama</span> kamu belum diisi nih!
                                </div>
                            </div>
                        @endif
                        {{-- <p class="mb-3 text-gray-500 dark:text-gray-400">Agama anda adalah {{ $agama }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <div class="flex items-center mb-4">
                            <input wire:model.live='hobi' id="gambar" type="checkbox" value="Gambar"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gambar"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input wire:model.live='hobi' id="koding" type="checkbox" value="Koding"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="koding"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koding</label>
                        </div>
                        <div class="flex items-center mb-4">
                            <input wire:model.live='hobi' id="mandi" type="checkbox" value="Mandi"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mandi"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mandi</label>
                        </div>
                        @if (count($hobi) == 1)
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Hobi
                                    <span class="font-medium">{{ implode(', ', $hobi) }}</span> itu keren tau!
                                </div>
                            </div>
                        @elseif (count($hobi) == 2)
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Kamu lumayan akhif ya kak
                                    <span class="font-medium">{{ $name }}</span> 😊
                                </div>
                            </div>
                        @elseif (count($hobi) == 3)
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Kamu aktif banget ya kak
                                    <span class="font-medium">{{ $name }}</span> 😊
                                </div>
                            </div>
                        @else
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Hobi</span> kamu belum diisi nih!
                                </div>
                            </div>
                        @endif
                        {{-- <p class="mb-3 text-gray-500 dark:text-gray-400">Hobi anda adalah {{ implode(', ', $hobi) }} --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan
                            password kamu :
                        </label>
                        <input wire:model.live='password'
                            @if ($showPassword == 'show') type="text"
                            @else type="password" @endif
                            id="small-input"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <div class="flex items-center mb-4 mt-2">
                            <input wire:model.live='showPassword' type="checkbox" value="show"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="showPassword"
                                class="ms-2 pr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Show</label>

                            @if ($showPassword == 'show')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-2"
                                    role="alert">
                                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>Waduh
                                        <span class="font-medium">password</span> kamu keliatan!
                                    </div>
                                </div>
                            @elseif ($showPassword != 'show' && $password != '')
                                <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                    role="alert">
                                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>Nah
                                        <span class="font-medium">password</span> kamu sekarang udah aman! 😊
                                    </div>
                                </div>
                            @else
                                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                    role="alert">
                                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div>
                                        <span class="font-medium">Password </span> kamu belum diisi nih!
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data kamu :
                        </label>
                        @if (empty($name) || empty($jk) || empty($agama) || empty($password) || empty($hobi))
                            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 mt-2"
                                role="alert">
                                <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>Tunggu
                                    <span class="font-medium">Semua </span> kamu isi ya!
                                </div>
                            </div>
                        @else
                            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 mt-2"
                                role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Data Kamu :</span>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Nama : {{ $name }}</p>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Password : {{ $password }}</p>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Jenis Kelamin : {{ $jk }}
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Agama : {{ $agama }}</p>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Hobi : {{ implode(', ', $hobi) }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
