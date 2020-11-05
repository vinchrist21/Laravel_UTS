@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Designer</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control"  name="name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control"  name="email"></input>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
