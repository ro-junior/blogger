<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    @if ($blogs->count() > 0)
                        <section class="grid grid-cols-1 lg:grid-cols-4 gap-5 ">
                            @foreach ($blogs as $blog)
                                <a href="{{ route('blog.index', ['user' => $blog->user_id, 'path' => $blog->path]) }}"
                                    class="rounded-lg overflow-hidden border bg-white hover:scale-[1.05] transition duration-300 ease-in-out">
                                    <section class="w-full">
                                        <img class="object-cover" src="{{ Storage::url('/templates/bg-blog.jpg') }}"
                                            alt="">
                                    </section>
                                    <section class="p-2 my-4">
                                        <h1 class="text-2xl font-semibold">{{ $blog->title }}</h1>
                                        <p class="text-sm text-gray-500">Postado em:
                                            {{ $blog->created_at->format('d/m/Y') }}</p>
                                    </section>
                                </a>
                            @endforeach
                        </section>
                    @else
                        <section class="h-96 flex items-center flex-col space-y-4">
                            <span class="material-symbols-outlined text-8xl">dangerous</span>
                            <h1 class="text-3xl w-full font-semibold text-center">Nenhum blog encontrado..</h1>
                        </section>
                    @endif
                </div>
            </div>

            {{-- <section class="fixed right-5 bottom-10">
                <section class="hover:scale-[1.1] transition duration-300 ease-in-out">
                    <a href="{{ route('blog.create') }}" class="border p-4 bg-gray-700 text-white font-semibold rounded-xl">Criar blog</a>
                </section>
            </section> --}}

        </div>
    </div>
</x-app-layout>
