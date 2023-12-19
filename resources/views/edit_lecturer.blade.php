@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Update Data Dosen</div>

                            <div class="card-body">
                                <form action="{{ route('update_lecturer', $lecturer) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group m-3">
                                        <label>Name Dosen</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $lecturer->name }}">
                                    </div>
                                    <div class="form-group m-3">
                                        <label>Inisial</label>
                                        <input type="text" name="initial" class="form-control"
                                            value="{{ $lecturer->initial }}">
                                    </div>
                                    <div class="form-group m-3">
                                        <label>NIK Dosen</label>
                                        <input type="number" name="nik" class="form-control"
                                            value="{{ $lecturer->nik }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>Status</label>
                                        <input type="text" name="status" class="form-control"
                                            value="{{ $lecturer->status }}" disabled>
                                    </div>
                                    <div style="text-align: center">
                                        <button type="submit" class="btn button-23 m-2">Submit data</button>
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
