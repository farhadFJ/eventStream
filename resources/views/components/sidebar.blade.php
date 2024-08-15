<div class="flex flex-col bg-gray-800 text-gray-200 shadow-lg m-4 rounded-lg ml-5">
    @if(auth()->user()->company)
        <div class="flex items-center justify-center h-20 border-b border-gray-600 bg-gray-700 rounded-t-lg">
            <span class="text-lg font-semibold">{{ __(auth()->user()->company->name) }}</span>
        </div>
    @endif
    <nav class="flex-1 px-4 py-4 space-y-2">
        <a href="/dashboard" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 0v12m8-8h3m-6 0a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="ml-3">Dashboard</span>
        </a>
        <a href="/companies" class="flex items-center p-3 text-base font-medium rounded-lg transition-transform transform hover:translate-x-2 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-black">
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
    </nav>
</div>
