<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Posts
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="text-gray-800 dark:text-white p-5">
        <table class="table-auto">
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
