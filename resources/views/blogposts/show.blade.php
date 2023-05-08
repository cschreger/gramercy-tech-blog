<x-app-layout>

    <div class="py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">

                <h2 class="text-3xl font-sharpblack tracking-widest text-white sm:text-4xl">{{$post->title}}</h2>
                <p class="mt-2 text-lg font-sharpmedium tracking-wider leading-8 text-gray-200">{{$post->created_at->format('F jS, o')}}</p>

                <div class="space-y-16 border-t border-gray-200 pt-10 sm:mt-8 sm:pt-8">
                    <article class="flex max-w-xl flex-col items-start justify-between text-gray-100 font-sharpmedium">
                        <div class="group relative">
                            <p class="mt-5te text-md leading-6">{{$post->body}}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-50">
                                    {{$post->author->display_name}}
                                </p>
                            </div>
                        </div>
                    </article>
                    @if ($post->author == $user)
                    <a href="/posts/{{$post->id}}/edit" class="text-gray-200 hover:underline">
                        <div>Edit Post</div>
                    </a>
                    @endif

                    <div class="mt-4">
                        <img src="{{url('/images/separator.png')}}" class="w-12 mx-auto mb-8" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
