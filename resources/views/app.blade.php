<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brians CRM</title>

    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="flex h-full">
        <div class="w-72 h-full flex-col">
            @livewire('navigation')
        </div>
        <div class="grow h-full flex flex-col bg-green-100">
            <div class="bg-yellow-50 w-full h-16 flex justify-end items-center pr-6 shadow-xl">
                <div class="font-bold text-slate-800">Account</div>
            </div>

        </div>
    </div>






@livewireScripts
</body>

</html>
