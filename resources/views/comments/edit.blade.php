<x-app-layout>

    <div class="py-12 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-sharpblack tracking-widest text-white sm:text-4xl">Edit Comment</h2>

                <form action="/posts/{{$post->id}}/comments/{{$comment->id}}" method="POST">
                    @csrf
                    @METHOD('PUT')

                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <div class="col-span-full">
                                    <label for="body" class="block text-sm font-medium leading-6 text-gray-100">Comment</label>
                                    <div class="mt-2">
                                        <textarea id="body" name="body" rows="2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$comment->body}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="mt-6 mb-6 flex items-center justify-start gap-x-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save Comment</button>
                    </div>
                </form>
                <form action="/posts/{{$post->id}}/comments/{{$comment->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete Comment</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
