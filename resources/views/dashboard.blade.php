<x-app-layout>
{{--    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>--}}
    <style>
        /*
 * We'll use CSS grids for the base template
 * More info on https://cssgrid.io/ by @wesbos
 */
        #main {
            display: grid;
            grid-template-columns: 6rem auto;
            /* Or grid-template-columns: config('width.24') auto; */
        }

        @media (min-width: 1200px) {
            /* Or @media (min-width: config('screens.xl')) { */

            #main { grid-template-columns: 12rem auto; }
            /* Or #main { grid-template-columns: config('width.48') auto; } */
        }


    </style>
    <div class="font-sans antialiased h-screen">
        <div id="main" >
            <!-- Sidebar -->
            <div class="border-gray relative h-full min-h-screen">
                <div class="xl:py-2">
                    <div class="hidden xl:block uppercase font-bold text-black-50 text-xs px-4 py-2">
                        Vartotojai
                    </div>
                    <div class="group relative sidebar-item with-children">
                        <a href="#" class="block xl:flex xl:items-center text-center xl:text-left shadow-light xl:shadow-none py-6 xl:py-2 xl:px-4 border-l-4 border-transparent hover:bg-gray-300">
                            <div class="text-black text-xs">Administratoriai</div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="bg-white h-full pt-8">
                <div class="text-center w-full text-grey-darkest">
                    test
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
