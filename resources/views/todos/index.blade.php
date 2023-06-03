<x-layout>
    <x-heading title="Todos"></x-heading>

    <div class="p-2 pb-0">
        <x-card>
            <form class="flex gap-2" action="/todos" method="post">
                @csrf
                <input class="w-full border rounded-md p-1" type="text" name="name" id="nameInput" value="{{ old('name') }}">
                <input class="bg-blue-500 text-white p-2 rounded-md" type="submit" value="Add">
            </form>
            <x-errors></x-errors>

        </x-card>
    </div>

    <div class="grid grid-cols-1 gap-2 p-2">
        <x-card>
            <table class="w-full table-auto">
                <thead>
                    <tr class="">
                        <th class="border-b p-1 text-left">#</th>
                        <th class="border-b p-1 text-left">ID</th>
                        <th class="border-b p-1 text-left">Message</th>
                        <th class="border-b p-1 text-left">Creator</th>
                        <th class="border-b p-1 text-left w-min"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <td class="border-b p-1 text-gray-700">{{ $loop->index + 1 }}</td>
                        <td class="border-b p-1 text-gray-700">{{ $todo['id'] }}</td>
                        <td class="border-b p-1 text-gray-700">{{ $todo['name'] }}</td>
                        <td class="border-b p-1 text-gray-700">{{ $todo->user->name }}</td>
                        <td class="border-b p-1 text-gray-700 w-min">
                            @can('delete', $todo)
                            <form method="POST" action="{{route('todos.destroy', $todo->id)}}">
                                @csrf
                                @method('DELETE')
                                <input class="underline" type="submit" value="DELETE">
                            </form>
                            @endcan
                            @can('update', $todo)
                            <a class="underline" href="{{ route('todos.edit', $todo) }}">EDIT</a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>
    </div>



    

    


    {{-- <ul class="list-disc">
        @foreach ($var1 as $item)
            <li class="text-xl">{{ $item }}</li>
        @endforeach
    </ul> --}}
</x-layout>