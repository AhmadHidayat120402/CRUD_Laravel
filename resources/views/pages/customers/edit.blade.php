@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="mb-0">Edit Data {{$item->name}}</h4>
            <a href="{{ route('customers.index') }}" class="btn btn-light px-3">batal dan kembali</a>
        </div>

        <form action="{{ route('customers.update', $item->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ahmad Hidayat" required value="{{$item->name}}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="ahmadhidayat@gmail.com" required value="{{$item->email}}">
            </div>
            <div class="mb-3">
                <label for="phone_number">Nomor Telepon</label>
                <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="085434432123" required value="{{$item->phone_number}}">
            </div>
            <div class="mb-3">
                <label for="address">Alamat</label>
               <textarea name="address" id="address" cols="30" rows="3" required placeholder="Jl Kh.fathullah Sebaung Gending Probolinggo" class="form-control">{{$item->address}}</textarea>
            </div>
            <button class="btn btn-warning px-3" type="submit">Update Data</button>
        </form>
    </div>
@endsection
