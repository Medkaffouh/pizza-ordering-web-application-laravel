@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">

                        <form action="{{route('frontpage')}}" method="get">
                            <a href="/" class="list-group-item list-group-item-action">Back</a>
                        <input type="submit" value="vegetarian" name="category" class="list-group-item list-group-item-action">
                        <input type="submit" value="nonvegetarian" name="category" class="list-group-item list-group-item-action">
                        <input type="submit" value="traditional" name="category" class="list-group-item list-group-item-action">
                    </form>
                    <h1 class="text-center">{{count($pizzas)}} Pizza</h1>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="row">
                        @forelse ($pizzas as $pizza)
                            <div class="col-md-4 mt-2 text-center" style="border:1px solid #ccc">
                                <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width: 100%;">
                                <p>{{$pizza->name}}</p>
                                <p>{{$pizza->description}}</p>
                                <a href="{{route('pizza.show', $pizza->id)}}">
                                    <button class="btn btn-danger mb-1">Order Now</button>
                                </a>
                            </div>
                        @empty
                            <p>No pizza to show</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
