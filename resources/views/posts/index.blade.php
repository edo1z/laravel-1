<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Posts
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="text-gray-800 dark:text-white p-5">
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-10">新規作成</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
