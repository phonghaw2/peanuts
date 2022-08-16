@extends('layouts.master')
@section('content')
@include('layouts.slide')
    <div class="content-container">
        @include('layouts.search')
        <div class="content">
            <main class="col-md-8">
                <ul>
                    @foreach ($posts as $post)
                        <x-post :post="$post"/>
                    @endforeach

                </ul>
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>

            </main>
            <div id="sub" class="col-md-4">

            </div>
        </div>
    </div>


@endsection
