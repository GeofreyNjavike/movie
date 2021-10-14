<div class="flex flex-wrap">
    <div class="w-full md:bg-contain  h-96  bg-center"
        style="background-image:
                                                                                                                                                                                                                                                                                    url(https://image.tmdb.org/t/p/original/.{{ $trending['backdrop_path'] }});">
        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-30">
            <div class="text-center">
                <h1 class="text-5xl font-semibold text-white uppercase lg:text-3xl">

                    <strong> {{ $data['original_title'] }}</strong>
                </h1>

                <div class="align-items-center ">
                    <button
                    type="button"
                    class="px-4 py-3 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-x-75 transition-transform mx-5 flex"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>

                    <span class="ml-2">Download</span>
                </button>

                <button
                    type="button"
                    class="px-4 py-3 bg-blue-600 rounded-md text-white outline-none focus:ring-4 shadow-lg transform active:scale-y-75 transition-transform flex"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>

                    <span class="ml-2">Bookmark</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
