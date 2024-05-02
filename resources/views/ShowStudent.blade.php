@extends('Master')

@section('content')

<h1 style="text-align: center;">Show Students</h1>

<div class="container">
<table class="table table-bordered table-hover table-success">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </thead>
    @foreach ($students as $new)
        
    <tr>
        <td>{{ $new->name }}</td>
        <td>{{ $new->email }}</td>
        <td>{{ $new->password }}</td>
    </tr>

    @endforeach
</table>
</div>


@endsection
