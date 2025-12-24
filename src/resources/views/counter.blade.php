<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Counter Dashboard - Counter 01</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-blue-600 text-white p-6 rounded-xl shadow-lg text-center">
                <h2 class="text-xl mb-2">Now Calling</h2>
                <div class="text-6xl font-black">
                    {{ $callingToken->token_number ?? '---' }}
                </div>
                <form action="{{ route('call.next') }}" method="POST" class="mt-6">
                    @csrf
                    <button class="bg-white text-blue-600 font-bold py-2 px-6 rounded-full hover:bg-gray-100 transition">
                        CALL NEXT 🔔
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg">
                <h2 class="text-xl font-bold mb-4 border-bottom">Waiting Queue</h2>
                <ul class="divide-y divide-gray-200">
                    @forelse($tokens as $token)
                        <li class="py-3 flex justify-between">
                            <span class="font-medium">{{ $token->token_number }}</span>
                            <span class="text-gray-500 text-sm">{{ $token->created_at->diffForHumans() }}</span>
                        </li>
                    @empty
                        <li class="py-3 text-gray-400">No one in queue.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</body>
</html>