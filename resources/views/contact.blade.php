@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="/save-message" method="post" class="mt-5 mb-5">
                @csrf
                <h1>Please fillup the form</h1>
                <div class="form-group">
                    <label for="exampleInputEmail1">Full name</label>
                    <input type="text" name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="text" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
