@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if (session('success'))
                            <div id="live"
                                class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                                <strong class="font__weight-semibold">Well done! </strong>{{ session('success') }}
                            </div>
                        @elseif($errors->any())
                            @foreach ($errors->all() as $error)
                                <div id="live">
                                    <div class="danger-alert">
                                        <i class="far fa-times-circle shine-alert"></i>
                                        &nbsp; &nbsp;
                                        <span>Wrong! {{ $error }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="card">
                            <div class="card-header">Tambah Data Dosen Politeknik Negeri Batam</div>

                            <div class="card-body">
                                <form action="{{ route('store_lecturer') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group m-3">
                                        <label>Nama Dosen</label>
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
                                        <label>Status</label>
                                        <input type="text" name="status" placeholder="Tidak Hadir" class="form-control"
                                            value="0" readonly>
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
