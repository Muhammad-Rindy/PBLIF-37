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
                <h4 class="h4">Data Dosen Politeknik Negeri Batam</h4>
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
                                    No. Whatsapp</th>
                                @if (Auth::user()->is_admin)
                                    <th style="text-align:center">
                                        Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lecturers as $lecturer)
                                <tr>
                                    <td style="vertical-align: middle; text-align:center">{{ $lecturer->name }}</td>
                                    <td style="vertical-align: middle; text-align:center">{{ $lecturer->nik }}</td>
                                    <td style="vertical-align: middle; text-align:center">{{ $lecturer->uuid }}</td>
                                    <td style="vertical-align: middle; text-align:center">{{ $lecturer->hp }}</td>
                                    @if (Auth::user()->is_admin)
                                        <td style="text-align: center">
                                            <div style="display: flex; justify-content:center;align-items:center">
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
