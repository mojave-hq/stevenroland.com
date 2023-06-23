<div
    x-data="search"
    class="relative z-10"
    role="dialog"
    aria-modal="true">
    <button
        x-on:click="showInput()"
        type="button"
        class="flex items-center p-2 text-gray-900 transition-all duration-500 rounded-md hover:bg-black hover:text-white backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 focus:ring-offset-gray-100">
        <x-icon svg="box.search" class="w-5 h-5" />
        <span class="sr-only">Search</span>
    </button>

    <!-- Background backdrop -->
    <div
        x-show="searching"
        x-cloak
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-25"></div>

    <div
        x-show="searching"
        x-cloak
        class="fixed inset-0 z-10 p-4 overflow-y-auto sm:p-6 md:p-20">
        <!-- Command palette -->
        <div
            x-show="searching"
            x-cloak
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            x-on:click.away="reset()"
            class="max-w-xl mx-auto overflow-hidden transition-all transform bg-white divide-y divide-gray-100 shadow-2xl rounded-xl ring-1 ring-black ring-opacity-5">
            <div class="relative">
                <label for="search" class="hidden">Search</label>
                <input
                    id="search"
                    type="search"
                    name="search"
                    placeholder="Search &mldr;"
                    autocomplete="off"
                    ref="search"
                    x-ref="search"
                    x-model="query"
                    x-on:keyup.esc="reset"
                    x-on:blur="reset"
                    role="combobox"
                    aria-expanded="false"
                    aria-controls="options"
                    class="block w-full py-4 pl-4 pr-12 text-base bg-transparent appearance-none text-slate-900 placeholder:text-slate-600 focus:outline-none sm:text-sm sm:leading-6">
                <x-icon svg="box.search" class="absolute w-6 h-6 pointer-events-none right-4 top-4 fill-slate-400" />
            </div>

            <!-- Results -->
            <ul
                x-show="results.length > 0"
                x-cloak
                class="py-2 overflow-y-auto text-sm text-gray-800 max-h-72 scroll-py-2"
                id="options"
                role="listbox">
                <template x-for="(result, index) in results">
                    <li class="cursor-default select-none " x-bind:key="index" x-bind:id="`option-${index}`" role="option" tabindex="-1">
                        <a
                            x-bind:href="result.item.link"
                            x-on:mousedown.prevent
                            x-bind:key="index"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <span x-text="result.item.title"></span>
                            <span class="block my-1 text-sm font-normal text-gray-700" x-html="result.item.snippet"></span>
                        </a>
                    </li>
                </template>
            </ul>

            <!-- Empty state -->
            <p
                x-show="query && results.length === 0"
                x-cloak
                class="p-4 text-sm text-gray-500">No results found.</p>
        </div>
    </div>
</div>