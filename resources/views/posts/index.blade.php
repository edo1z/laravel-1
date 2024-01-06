<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            My Page Title
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="text-gray-800 dark:text-white" style="padding: 10px;">
        @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
        @endforeach
    </div>
</x-app-layout>
