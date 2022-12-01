<x-app-layout>
    <header class="text-center mb-8">
        <div class="font-bold text-4xl">The Eloquent Blog</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, vero. Aut numquam vero incidunt at enim
            voluptatum consectetur, sit saepe.</p>
    </header>

    <div class="max-w-2xl mx-auto mt-8 divide-y ">
        @foreach ($years as $year => $blogs)
            <div class="mt-12">
                <h2>{{ $year }}</h2>
                <div class="flex mt-2 flex-wrap">
                    @foreach ($blogs as $post)
                        <div>
                            <a href="">{{ $post->title }}</a>
                            <div class="text-sm text-gray-800">
                                Posted {{ $post->published_at }} by {{ $post->author->name }}
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- <a href="/{{ $blog->slug }}" class="font-bold text-center">{{ $blog->title }}</a>
                <div class="flex items-center space-x-2">
                    Posted on <small class="mx-2 font-semibold">
                        {{ Carbon::parse($blog->published_at)->year }};

                    </small> by
                    <span class="ml-2">{{ $blog->author->name }}</span>
                </div> --}}
            </div>
        @endforeach
    </div>

</x-app-layout>
