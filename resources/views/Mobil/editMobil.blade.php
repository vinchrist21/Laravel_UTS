@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Tipe Mobil</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('mobil.update', $mobil)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $mobil->name }}" >
                    </div>

                    <div class="form-group">
                        <label for="barcode">Description:</label>
                        <textarea type="text" class="form-control"  name="description">{{ $mobil->description }}</textarea>
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
                        <label for="tanggal">Create Date:</label>
                        <input type="date" class="form-control" name="create_date" value="{{ $mobil->create_date }}">
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input class="form-control" name="price" value="{{$mobil->price}}"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
