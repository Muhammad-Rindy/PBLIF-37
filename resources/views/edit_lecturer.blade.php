@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Update Dosen</div>

                            <div class="card-body">
                                <form action="{{ route('update_lecturer', $lecturer) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group m-3">
                                        <label>Name Dosen</label>
                                        <input type="text" name="name" placeholder="Name" class="form-control"
                                            value="{{ $lecturer->name }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>NIK Dosen</label>
                                        <input type="number" name="nik" placeholder="NIK" class="form-control"
                                            value="{{ $lecturer->nik }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>UUID Dosen</label>
                                        <input type="number" name="uuid" placeholder="UUID" class="form-control"
                                            value="{{ $lecturer->uuid }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>No. Whatsapp</label>
                                        <input type="number" name="hp" placeholder="No. Whatsapp" class="form-control"
                                            value="{{ $lecturer->hp }}">
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
