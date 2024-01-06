<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            POST新規作成
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="card max-w-2xl mx-auto mt-10 text-gray-800 dark:text-white">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div>
                <label for="title" class="label-text">Title</label>
                <input type="text" name="title" id="title" required class="input input-bordered w-full">
            </div>

            <div class="mt-5">
                <label for="body" class="label-text">Body</label>
                <textarea name="body" id="body" required class="textarea textarea-bordered w-full"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
</x-app-layout>
