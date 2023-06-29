@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="mb-0">Semua Data Pelanggan</h4>
            <a href="{{route('customers.create')}}" class="btn btn-primary px-3">Tambah Pelanggan Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Email Pelanggan</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat Rumah</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $item)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                 <a href="{{route('customers.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                 <form action="{{route('customers.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('kamu yakin ?')">Hapus</button>
                                 </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
