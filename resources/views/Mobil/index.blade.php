@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">

{{--        <div class="jumbotron jumbotron-fluid">--}}
{{--            <div class="container">--}}
{{--                <h1 class="display-4">"Cars are the sculptures of our everyday lives"</h1>--}}
{{--                <p class="lead">Chris Bangle ( American automobile designer )</p>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="d-flex justify-content-center">
            <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow spinner-grow-sm text-warning" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow spinner-grow-sm text-success" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <br>
        </div>


        <h1 class="text-center">~ List Car ~</h1>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/car1.jpg" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                    <img src="/images/car2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/car3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>

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

        <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <blockquote class="blockquote text-center">
                <p class="mb-0">"Cars are the sculptures of our everyday lives"</p>
                <footer class="blockquote-footer">Chris Bangle ( American automobile designer )<cite title="Source Title"></cite></footer>
            </blockquote>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#"> Mobil.test</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->


    </div>
@endsection
