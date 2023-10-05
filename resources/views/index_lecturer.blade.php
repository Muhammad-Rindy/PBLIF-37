@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div
            class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show indent-alert">
            <i class="start-icon far fa-check-circle faa-tada animated"></i>
            <strong class="font__weight-semibold">Well done! </strong>{{ session('success') }}
        </div>
    @endif
    <div class="container-box">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="h4">Daftar Dosen</h4>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align:center">
                                    Nama Dosen</th>
                                <th style="text-align:center">
                                    NIK</th>
                                <th style="text-align:center">
                                    UUID</th>
                                <th style="text-align:center">
                                    No Whatsapp</th>
                                @if (Auth::user()->is_admin)
                                    <th style="text-align:center">
                                        Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lecturers as $lecturer)
                                <tr>
                                    <td style="vertical-align: middle">{{ $lecturer->name }}</td>
                                    <td style="vertical-align: middle">{{ $lecturer->nik }}</td>
                                    <td style="vertical-align: middle">{{ $lecturer->uuid }}</td>
                                    <td style="vertical-align: middle">{{ $lecturer->hp }}</td>
                                    @if (Auth::user()->is_admin)
                                        <td>
                                            <div style="display: flex;">
                                                <div>
                                                    <form action="{{ route('edit_lecturer', $lecturer) }}" method="get">
                                                        <button type="submit" class="btn btn-primary m-1">Edit</button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="{{ route('delete_lecturer', $lecturer) }}" method="post">
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
