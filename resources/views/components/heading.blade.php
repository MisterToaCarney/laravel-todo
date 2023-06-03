<div class="p-2 pb-0">
    <x-card>
        <h1 class="text-4xl text-center">{{ $title }}</h1>
        <div class="flex justify-between">
            <span>{{ auth()->user()->name . " - " . auth()->user()->email }}</span>
            <a class="border underline rounded-md p-1" href="{{ route('auth.logout') }}">Log Out</a>
        </div>
    </x-card>
</div>