<nav x-data="{ open: false }" 
     class="absolute top-0 left-0 w-full z-50 {{ request()->is('contacts') ? 'bg-slate-950 shadow-md' : 'bg-gradient-to-b from-slate-950 via-slate-950/50 to-transparent' }} border-b border-white/5 transition-all duration-300">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-28 gap-4">
            
            <div class="flex items-center space-x-4 shrink-0">
                <div class="w-14 h-14 bg-gradient-to-br from-emerald-600 to-emerald-900 rounded-xl flex items-center justify-center shadow-2xl border border-emerald-500/30 p-2.5 overflow-hidden">
                    <img src="{{ asset('images/logobjsm.jpeg') }}" alt="Logo Grand Venue" class="max-h-full max-w-full object-contain">
                </div>
                <div class="leading-none">
                    <span class="block text-white font-bold text-xl sm:text-2xl tracking-widest font-luxury-title">BJSM Venue</span>
                    <span class="block text-amber-400 text-[10px] font-semibold tracking-widest uppercase mt-1.5 whitespace-nowrap">Buana Jaya Sugih Makmur</span>
                </div>
            </div>

            <div class="hidden lg:flex items-center justify-end flex-1 md:gap-8 lg:gap-10 text-[11px] font-bold tracking-widest uppercase">
                <div class="flex items-center space-x-6 xl:space-x-10">
                    <a href="{{ url('/') }}" 
                       class="{{ request()->is('/') ? 'text-amber-400 border-b-2 border-amber-400' : 'text-slate-300 hover:text-amber-400' }} transition duration-200 pb-2">
                        Beranda
                    </a>

                    <a href="{{ route('rooms.index') }}" 
                       class="{{ request()->is('rooms') ? 'text-amber-400 border-b-2 border-amber-400' : 'text-slate-300 hover:text-amber-400' }} transition duration-200 pb-2">
                        Ruangan
                    </a>

                    <a href="{{ route('packages.index') }}" 
                       class="{{ request()->is('packages') ? 'text-amber-400 border-b-2 border-amber-400' : 'text-slate-300 hover:text-amber-400' }} transition duration-200 pb-2">
                        Paket Sewa
                    </a>

                    <a href="{{ route('contacts.index') }}" 
                       class="{{ request()->is('contacts') ? 'text-amber-400 border-b-2 border-amber-400' : 'text-slate-300 hover:text-amber-400' }} transition duration-200 pb-2">
                        Contact
                    </a>
                </div>
                
                <div class="shrink-0">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-block bg-emerald-700 hover:bg-emerald-600 text-white font-bold px-5 py-2.5 rounded-lg tracking-widest transition duration-300 shadow-lg whitespace-nowrap">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="inline-block bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-slate-950 font-bold px-5 py-2.5 rounded-lg tracking-widest transition duration-300 shadow-xl whitespace-nowrap">Login</a>
                        @endauth
                    @endif
                </div>
            </div>

            <div class="flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-900 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden bg-slate-950/95 border-b border-white/5 backdrop-blur-lg px-4 pt-2 pb-6 space-y-3 text-center text-xs font-bold tracking-widest uppercase">
        <a href="{{ url('/') }}" @click="open = false" 
           class="block py-2.5 {{ request()->is('/') ? 'text-amber-400 border-b border-amber-400/20' : 'text-slate-300' }}">
            Beranda
        </a>
        <a href="{{ route('rooms.index') }}" @click="open = false" 
           class="block py-2.5 {{ request()->is('rooms') ? 'text-amber-400 border-b border-amber-400/20' : 'text-slate-300' }}">
            Ruangan
        </a>
        <a href="{{ route('packages.index') }}" @click="open = false" 
           class="block py-2.5 {{ request()->is('packages') ? 'text-amber-400 border-b border-amber-400/20' : 'text-slate-300' }}">
            Paket Sewa
        </a>
        <a href="{{ route('contacts.index') }}" @click="open = false" 
           class="block py-2.5 {{ request()->is('contacts') ? 'text-amber-400 border-b border-amber-400/20' : 'text-slate-300' }}">
            Contact
        </a>
        
        <div class="pt-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="block w-full bg-emerald-700 text-white py-3 rounded-lg">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 py-3 rounded-lg">Login</a>
                @endauth
            @endif
        </div>
    </div>
</nav>