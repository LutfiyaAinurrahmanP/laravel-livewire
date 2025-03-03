<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Main App</title>
    @livewireStyles
</head>

<body>
    <div class="p-4 mx-auto">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="flex items-center justify-center h-full mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
                <div class="w-full h-full p-6">
                    @livewire('article-main')
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
