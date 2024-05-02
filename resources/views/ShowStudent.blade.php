@extends('Master')

@section('content')

<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </thead>
    @foreach ($students as $new)
        
    <tr>
        <td>$new->name</td>
        <td>$new->email</td>
        <td>$new->password</td>
    </tr>

    @endforeach
</table>






@endsection