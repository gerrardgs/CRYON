<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $course->nama_course }}</title>
</head>

<body class="w-full h-full bg-[#181727] text-white">
    <header class="flex w-full justify-between items-center px-12 py-6 mb-12">
        <img src="{{ asset('logo.png') }}" alt="Logo">
        <div class="flex space-x-6 items-center">
            <p class="text-white font-medium italic">Hai, <span class="font-bold">{{ $user->name }}</span></p>
            <a href="/home" class="font-bold">Home</a>
            <a href="/education" class="text-[#28B8FF] font-bold">Education</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="font-bold border-2 border-red-400 rounded-xl px-4 py-2 text-red-400 hover:bg-red-400 hover:text-white">Logout</button>
            </form>
        </div>
    </header>
    <main class="flex flex-col mb-20 items-center">
        <section class="flex flex-col items-center w-3/5 space-y-14">
            <div class="flex justify-center items-center space-x-3">
                <a href="/education" class="flex justify-center items-center h-fit px-3 py-1.5 bg-red-500 rounded-lg space-x-2 hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                    </svg>
                    {{-- <p class="font-bold"">Kembali</p> --}}
                </a>
                <h1 class="text-5xl font-semibold">{{ $course->nama_course }}</h1>
            </div>
            <div class="w-full space-y-12">
                @foreach ($materis as $materi)
                    <div class="rounded-lg border-4 border-[#28B8FF] space-y-2">
                        <div class="px-6 py-3 bg-gray-600 rounded-t-md border-b-4 border-b-[#28B8FF]">
                            <h2 class="text-2xl font-medium">{{ $materi->nama_materi }}</h2>
                        </div>
                        <div class="flex w-full justify-center pt-3">
                            <img src="{{ asset('materi_course/' . $materi->gambar_materi) }}" alt="Gambar Materi" class="w-3/5 rounded-md">
                        </div>
                        <div class="indent-10 text-justify px-6 py-3 leading-7 tracking-wider text-lg">
                            {!! $materi->isi_materi !!}
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="disqus_thread" class="w-full"></div>
        </section>
    </main>

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://cryon-forum.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>

</body>

</html>
