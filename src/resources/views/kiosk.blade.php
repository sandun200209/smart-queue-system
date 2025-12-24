<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Queue - Get Token</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">

    <div class="bg-white p-10 rounded-2xl shadow-2xl text-center max-w-md w-full">
        <h1 class="text-3xl font-bold mb-6 text-blue-600">Smart Queue System</h1>
        
        @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex flex-col items-center">
        <p class="text-xl font-semibold">{{ session('success') }}</p>
        
        <div class="mt-4 p-2 bg-white rounded-lg">
            {!! QrCode::size(150)->generate('https://a105aa37bc88.ngrok-free.app/my-token/' . session('token_id')) !!}
        </div>
        <p class="text-xs mt-2 text-gray-500 italic">Scan to track your status live</p>
    </div>
      @endif

        <p class="text-gray-600 mb-8">Click the button below to get your queue number.</p>

        <form action="{{ route('issue.token') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter Email for Live Status" 
           class="w-full p-4 mb-4 border-2 border-blue-100 rounded-xl focus:border-blue-500 outline-none transition-all" required>
    <button type="submit" class="...">GET TOKEN 🎫</button>
   </form>
    </div>

</body>
</html>