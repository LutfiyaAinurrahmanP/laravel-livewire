@extends('livewire.layouts.master')

@push('styles')
    @livewireStyles
@endpush

@section('content')
    @livewire('components.navbar-component')
    @livewire('components.sidebar-component')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-5">
                        @livewire('components.heading-component', ['article' => 'Create'])
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-5">
                        @livewire('components.heading-component', ['article' => 'Action'])
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-5">
                        @livewire('components.create-data')
                    </div>
                </div>
            </div>
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
                <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                    <div class="w-full h-full p-5">
                        @livewire('components.show-data')
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
            <div class="flex items-center justify-center h-full rounded-sm bg-gray-50 dark:bg-gray-800">
                <div class="w-full h-full p-5">
                    @livewire('components.table-data')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @livewireScripts
@endpush
