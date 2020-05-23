@extends('layout.main')

@section('content')

    <div class="row">
        @foreach($school_classes as $class)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        {{ $class->title  }}
                    </div>

                    <div class="card-body">
                        @foreach($class->students as $student)
                            {{ $student->full_name }} <br>
                        @endforeach
                    </div>
                </div>
            </div>

        @endforeach
    </div>


@endsection
