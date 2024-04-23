<header class="bg-white">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:divide-y lg:divide-gray-700 lg:px-8">
        <nav>
            <div class="flex justify-between items-center">
                <div class="flex">
                    <div><a href="/"><img class="py-2" src="/assets/images/copilot.svg" alt=""></a></div>
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4 font-lato uppercase">
                        <a title="{{ $page->siteName }} About" href="/about"
                            class="ml-6 border-transparent text-gray-600 font-lg font-semibold hover:border-cp_darkblue hover:text-gray-900 border-b-2 px-1 pt-1
                            {{ $page->isActive('/about') ? 'active border-b-2 border-red' : '' }}">
                            About</a>
                        <a href="/services"
                            class="ml-6 border-transparent text-gray-600 font-lg font-semibold hover:border-cp_darkblue hover:text-gray-900 border-b-2 px-1 pt-1
                            {{ $page->isActive('/services') ? 'active border-b-2 border-red' : '' }}">Services</a>
                        {{-- <a href="#" class="text-gray-600 font-medium">Contact</a> --}}
                    </div>
                </div>
                <div>
                    <a href="mailto:info@copilot-msp.com" target="_new"
                        class="rounded-md bg-cp_green px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Contact
                        Us</a>
                    {{-- <button type="button"
                        class="inline-flex items-center gap-x-1.5 rounded-md bg-cp_green px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-cp_lightblue focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Contact Us
                        <i class="fa-solid fa-arrow-right"></i>
                    </button> --}}
                </div>
            </div>
        </nav>
    </div>
</header>
