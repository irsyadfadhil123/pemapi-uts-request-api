<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Welcome, {{ $user->name }}</h1>

    <div class="mb-4">
        <label class="block text-gray-600 mb-2">Your API Key:</label>
        <div class="flex">
            <input id="apiKey" type="text" value="{{ $user->api_key }}" readonly class="w-full border border-gray-300 rounded-l-md p-2 text-sm text-gray-700 bg-gray-100" />
            <button onclick="copyApiKey()" class="bg-white hover:bg-gray-400 text-black px-4 py-2 rounded-r-md text-sm border border-gray-300">
                Copy
            </button>
        </div>
    </div>

    <a type="button" href="{{ route('logout') }}" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:w-auto">Logout</a>
</div>

<script>
    function copyApiKey() {
        const apiKeyInput = document.getElementById("apiKey");
        apiKeyInput.select();
        apiKeyInput.setSelectionRange(0, 99999);
        document.execCommand("copy");
        alert("API Key copied.");
    }
</script>
</body>
</html>
