@extends('pages.layout')

@section('title', '產品 ｜日何百鐵')

@section('inner-css')
    <style>
        .item-header {
            border-bottom: 1px solid #ddd;
            margin: 0 0 15px 0;
        }
    </style>
@endsection

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <div class="list-group">
                @foreach($categories as $key => $val)
                    <a href="#" class="list-group-item">{{ $val->name  }}</a>
                @endforeach
            </div>

            <div class="list-group">
                @foreach($series as $key => $val)
                    <a href="#" class="list-group-item">{{ $val->name  }}</a>
                @endforeach
            </div>
        </div>

        <div class="col-sm-9">
            @foreach($categories as $key => $val)
                <div class="item-header">
                    <h3>{{ $val->name }}</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                </div>
            @endforeach

            @foreach($series as $key => $val)
                <div class="item-header">
                    <h3>{{ $val->name }}</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection