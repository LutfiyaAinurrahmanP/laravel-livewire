<div>
    @livewire('components.navbar-component')
    @livewire('components.sidebar-component')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-center h-full mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                <div class="w-full h-full p-6">

                        {{-- <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </p>
                        </div>
                        <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                            <p class="text-2xl text-gray-400 dark:text-gray-500">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </p>
                        </div> --}}
                        <div class="flex items-center justify-center h-24 rounded-sm bg-gray-50 dark:bg-gray-800">
                            <h3 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white md:text-5xl lg:text-2xl">
                                Selamat datang <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">{{ session('user_name') }}
                                </span>
                            </h3>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
