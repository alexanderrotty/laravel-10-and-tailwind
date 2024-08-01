    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- Header section --}}
        {{-- <div class="w-full h-auto min-h-screen flex flex-col">
            <div class="w-full bg-white h-[96px] drop-shadow-lg flex flex-row items-center">
                <div class="w-1/3 pl-5">
                    <a href="" class="uppercase text-base mx-5 text-black font-inter hover:tect-develobe-500 duration-200 font-bold">Movies</a>
                    <a href="" class="uppercase text-base mx-5 text-black font-inter hover:tect-develobe-500 duration-200 font-bold">TV SHOW</a>
                </div>
                <div class="w-1/3 flex items-center justify-center">
                    <a href="" class="font-bold text-5xl font-quicksand text-black hover:text-develobe-500 duration-200">MOVIES-21</a>
                </div>
                <div class="w-1/3 flex flex-row justify-end pr-10">
                    <a href="" class="group">
                        <svg width='32'height='32' role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>SearXNG</title><path d="m13.716 17.261 6.873 6.582L24 20.282l-6.824-6.536a9.11 9.11 0 0 0 1.143-4.43c0-5.055-4.105-9.159-9.16-9.159S0 4.261 0 9.316c0 5.055 4.104 9.159 9.159 9.159a9.11 9.11 0 0 0 4.557-1.214ZM9.159 2.773a6.546 6.546 0 0 1 6.543 6.543 6.545 6.545 0 0 1-6.543 6.542 6.545 6.545 0 0 1-6.542-6.542 6.545 6.545 0 0 1 6.542-6.543ZM7.26 5.713a4.065 4.065 0 0 1 4.744.747 4.064 4.064 0 0 1 .707 4.749l1.157.611a5.376 5.376 0 0 0-.935-6.282 5.377 5.377 0 0 0-6.274-.987l.601 1.162Z"/></svg>
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="w-full h-auto min-h-screen flex flex-col">
            {{-- Header section --}}
            @include('navigasi')
            {{-- End header section --}}

            {{-- Banner section --}}
            <div class="w-full h-[512px] flex flex-col relative bg-black">
                @foreach ($banner as $bannerItem)

                {{-- Banner image section --}}
                <div class="flex flex-row items-center w-full h-full relative slide">
                    <img src="{{ $imageBaseURL }}/original{{ $bannerItem->backdrop_path}}" class="absolute w-full h-full object-cover" alt="">
                    <div class="w-full h-full absolute bg-black bg-opacity-40"></div>

                    {{-- Title movie --}}
                    <div class="w-10/12 flex flex-col ml-28 z-10">
                        <span class="font-bold font-inter text-4xl text-white">{{ $bannerItem->title }}</span>
                        <span class="font-inter text-xl text-white w-1/2 line-clamp-2">{{ $bannerItem->overview }}</span>
                        <a href="/movie/{{ $bannerItem->id }}" class="bg-develobe-500 text-white pl-2 py-2 mt-5 font-inter pr-4 text-sm flex flex-row rounded-full items-center hover:drop-shadow-lg duration-200 w-fit">
                            <svg width='24' height='24' role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>VLC media player</title><path d="M12.0319 0c-.8823 0-1.0545.136-1.0545.136-.1738.056-.3556.255-.4105.43L9.683 3.3808c.4729.1729 1.3222.4266 2.2337.4266 1.0987 0 2.017-.3494 2.3763-.5075L13.4352.566c-.055-.1755-.237-.3707-.4067-.4374 0 0-.1142-.1286-.9966-.1286zm3.5645 7.455c-.3601.34-1.3276.9373-3.6797.9373-2.2929 0-3.189-.5678-3.5213-.9113l-1.3887 4.4227c.2272.3614 1.2539 1.5594 4.8847 1.5594 3.7569 0 4.8539-1.3467 5.0649-1.6737zm-8.5897 4.4487l-1.0025 3.1922H4.3428c-.2486 0-.5097.1932-.5826.4315l-2.334 7.6317a.3962.3962 0 0 0-.0169.1537c-.0008.0053-.002.0099-.002.016 0 .0839.0233.226.0233.226.0322.2456.2612.4452.5098.4452h20.1192c.2487 0 .4768-.1994.5098-.4453 0 0 .0234-.142.0234-.226a.0245.0245 0 0 0-.0025-.01.3201.3201 0 0 0 .0024-.0313.4096.4096 0 0 0-.019-.1282l-2.3339-7.6318c-.0729-.2383-.334-.4314-.5826-.4314h-1.6636l.2005.6391c-.2407.4854-1.4886 2.38-6.3027 2.38-4.6003 0-5.8288-1.73-6.1107-2.3072z"/></svg>
                            <span>Detail Movie</span>
                        </a>
                    </div>
                    {{-- End title --}}
                </div>
            {{-- End image section --}}
            @endforeach

            @if (count($banner) >  1)
            {{-- Prev Button --}}
            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center">
                <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200" onclick="moveSlide(-1)">

                </button>
            </div>
            {{-- End prev button --}}
            {{-- Next button --}}
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-1/12 flex justify-center">
                <button class="bg-white p-3 rounded-full opacity-20 hover:opacity-100 duration-200" onclick="moveSlide(1)">

                </button>
            </div>
            {{-- End next button --}}
            @endif
            {{-- Indicator image section --}}
            <div class="absolute bottom-0 w-full mb-8">
                <div class="w-full flex flex-row items-center justify-center">
                    @for ($pos = 1; $pos <= count($banner); $pos++)
                    <div class="w-2.5 h-2.5 rounded-full dot mx-1 cursor-pointer bg-white" onclick="currentSlide({{ $pos }})"></div>
                    @endfor
                </div>
            </div>
            {{-- End indicator image --}}
            </div>

        </div>
            {{-- End banner section --}}

            {{-- Top 10 movies section --}}
            <div class="mt-12">
                <span class="font-inter font-bold text-xl ml-28">Top 10 Movies</span>
                <div class="w-auto flex flex-row overflow-x auto pl-28 pt-6 pb-10">
                    @foreach ($loopMovies as $movieItem)
                    @php
                        $original_date = $movieItem->release_date;
                        $timestamp = strtotime($original_date);
                        $movieYear = date("Y", $timestamp);

                        $movieID = $movieItem->id;
                        $movieTitle = $movieItem->title;
                        $movieRating = $movieItem->vote_average;
                    $movieImage = "{$imageBaseURL}/w500{$movieItem->poster_path}";
                    @endphp

                    <a href="movie/{{ $movieID }}" class="group">
                        <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-2xl group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col mr-8 duration-100">
                            <div class="rounded-[32px] overflow-hidden">
                                <img src="{{ $movieImage }}" class="w-full h-[300px] rounded-[32px] group-hover:scale-150 duration-200" alt="">
                            </div>
                            <span class="font-inter font-bold text-xl mt-5 line-clamp-1 group-hover:line-clamp-none">{{ $movieTitle }}</span>
                            <span class="font-inter font-bold text-sm mt-1">{{$movieYear}}</span>
                            <div class="items-center flex flex-row mt-1">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><defs><style>.a{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style></defs><title>like-1</title><path class="a" d="M20,15.659h0a1.5,1.5,0,1,1,0,3H19a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,1-1.5,1H12.5c-2.851,0-3.5-.5-7-1v-8.5c2.45,0,6.5-4.5,6.5-8.5,0-1.581,2.189-2.17,3,.719.5,1.781-1,5.281-1,5.281h8a1.5,1.5,0,0,1,1.5,1.5c0,.829-.672,2-1.5,2H21a1.5,1.5,0,0,1,0,3H20"></path><rect class="a" x="0.5" y="10.159" width="5" height="12"></rect><path d="M3.25,19.159a.75.75,0,1,0,.75.75.75.75,0,0,0-.75-.75Z"></path></svg>
                                <span class="font-inter text-sm mt-1">{{ $movieRating }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- End top 10 movies section --}}
        {{-- script  --}}
        <<script>
            let slideIndex = 3;
            slideShow(slideIndex);

            // Move prev button
            function moveSlide(movestep){
                slideShow(slideIndex += movestep);
            }

            function slideShow(position){
                let index;
                const slides = document.getElementsByClassName("slide");

                //looping effect
                if(position > slides.length) {slideIndex = 1}
                if(position < 1) {slideIndex = slides.length}

                // Hide all slide
                for(index = 0; index < slides.length; index++){
                    slides[index].classList.add('hidden');
                }

                //show slide active
                slides[slideIndex - 1].classList.remove('hidden');
            }
        </script>
    </body>
    </html>
