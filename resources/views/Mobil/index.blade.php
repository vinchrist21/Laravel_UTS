@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">

{{--        <div class="jumbotron jumbotron-fluid">--}}
{{--            <div class="container">--}}
{{--                <h1 class="display-4">"Cars are the sculptures of our everyday lives"</h1>--}}
{{--                <p class="lead">Chris Bangle ( American automobile designer )</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <h1 class="text-center">~ List Car ~</h1>

        <div class="row">
            @auth
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('mobil.create') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Add</a>
            </div>
            @endauth
        </div>

        <div class="row" style="margin-top: 30px;">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Designed By</th>
                    <th scope="col">Price</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                {{--mobils = kumpulan object yg banyak--}}
                    @foreach($mobils as $mobil)
                        <tr>
                            <td>
                                <a href="@auth{{route('mobil.edit', $mobil)}}@endauth">{{$mobil->name}}</a>
                            </td>
                            <td>{{$mobil->description}}</td>
                            <td>{{$mobil->create_date}}</td>

                            @if(isset($mobil->creator->name))
                                <td>{{$mobil->creator->name}}</td>
                            @else
                                <td>-</td>
                            @endif

                            <td>{{$mobil->price}}</td>
                            <td>{{$mobil->updated_at}}</td>
                            <td>{{$mobil->created_at}}</td>
                            @auth
                            <td>
                                <form action="{{route('mobil.destroy',$mobil)}}" method="post">
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
            <p class="mb-0">"Cars are the sculptures of our everyday lives"</p>
            <footer class="blockquote-footer">Chris Bangle ( American automobile designer )<cite title="Source Title"></cite></footer>
        </blockquote>

    </div>
@endsection
