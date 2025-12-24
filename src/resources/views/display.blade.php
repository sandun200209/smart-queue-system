<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5"> <title>Queue Display</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
        .blink { animation: blink 1s infinite; }
    </style>
</head>
<body class="bg-slate-900 text-white h-screen flex flex-col p-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-blue-400">SMART QUEUE DISPLAY</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 flex-grow">
        <div class="lg:col-span-2 bg-slate-800 rounded-3xl border-4 border-blue-500 flex flex-col items-center justify-center p-10">
            <h2 class="text-3xl text-gray-400 uppercase tracking-widest">Now Calling</h2>
            <div class="text-[15rem] font-black text-blue-500 leading-none {{ $callingToken ? 'blink' : '' }}">
                {{ $callingToken->token_number ?? '---' }}
            </div>
            <div class="text-4xl text-white mt-5">
                Go to Counter: <span class="text-yellow-400 font-bold">{{ $callingToken->counter_number ?? '-' }}</span>
            </div>
        </div>

        <div class="bg-slate-800 rounded-3xl p-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-400 border-b border-gray-700 pb-3">Coming Up Next</h2>
            <div class="space-y-6">
                @forelse($waitingTokens as $token)
                    <div class="flex justify-between items-center bg-slate-700 p-5 rounded-2xl">
                        <span class="text-4xl font-bold text-white">{{ $token->token_number }}</span>
                        <span class="text-green-400 font-semibold italic text-xl italic">Waiting</span>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Queue is empty</p>
                @endforelse
            </div>
        </div>
    </div>
</body>
<script>
    // කලින් තිබ්බ Token එක මතක තබා ගැනීමට (සද්දය නැවත නැවත ඇසීම වැළැක්වීමට)
    let lastCalledToken = localStorage.getItem('lastToken');
    let currentToken = "{{ $callingToken->token_number ?? '' }}";
    let counterNumber = "{{ $callingToken->counter_number ?? '1' }}";

    function announceToken() {
        if (currentToken && currentToken !== lastCalledToken) {
            // අලුත් ටෝකන් එකක් නම් පමණක් සද්දය පිට කරයි
            let message = new SpeechSynthesisUtterance();
            message.text = `Token Number, ${currentToken.split('').join(' ')}, please proceed to counter ${counterNumber}`;
            message.lang = 'en-US';
            message.rate = 0.8; // වේගය පොඩ්ඩක් අඩු කළා පැහැදිලි වීමට
            
            window.speechSynthesis.speak(message);

            // අලුත් ටෝකන් එක ලෝකල් මෙමරි එකේ සේව් කරගන්නවා
            localStorage.setItem('lastToken', currentToken);
        }
    }

    // Page එක load වූ වහාම voice එක වැඩ කරයි
    window.onload = announceToken;
</script>
</html>