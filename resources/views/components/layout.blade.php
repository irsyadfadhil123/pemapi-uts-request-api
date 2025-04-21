<div>
    <!DOCTYPE html>
    <html class="h-full bg-white" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Home</title>
    </head>
    <body class="h-full">
    <div class="bg-white">
        {{ $slot }}
    </div>
    </body>
    </html>
</div>
