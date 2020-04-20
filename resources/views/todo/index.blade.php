<!-- {{ $users }} -->

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

@foreach ($users as $user)
    <p>
        {{ $user->id . '.' . $user->name}}
        <!-- <a href="employee/{{$user->id}}">Delete</a> -->

        <form method="POST" action="/employee/{{ $user->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
@endforeach


<form method="POST" action="/employee">
    {{ csrf_field() }}
    <input type="text" name='name' placeholder="請輸入東西">
    <input type="submit">
</form>