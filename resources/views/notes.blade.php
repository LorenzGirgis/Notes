<x-app-layout>
    <x-navbar></x-navbar>

    <body class="bg-gray-100">
        <main class="container mx-auto py-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800">
                    {{ explode(' ', Auth::user()->name)[0] }}'s Notes
                </h1>
                <p class="text-xl text-gray-700 mt-2">The best way to manage your daily life</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 text-blue-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H3a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM3 8v8h14V8H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Calendar</h3>
                    <p class="text-gray-600 text-center mt-2">Stay on top of your events and appointments.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 text-green-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zm-1 11a1 1 0 01-1.707.707L5.5 11.914l-1.293 1.293A1 1 0 013.5 11.914l1.793-1.793a1 1 0 011.414 0L9 12.586A1 1 0 019 13zm3.5-3.5a1 1 0 010-1.414l1.793-1.793a1 1 0 011.414 0l1.793 1.793a1 1 0 010 1.414L15.207 12l-1.793-1.793A1 1 0 0112.5 9.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">To-Do List</h3>
                    <p class="text-gray-600 text-center mt-2">Organize your tasks and stay productive.</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 text-purple-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2a1 1 0 012 0v10a1 1 0 01-2 0V5zm5 0a1 1 0 112 0v10a1 1 0 01-2 0V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Diary</h3>
                    <p class="text-gray-600 text-center mt-2">Keep track of your thoughts and memories.</p>
                </div>

               
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center mb-4">
                        <svg class="w-12 h-12 text-yellow-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16 3a1 1 0 100-2H4a1 1 0 100 2h12zM3 7a1 1 0 100 2h14a1 1 0 100-2H3zm1 6a1 1 0 000 2h10a1 1 0 100-2H4zm11 3a1 1 0 011 1v1a1 1 0 01-2 0v-1a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center">Checklist</h3>
                    <p class="text-gray-600 text-center mt-2">Create and manage your task checklists.</p>
                </div>
            </div>
        </main>
    </body>
</x-app-layout>
