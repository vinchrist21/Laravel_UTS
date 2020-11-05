@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">

{{--        <div class="jumbotron jumbotron-fluid">--}}
{{--            <div class="container">--}}
{{--                <h1 class="display-4">"Car designers are just going to have to come up with an automobile that outlasts the payments."</h1>--}}
{{--                <p class="lead">Erma Bombeck ( American Humorist )</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <h1 class="text-center">~ List Designer ~</h1>

        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Add</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="@auth{{route('user.edit', $user)}}@endauth">{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach($user-> mobils as $mobil)
                               <li>{{$mobil->name}}</li>
                            @endforeach
                        </td>
                        @auth
                            <td>
                                <form action="{{route('user.destroy',$user)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <blockquote class="blockquote text-center">
            <p class="mb-0">"Car designers are just going to have to come up with an automobile that outlasts the payments."</p>
            <footer class="blockquote-footer">Erma Bombeck ( American Humorist )<cite title="Source Title"></cite></footer>
        </blockquote>
    </div>
@endsection
