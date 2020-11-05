@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Tipe Mobil</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('mobil.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control"  name="name">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control"  name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Create Date:</label>
                        <input type="date" class="form-control"  name="create_date">
                    </div>

                    <div class="form-group">
                        <label>Designed By:</label>
                        <select     name="created_by" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name.' ('. $user->email.')'}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Price:</label>
                        <input type="text" class="form-control"  name="price">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
