@extends('layouts.index')

@section('content')
     <div class="card">
        <div class="card-header">
            <h2 class="card-title">Edit the User</h2>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{ route('user.update',$user->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" name="name">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" name="email">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="col-md-12">
                            <label for="password">Password</label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
            </div>
        </div>
    </div>
@endsection