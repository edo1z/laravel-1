<x-guest-layout>
    <div class="p-10">
        <div class="text-4xl">
            welcome!
        </div>

        <div class="mt-10">
            <a href="{{ route('login') }}">Login</a><br />
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
</x-guest-layout>
