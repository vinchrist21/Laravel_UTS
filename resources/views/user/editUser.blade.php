@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Tipe Mobil</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('user.update', $user)}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" >
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input class="form-control" name="email" value="{{ $user->email }}" disabled></input>
                    </div>
                    <div class="form-group">
                        <label>Macam Mobil</label>
                        <td>
                            @foreach($user-> mobils as $mobil)
                                <li>{{$mobil->name}}</li>
                            @endforeach
                        </td>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
