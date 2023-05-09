<x-app-layout>

    <div class="py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">

                <h2 class="text-3xl font-sharpblack tracking-widest text-white sm:text-4xl">{{$post->title}}</h2>
                <p class="mt-2 text-lg font-sharpmedium tracking-wider leading-8 text-gray-200">{{$post->created_at->format('F jS, o')}}</p>
                @if ($post->author == $user)
                <a href="/posts/{{$post->id}}/edit" class="text-gray-200 hover:underline">
                    <div>Edit Post</div>
                </a>
                @endif

                <div class="space-y-4 border-t border-gray-200 pt-10 sm:mt-8 sm:pt-8">
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

                    @if ($post->comments->count() > 0)
                    <h1 class="font-sharpmedium underline text-center text-white tracking-wider pt-12">Comments</h1>
                    <div class="flow-root pt-0">
                        <ul role="list" class="-mb-2">
                            @foreach ($post->comments->sortDesc() as $comment)
                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex items-start space-x-3">
                                        <div class="min-w-0 flex-1">
                                            <div>
                                                <div class="text-sm">
                                                    <p class="font-medium text-gray-100">{{$comment->author->display_name}}</p>
                                                </div>
                                            </div>
                                            <div class="mt-2 text-sm text-gray-200">
                                                <p>{{$comment->body}}</p>
                                            </div>
                                            @if ($comment->author == $user)
                                            <a href="/posts/{{$post->id}}/comments/{{$comment->id}}/edit" class="hover:underline font-sharpmedium text-white text-xs">
                                                <div class="pt-4">Edit Comment</div>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="/posts/{{$post->id}}/comments" method="POST" />
                    @csrf

                    <div class="mt-8">
                        <label for="body" class="block text-sm font-medium leading-6 text-white">Add your comment</label>
                        <div class="mt-2">
                            <textarea rows="2" name="body" id="body" class="block w-full bg-gray-700 rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <div class="mt-6 mb-6 flex items-center justify-start gap-x-6">
                            <button type="submit" class="rounded-md bg-[#5AC8E0] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Comment</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
