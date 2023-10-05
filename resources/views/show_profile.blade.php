@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Profile') }}</div>

                            <div class="card-body">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                @endif

                                <form action="{{ route('edit_profile') }}" method="post">
                                    @csrf
                                    <div class="form-group m-3">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Name" class="form-control"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group m-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                    </div>
                                    <div class="form-group m-3">
                                        <label>Role</label>
                                        <input type="role" class="form-control"
                                            value="{{ $user->is_admin ? 'Administrator' : 'Mahasiswa/I' }}" disabled>
                                    </div>
                                    <div class="form-group m-3">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group m-3">
                                        <label>Confirm password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                    <div style="text-align: center">
                                        <button type="submit" class="btn button-23 m-2">Change Profile Details</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
