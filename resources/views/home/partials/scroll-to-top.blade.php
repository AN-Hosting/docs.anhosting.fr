<button 
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    x-data="{ showButton: false }"
    x-init="window.addEventListener('scroll', () => { showButton = window.scrollY > 500 })"
    x-show="showButton"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-8"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-8"
    class="fixed bottom-8 right-8 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg cursor-pointer z-50 group">
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="h-6 w-6 transform transition-transform group-hover:-translate-y-1" 
         fill="none" 
         viewBox="0 0 24 24" 
         stroke="currentColor">
        <path stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button> 