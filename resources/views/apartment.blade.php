@extends('layouts.master')
@section('content')
    @include('layouts.search')
    <div class="content-container">
        <div class="soft-by"></div>
        <div class="content">
            <div class="col-md-8">
                <main class="row col-md-12">
                    @foreach ($posts as $post)
                        <x-apartment :post="$post"/>
                    @endforeach


                </main>
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>

            <div id="sub" class="col-md-4">

            </div>
        </div>
    </div>


@endsection
