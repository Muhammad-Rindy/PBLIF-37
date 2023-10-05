@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container-box-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Update Ruangan</div>

                            <div class="card-body">
                                <form action="{{ route('update_room', $room) }}" method="post" enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group m-3">
                                        <label>Nama Ruangan</label>
                                        <input type="text" name="room" placeholder="Ruangan" class="form-control"
                                            value="{{ $room->room }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>Alamat Gedung</label>
                                        <input type="text" name="edifice" placeholder="Gedung" class="form-control"
                                            value="{{ $room->edifice }}">
                                    </div>

                                    <div class="form-group m-3">
                                        <label>Lantai Gedung</label>
                                        <input type="number" name="level" placeholder="Lantai" class="form-control"
                                            value="{{ $room->level }}">
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
