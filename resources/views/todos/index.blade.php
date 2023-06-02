<x-layout>
    <div class="p-4 pb-0">
        <x-card>
            <h1 class="text-4xl text-center">Todos</h1>
        </x-card>
    </div>

    <div class="grid grid-cols-1 gap-2 p-4">
        <x-card>
            <table class="table-auto w-full">
                <thead>
                    <tr class="">
                        <th class="border-b p-1 text-left">ID</th>
                        <th class="border-b p-1 text-left">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <td class="border-b p-1 text-gray-700">{{ $loop->index + 1 }}</td>
                        <td class="border-b p-1 text-gray-700">{{ $todo }}</td>
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