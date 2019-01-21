@extends('layouts.app')
@section('content')
<div>
    @include('layouts.partials._header')
    <div class="app-body">
        @include('layouts.partials._leftSideNav')
        <main class="main-content">
            <div class="container-fluid">
                <div class="row">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa ducimus, explicabo, fugiat ipsa ipsam obcaecati optio possimus, quae quaerat qui quis rem tenetur. Distinctio nesciunt provident sunt tenetur vel.
                </div>
            </div>
        </main>
        @include('layouts.partials._rightSideNav')
    </div>
    @include('layouts.partials._footer')
    @include('layouts.partials._script')

<!-- Placed js at the end of the page so the pages load faster -->
   </div>
@endsection
