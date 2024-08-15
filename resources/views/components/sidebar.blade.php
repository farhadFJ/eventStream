<div class="flex flex-col bg-gray-800 text-gray-200 shadow-lg m-4 rounded-lg ml-5">
    @if(auth()->user()->company)
        <div class="flex items-center justify-center h-20 border-b border-gray-600 bg-gray-700 rounded-t-lg">
            <span class="text-lg font-semibold">{{ __(auth()->user()->company->name) }}</span>
        </div>
    @endif
    <nav class="flex-1 px-4 py-4 space-y-2">
        <a href="/dashboard" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
<<<<<<< HEAD
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a9 9 0 00-9 9v11a1 1 0 001 1h16a1 1 0 001-1V11a9 9 0 00-9-9zm-3 18H6v-4h3v4zm5 0h-3v-4h3v4zm5 0h-3v-4h3v4zm1-8h-4v-2a2 2 0 10-4 0v2H9v-2a2 2 0 10-4 0v2H3v-1a7 7 0 0114 0v1z"/>
=======
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 0v12m8-8h3m-6 0a2 2 0 11-4 0 2 2 0 014 0z" />
>>>>>>> create-article
            </svg>
            <span class="ml-3">Dashboard</span>
        </a>
        <a href="/companies" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
<<<<<<< HEAD
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a9 9 0 00-9 9v11a1 1 0 001 1h16a1 1 0 001-1V11a9 9 0 00-9-9zm-3 18H6v-4h3v4zm5 0h-3v-4h3v4zm5 0h-3v-4h3v4zm1-8h-4v-2a2 2 0 10-4 0v2H9v-2a2 2 0 10-4 0v2H3v-1a7 7 0 0114 0v1z"/>
            </svg>
            <span class="ml-3">Company</span>
        </a>
        <a href="/restaurants" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21 2h-3a1 1 0 00-1 1v7a5.002 5.002 0 01-4 4.9V21a1 1 0 002 0v-6h1v6a1 1 0 002 0v-6a5.002 5.002 0 01-4-4.9V3a1 1 0 00-1-1h-2a1 1 0 00-1 1v7a7 7 0 006 6.92V21a3 3 0 006 0v-8a1 1 0 00-1-1zm-8-2h-2V4h2zm-4 2h2v2h-2zm6 8a3 3 0 01-6 0V4h6zm6 11a1 1 0 01-2 0v-8h2zm0-11h-2V4h2z"/>
            </svg>
            <span class="ml-3">Restaurant</span>
        </a>
        <a href="/articleGroups" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21 6h-3V2H6v4H3a2 2 0 00-2 2v14a2 2 0 002 2h18a2 2 0 002-2V8a2 2 0 00-2-2zM8 4h8v2H8V4zm11 16H5V8h14zm-2-7h-5v5h-2v-5H7v-2h5V8h2v3h5z"/>
            </svg>
            <span class="ml-3">Article Group</span>
        </a>
        <a href="/article" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21 3H3a1 1 0 00-1 1v16a1 1 0 001 1h18a1 1 0 001-1V4a1 1 0 00-1-1zM7 19H4v-3h3zm0-5H4v-3h3zm0-5H4V6h3zm10 10h-4v-3h4zm0-5h-4v-3h4zm0-5h-4V6h4zm5 10h-3v-3h3zm0-5h-3v-3h3zm0-5h-3V6h3z"/>
            </svg>
            <span class="ml-3">Article</span>
        </a>
=======
            <i class="fas fa-building text-blue-500"></i>
            <span class="ml-3">Company</span>
        </a>
        <a href="/restaurants" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <i class="fas fa-utensils text-red-500"></i>
            <span class="ml-3">Restaurant</span>
        </a>
        <a href="/articleGroups" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <i class="fas fa-layer-group text-yellow-500"></i>
            <span class="ml-3">Article Group</span>
        </a>
        <a href="/articles" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <i class="fas fa-file-alt text-green-500"></i>
            <span class="ml-3">Article</span>
        </a>
        <a href="/articles/allocation" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <i class="fas fa-share-alt text-purple-500"></i>
            <span class="ml-3">Article Allocation</span>
        </a>
>>>>>>> create-article
    </nav>
</div>
