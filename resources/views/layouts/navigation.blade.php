<nav x-data="{ open: false }" class="bg-slate-900 text-slate-300 w-full md:w-64 md:fixed md:top-0 md:bottom-0 md:left-0 flex flex-col z-40 shadow-xl border-r border-slate-800">
    
    <div class="flex items-center justify-between h-16 px-6 border-b border-slate-800 shrink-0 bg-slate-950">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
            <x-application-logo class="block h-8 w-auto fill-current text-white" />
            <span class="font-bold text-lg text-white tracking-wider">ADMIN</span>
        </a>

        <button @click="open = ! open" class="md:hidden p-2 rounded-md text-slate-400 hover:bg-slate-800 hover:text-white focus:outline-none transition">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:flex flex-col flex-1 justify-between overflow-y-auto bg-slate-900">
        
        <div class="px-4 py-6 space-y-1.5 flex-1">
            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest px-3 block mb-3">INTERNAL SYSTEMS</span>
            
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg class="w-5 h-5 me-3 shrink-0 transition {{ request()->routeIs('dashboard') ? 'text-indigo-400' : 'text-slate-450 text-slate-400 group-hover:text-slate-200' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"/>
                </svg>
                <span>{{ __('Dashboard') }}</span>
            </x-nav-link>

            </div>

        <div class="p-4 border-t border-slate-800 bg-slate-950/50">
            <x-dropdown align="top" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center justify-between w-full px-3 py-2.5 text-sm font-medium text-slate-300 rounded-xl bg-slate-800/40 hover:bg-slate-800 hover:text-white transition focus:outline-none border border-slate-800/50">
                        <div class="truncate text-left pr-2">
                            <div class="font-semibold text-slate-200 truncate text-xs">{{ Auth::user()->name }}</div>
                            <div class="text-[11px] text-slate-500 truncate mt-0.5">{{ Auth::user()->email }}</div>
                        </div>
                        <svg class="fill-current h-4 w-4 text-slate-500 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="text-red-600">{{ __('Log Out') }}</span>
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</nav>