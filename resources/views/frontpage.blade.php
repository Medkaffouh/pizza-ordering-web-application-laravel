@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">category 1</a>
                        <a href="" class="list-group-item list-group-item-action">category 2</a>
                        <a href="" class="list-group-item list-group-item-action">category 3</a>
                        <a href="" class="list-group-item list-group-item-action">category 4</a>
                        <a href="" class="list-group-item list-group-item-action">category 5</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p>name</p>
                            <p>description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
