@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div id="live"
            class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
            <i class="start-icon far fa-check-circle faa-tada animated"></i>
            <strong class="font__weight-semibold">Well done! </strong>{{ session('success') }}
        </div>
    @endif
    <div class="container-box">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="h4">Data Ruangan Politeknik Negeri Batam</h4>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align:center">
                                    Nama Ruangan</th>
                                <th style="text-align:center">
                                    Alamat Gedung</th>
                                <th style="text-align:center">
                                    Lantai Gedung</th>
                                @if (Auth::user()->is_admin)
                                    <th style="text-align:center">
                                        Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td style="vertical-align: middle">{{ $room->room }}</td>
                                    <td style="vertical-align: middle">{{ $room->edifice }}</td>
                                    <td style="vertical-align: middle">{{ $room->level }}</td>
                                    @if (Auth::user()->is_admin)
                                        <td>
                                            <div style="display: flex;">
                                                <div>
                                                    <form action="{{ route('edit_room', $room) }}" method="get">
                                                        <button type="submit" class="btn btn-primary m-1">Edit</button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="{{ route('delete_room', $room) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger m-1">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
