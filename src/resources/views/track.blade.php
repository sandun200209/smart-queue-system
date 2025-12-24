<body class="bg-blue-50 flex flex-col items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
        <h1 class="text-2xl font-bold">Your Token: {{ $token->token_number }}</h1>
        <p class="text-lg mt-2 uppercase">Status: 
            <span class="font-bold text-blue-600">{{ $token->status }}</span>
        </p>
        @if($token->status == 'waiting')
            <p class="text-sm text-gray-500 mt-4 italic">Keep this page open. We will update you.</p>
        @endif
    </div>
</body>