@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments">
            @csrf

            <header class="flex items-center">
                <img width="40" height="40" src="https://i.pravatar.cc/40?u={{auth()->id()}}" class="rounded-full" />
                <h1 class="ml-3">Want to participate?</h1>
            </header>
            <x-form.textarea name="body" />
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 ">
                <x-form.button>
                    Post
                </x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline hover:text-blue-500">Register</a> or <a href="/login" class="hover:underline hover:text-blue-500">log in</a> to leave a comment.
    </p>
@endauth