<x-layout>
    <div class="flex justify-center items-center my-48">
        <div class="bg-white p-4 rounded-xl w-72">
            
            <form class="flex flex-col gap-2" action="/login" method="post">
                @csrf
                <h1 class="text-3xl text-center font-light">Log In</h1>
                <input class="w-full border rounded-md p-1" type="email" name="email" id="emailInput" placeholder="Email">
                <input class="w-full border rounded-md p-1" type="password" name="password" id="passwordInput" placeholder="Password">
                <input class="bg-blue-500 hover:bg-blue-600 text-white rounded-md p-1" type="submit" value="Log In">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <span class="text-red-600">{{ $error }}</span>
                    @endforeach
                @endif
                
            </form>
            </div>
        </div>
    </div>
    

</x-layout>