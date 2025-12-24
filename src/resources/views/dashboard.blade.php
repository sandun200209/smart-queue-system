<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Queue Control Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <meta http-equiv="refresh" content="10">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal overflow-x-hidden">

    <div class="flex flex-col md:flex-row min-h-screen">
        <div class="bg-slate-900 shadow-xl w-full md:w-64 flex-shrink-0">
            <div class="md:sticky md:top-0">
                <div class="p-6 text-white text-xl font-bold border-b border-gray-800">
                    <i class="fas fa-layer-group mr-2"></i> Menu
                </div>
                <ul class="list-reset flex flex-row md:flex-col text-center md:text-left text-white">
                    <li class="flex-1">
                        <a href="{{ url('/') }}" target="_blank" class="block py-4 px-4 align-middle text-white no-underline hover:bg-gray-800 border-b-2 border-transparent hover:border-blue-500">
                            <i class="fas fa-ticket-alt md:mr-3"></i><span class="text-xs md:text-base">Kiosk Mode</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="{{ route('counter.index') }}" target="_blank" class="block py-4 px-4 align-middle text-white no-underline hover:bg-gray-800 border-b-2 border-transparent hover:border-blue-500">
                            <i class="fas fa-desktop md:mr-3"></i><span class="text-xs md:text-base">Counter Panel</span>
                        </a>
                    </li>
                    <li class="flex-1">
                        <a href="{{ route('display.index') }}" target="_blank" class="block py-4 px-4 align-middle text-white no-underline hover:bg-gray-800 border-b-2 border-transparent hover:border-blue-500">
                            <i class="fas fa-tv md:mr-3"></i><span class="text-xs md:text-base">Main Display</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-1 bg-gray-100">
            <div class="bg-blue-800 p-4 shadow text-2xl text-white">
                <h3 class="font-bold text-2xl md:text-3xl italic">
                    <i class="fas fa-tachometer-alt mr-2"></i> Smart Queue System Dashboard
                </h3>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-yellow-500 flex justify-between items-center overflow-hidden transition-all hover:shadow-xl">
                    <div>
                        <h4 class="text-gray-400 uppercase font-bold text-sm tracking-wider">Currently Calling</h4>
                        <p class="text-5xl md:text-7xl font-black text-gray-800">{{ $callingToken->token_number ?? '---' }}</p>
                    </div>
                    <div class="text-yellow-500 opacity-20">
                        <i class="fas fa-bullhorn fa-4xl"></i>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border-l-8 border-blue-500 flex justify-between items-center overflow-hidden transition-all hover:shadow-xl">
                    <div>
                        <h4 class="text-gray-400 uppercase font-bold text-sm tracking-wider">Waiting in Queue</h4>
                        <p class="text-5xl md:text-7xl font-black text-blue-600">{{ $waitingCount ?? 0 }}</p>
                    </div>
                    <div class="text-blue-500 opacity-20">
                        <i class="fas fa-users fa-4xl"></i>
                    </div>
                </div>
            </div>

            <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ url('/') }}" target="_blank" class="bg-white p-6 rounded-2xl shadow-md border-b-4 border-green-500 hover:scale-105 transition-all text-center group">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-500 transition-colors">
                        <i class="fa fa-print text-2xl text-green-500 group-hover:text-white"></i>
                    </div>
                    <h5 class="font-bold uppercase text-gray-700">Kiosk View</h5>
                    <p class="text-blue-500 text-sm mt-2 font-semibold">Open Issuing Terminal</p>
                </a>

                <a href="{{ route('counter.index') }}" target="_blank" class="bg-white p-6 rounded-2xl shadow-md border-b-4 border-blue-500 hover:scale-105 transition-all text-center group">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-500 transition-colors">
                        <i class="fas fa-users-cog text-2xl text-blue-500 group-hover:text-white"></i>
                    </div>
                    <h5 class="font-bold uppercase text-gray-700">Counter Staff</h5>
                    <p class="text-blue-500 text-sm mt-2 font-semibold">Call & Manage Tokens</p>
                </a>

                <a href="{{ route('display.index') }}" target="_blank" class="bg-white p-6 rounded-2xl shadow-md border-b-4 border-purple-500 hover:scale-105 transition-all text-center group">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-500 transition-colors">
                        <i class="fas fa-tv text-2xl text-blue-500 group-hover:text-white"></i>
                    </div>
                    <h5 class="font-bold uppercase text-gray-700">Main TV Display</h5>
                    <p class="text-blue-500 text-sm mt-2 font-semibold">Open Public Screen</p>
                </a>
            </div>
            
            <div class="p-10 text-center">
                <p class="text-gray-400">Smart Queue Management System © 2025</p>
                <div class="inline-block mt-4 px-4 py-2 bg-blue-50 rounded-full text-blue-600 text-xs font-bold animate-pulse">
                    Live Updates Active
                </div>
            </div>
        </div>
    </div>
</body>
</html>