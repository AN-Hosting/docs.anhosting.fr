@extends('home.layouts.app')

@section('content')
<section>
        <div class="bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-700 rounded-lg p-6 mb-8 mx-4 lg:mx-auto max-w-7xl" x-scroll>
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-200">{{ __('Site en Construction') }}</h3>
                        <p class="text-yellow-700 dark:text-yellow-300">{{ __('Notre site est actuellement en cours de développement. Certaines fonctionnalités peuvent être limitées ou indisponibles.') }}</p>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('github') }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-yellow-300 dark:border-yellow-600 rounded-md text-sm font-medium text-yellow-700 dark:text-yellow-200 bg-transparent hover:bg-yellow-100 dark:hover:bg-yellow-800/30 transition-colors duration-200">
                        {{ __('Suivez notre progression') }}
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('home.pages.home')
@endsection
