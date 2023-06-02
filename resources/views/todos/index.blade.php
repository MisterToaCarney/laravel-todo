<x-layout>
    <div class="p-2 pb-0">
        <x-card>
            <h1 class="text-4xl text-center">Todos</h1>
        </x-card>
    </div>

    <div class="p-2 pb-0">
        <x-card>
            <form class="flex gap-2" action="/todos" method="post">
                @csrf
                <input class="w-full border rounded-md p-1" type="text" name="name" id="nameInput" value="{{ old('name') }}">
                <input class="bg-blue-500 text-white p-2 rounded-md" type="submit" value="Add">
            </form>
            @if ($errors->any())
                <div class="text-red-600">
                    @foreach ($errors->all() as $error)
                        <span>{{$error}}</span>
                    @endforeach
                </div>
            @endif
            
        </x-card>
    </div>

    <div class="grid grid-cols-1 gap-2 p-2">
        <x-card>
            <table class="table-auto w-full">
                <thead>
                    <tr class="">
                        <th class="border-b p-1 text-left">#</th>
                        <th class="border-b p-1 text-left">ID</th>
                        <th class="border-b p-1 text-left">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <td class="border-b p-1 text-gray-700">{{ $loop->index + 1 }}</td>
                        <td class="border-b p-1">{{ $todo['id'] }}</td>
                        <td class="border-b p-1 text-gray-700">{{ $todo['name'] }}</td>
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