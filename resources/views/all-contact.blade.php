@extends('layout.main')edit-contact

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $shakil)
            <tr>
                <td></td>
                <td>{{ $shakil->full_name }}</td>
                <td>{{ $shakil->email }}</td>
                <td>{{ $shakil->subject }}</td>
                <td>{{ $shakil->message }}</td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{ url('edit-contact', ['id'=>$shakil->id]) }}" class="btn btn-success">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
