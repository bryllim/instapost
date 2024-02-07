@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Create Post -->
    <h3 class="text-center my-3 fw-bold">Edit Profile</h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-5">
                <form action="{{ route('updateprofile') }}" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input name="name" id="name" type="text" class="form-control mb-4" value="{{ Auth::user()->name }}" required>
                    <label for="email">Email:</label>
                    <input name="email" id="email" type="text" class="form-control" value="{{ Auth::user()->email }}" required>
                    <button class="btn btn-dark mt-3">Update Profile</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection