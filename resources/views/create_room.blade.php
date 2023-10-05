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
                        @endif
                        <div class="card">
                            <div class="card-header">Tambah Data Ruangan Politeknik Negeri Batam</div>

                            <div class="card-body">
                                <form action="{{ route('store_room') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group m-3">
                                        <label>Name Ruangan</label>
                                        <input type="text" name="room" placeholder="Ruangan" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group m-3">
                                        <label>Alamat Gedung</label>
                                        <input type="text" name="edifice" placeholder="Gedung" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group m-3">
                                        <label>Lantai Gedung</label>
                                        <input type="number" name="level" placeholder="Lantai" class="form-control"
                                            required>
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
