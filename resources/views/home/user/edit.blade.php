@extends('layout.master')
@section('tittle.User')
@section('content')
<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Tambah Edit User</h3>
                        <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                        <form action="/user/{{$user->id}}/update" method="post">
                            @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id=""
                                value="{{$user->name}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                name="email"
                                id=""
                                value="{{$user->email}}"
                                aria-describedby="helpId"
                                placeholder=""
                            />
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection