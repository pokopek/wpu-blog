<x-layout>
    <x-slot:judul>{{$judul}}</x-slot:judul>
    <x-search></x-search>


    {{ $posts->links() }}
<div class="py-4 mx-auto max-w-screen-xl lg:py-8 ">
<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    @forelse ( $posts as $post )

    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-{{ $post->category->color}}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                        <div>
                            <a href="/posts?category={{$post->category->slug}}" class="text-base text-gray-500 hover:underline">{{$post->category->name}}</a>

                        </div>
                    </span>
                    <span class="text-sm">{{ $post->created_at->diffForHumans()}}</span>
                </div>
                <h2 class="hover:underline mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="/posts/{{$post['slug']}}">{{$post->title}}</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{Str::limit($post->body,100)}}</p>
                <div class="flex justify-between items-center">
                    <a href="/posts?author={{$post->author->username}}">
                    <div class="flex items-center space-x-3">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{$post->author->name}}" />
                        <span class="font-medium text-sm dark:text-white">
                           {{$post->author->name}}
                        </span>
                    </div>
                    </a>
                    <a href="/posts/{{$post->slug}}" class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Read More &raquo;
                    </a>
                </div>
            </article>
            @empty
            <div>
            <p>artikel yang ada cari tidak ada</p>
            <a href="/posts" class="block text-blue-600 hover:underline">&laquo; kembali ke all posts</a>
            @endforelse
            </div>
        </div>
        {{ $posts->links() }}
    </div>

</x-layout>


