@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if (session('success'))
                            <div
                                class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                                <strong class="font__weight-semibold">Well done! </strong>{{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">Tambah Dosen</div>

                            <div class="card-body">
                                <form action="{{ route('store_lecturer') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group m-3">
                                        <label>Name Dosen</label>
                                        <input type="text" name="name" placeholder="Name" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group m-3">
                                        <label>NIK Dosen</label>
                                        <input type="number" name="nik" placeholder="NIK" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group m-3">
                                        <label>UUID Dosen</label>
                                        <input type="number" name="uuid" placeholder="UUID" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group m-3">
                                        <label>No. Whatsapp</label>
                                        <input type="number" name="hp" placeholder="No. Whatsapp" class="form-control"
                                            required>
                                    </div>
                                    <div style="text-align:center">
                                        <button type="submit" class="btn m-2 button-23">Submit data</button>
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
