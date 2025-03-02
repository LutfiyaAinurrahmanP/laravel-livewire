<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
    @livewireStyles
</head>
<body>
    <div class="container mx-auto p-4">
    @livewire('article-component')
    @livewire('article-form')

    </div>
    @livewireScripts
</body>
</html>
