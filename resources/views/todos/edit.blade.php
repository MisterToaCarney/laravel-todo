<x-layout>
    <x-heading title="Edit Todo"></x-heading>
    

    <div class="grid grid-cols-1 gap-2 p-2">
        <x-card>
            <form class="flex gap-2" action="{{ route('todos.update', $todo) }}" method="post">
                @csrf
                @method('PUT')
                <input class="border p-2 rounded-md w-full" type="text" name="name" id="textInput" value="{{$errors->any() ? old('name') : $todo->name}}">
                <input type="submit" value="Update" class="bg-blue-500 text-white p-2 rounded-md">
            </form>
            <x-errors></x-errors>
        </x-card>
    </div>
</x-layout>