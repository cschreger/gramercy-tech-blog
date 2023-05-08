<x-app-layout>

    <div class="py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">

                <h2 class="text-3xl font-sharpblack tracking-widest text-white sm:text-4xl">Posts</h2>
                <p class="mt-2 text-lg font-sharpmedium tracking-wider leading-8 text-gray-200">All Users' Blog Posts</p>

                <div class="space-y-16 border-t border-gray-200 pt-10 sm:mt-8 sm:pt-8">
                    @foreach ($posts as $post)
                    <article class="flex max-w-xl flex-col items-start justify-between text-gray-100 font-sharpmedium">
                        <div class="group relative">
                            <a href="/posts/{{$post->id}}">
                                <h3 class="mt-3 text-lg font-semibold leading-6 font-sharpblack tracking-widest hover:underline">
                                    {{$post->title}}
                                </h3>
                            </a>

                            <p class="mt-5 line-clamp-3 text-sm leading-6">{{$post->body}}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-50">
                                    {{$post->author->display_name}}
                                </p>
                                <p>{{$post->created_at->format('F jS, o')}}</p>
                            </div>
                        </div>
                        @if ($post->author == $user)
                            <a href="/posts/{{$post->id}}/edit" class="hover:underline"><div>Edit Post</div></a>
                        @endif
                    </article>

                    <div class="mt-4">
                        <img src="{{url('/images/separator.png')}}" class="w-12 mx-auto mb-8" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
