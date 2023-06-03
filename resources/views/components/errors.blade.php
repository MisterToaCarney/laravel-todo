@if ($errors->any())
    <div class="text-red-600">
        @foreach ($errors->all() as $error)
            <span>{{$error}}</span>
        @endforeach
    </div>
@endif