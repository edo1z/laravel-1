<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Post Create
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="text-gray-800 dark:text-white" style="padding: 10px;">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="body">Body:</label>
            <textarea name="body" id="body" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</x-app-layout>
