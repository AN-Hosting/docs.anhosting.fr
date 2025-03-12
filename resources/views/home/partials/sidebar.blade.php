<!-- Sidebar Component -->
<div x-data="{ 
    isOpen: true, 
    dashboardOpen: {{ request()->routeIs('armareforger.*') ? 'true' : 'false' }}, 
    componentsOpen: false, 
    pagesOpen: false, 
    authOpen: false, 
    layoutsOpen: false 
}" 
    class="relative"
    role="navigation"
    aria-label="{{ __('Main Navigation') }}">
    
    <!-- Backdrop for mobile -->
    <div x-show="isOpen" 
        @click="isOpen = false"
        class="fixed inset-0 z-40 transition-opacity bg-gray-500/75 dark:bg-black/75 lg:hidden"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        aria-hidden="true">
    </div>

    <!-- Sidebar -->
    <div x-cloak 
        :class="isOpen ? 'translate-x-0' : '-translate-x-full'"
        class="fixed top-0 left-0 z-40 h-screen w-64 transition duration-300 transform bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 lg:translate-x-0">
        
        <!-- Scrollable content wrapper -->
        <div class="h-full flex flex-col">
            <!-- Fixed top section (for navbar spacing) -->
            <div class="h-16 flex-shrink-0"></div>
            
            <!-- Scrollable content -->
            <div class="flex-1 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 dark:scrollbar-thumb-gray-700 scrollbar-track-transparent">
                <!-- Navigation Links -->
                <nav class="px-4 pb-4">
                    <div class="space-y-1 py-4">
                        <!-- Home Button -->
                        <a href="{{ route('home') }}" 
                            class="flex items-center px-4 py-2.5 text-sm font-medium {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>{{ __('Home') }}</span>
                        </a>
                        <!-- Arma Reforger Menu -->
                        <div class="space-y-1">
                            <button @click="dashboardOpen = !dashboardOpen" 
                                class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 rounded-lg transition-colors duration-200 group"
                                :aria-expanded="dashboardOpen"
                                aria-controls="arma-submenu">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-gray-500 dark:text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <span>{{ __('Arma Reforger') }}</span>
                                </div>
                                <svg :class="dashboardOpen ? 'rotate-90' : ''" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                            <div x-show="dashboardOpen" 
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform -translate-y-2"
                                x-transition:enter-end="opacity-100 transform translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform translate-y-0"
                                x-transition:leave-end="opacity-0 transform -translate-y-2"
                                class="pl-11 space-y-1"
                                id="arma-submenu">
                                <a href="{{ route('armareforger.index') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.index') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('Introduction') }}
                                </a>
                                <a href="{{ route('armareforger.config') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.config') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('Config.json') }}
                                </a>
                                <a href="{{ route('armareforger.scenario') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.scenario') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('Scenario') }}
                                </a>
                                <a href="{{ route('armareforger.setting') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.setting') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('Additional Settings') }}
                                </a>
                                <a href="{{ route('armareforger.restart') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.restart') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('Create Restart') }}
                                </a>
                                <a href="{{ route('armareforger.opti') }}" 
                                    class="flex items-center px-4 py-2 text-sm {{ request()->routeIs('armareforger.opti') ? 'text-blue-600 bg-blue-50 dark:text-blue-500 dark:bg-blue-900/50' : 'text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' }} rounded-lg transition-colors duration-200">
                                    {{ __('AI Optimization') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Toggle Button for mobile -->
    <button @click="isOpen = !isOpen"
        class="fixed lg:hidden p-2 mt-2 ml-2 text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 z-40 left-2 top-14 bg-white dark:bg-gray-900 rounded-md shadow-lg border border-gray-200 dark:border-gray-700"
        aria-label="{{ __('Toggle Navigation') }}">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
            <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div> 