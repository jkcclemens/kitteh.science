@extends('layouts.master')

@section('content')
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-24"></div>
        <div class="pure-u-1 pure-u-md-11-12">
            <div class="content">
                @yield('center-content')
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-1-24"></div>
    </div>
    @yield('js')
@endsection
