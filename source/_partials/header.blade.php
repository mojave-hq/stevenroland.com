<header
    x-data="{
        showMobileMenu: false
    }">
    {{-- Desktop --}}
    <nav class="flex items-center justify-between p-6 mx-auto max-w-7xl lg:px-8" aria-label="Global">
        <div class="flex flex-1">
            <div class="hidden lg:flex lg:gap-x-12">
                <x-header.desktop-link href="/posts" value="Posts" />
                <x-header.desktop-link href="/resume" value="Résumé" />
            </div>
            <div class="flex lg:hidden">
                <button
                    x-on:click="showMobileMenu = true"
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <x-icon svg="box.menu-alt-left" class="w-6 h-6" />
                </button>
            </div>
        </div>
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">{{ $page->siteName }}</span>
            <x-icon svg="brand.logoicon" class="h-8 h8" />
        </a>
        <div class="flex justify-end flex-1">
            <x-search />
        </div>
    </nav>

    {{-- Mobile --}}
    <div class="lg:hidden" role="dialog" aria-modal="true">
        {{-- Backdrop --}}
        <div
            x-show="showMobileMenu"
            x-cloak
            class="fixed inset-0 z-10"></div>

        {{-- Menu --}}
        <div
            x-show="showMobileMenu"
            x-cloak
            class="fixed inset-y-0 left-0 z-10 w-full px-6 py-6 overflow-y-auto bg-white">
            <div class="flex items-center justify-between">
                <div class="flex flex-1">
                    <button
                        x-on:click="showMobileMenu = false"
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <x-icon svg="box.x" class="w-6 h-6" />
                    </button>
                </div>
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ $page->siteName }}</span>
                    <x-icon svg="brand.logoicon" class="h-8 h8" />
                </a>
                <div class="flex justify-end flex-1">
                    {{-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a> --}}
                </div>
            </div>
            <div class="mt-6 space-y-2">
                <x-header.mobile-link href="/posts" value="Posts" />
                <x-header.mobile-link href="/resume" value="Résumé" />
            </div>
        </div>
    </div>
</header>
