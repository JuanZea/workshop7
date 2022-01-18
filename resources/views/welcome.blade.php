<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Random images</title>
        <link rel="shortcut icon" href="{{ asset('fish.svg') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app" class="h-screen bg-gray-300 items-center flex flex-col gap-5">
            <h1>APP</h1>
            <div class="p-4 bg-gray-200 rounded-xl">
                <img id="img" class="rounded-xl border-dotted border-4 border-gray-400 max-h-96 select-none" src="https://api.thecatapi.com/v1/images/search?format=src" alt="random image">
            </div>
            <c-button></c-button>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
