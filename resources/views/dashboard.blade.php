@extends('layouts.app')

@section('content')
    <div class="container-box">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class="h4">
                    Ruangan {{ $rooms->room }} </h4>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-dark table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th style="text-align:center">
                                    No</th>
                                <th style="text-align:center">
                                    NIK</th>
                                <th style="text-align:center">
                                    Inisial</th>
                                <th style="text-align:center">
                                    Nama</th>
                                <th style="text-align:center">
                                    Status</th>
                            </tr>
                        </thead>
                        @foreach ($lecturers as $lecturer)
                            <tbody>
                                <tr>
                                    <td style="text-align:center">{{ $loop->iteration }}</td>
                                    <td style="text-align:center">{{ $lecturer->nik }}</td>
                                    <td style="text-align:center">{{ $lecturer->initial }}</td>
                                    <td style="text-align:center">{{ $lecturer->name }}</td>
                                    <td style="text-align:center"></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
