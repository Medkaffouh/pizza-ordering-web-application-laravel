@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                @if(count($errors)>0)
                <div class="card mt-5">
                    <div class="card-body">

                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>

                    </div>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Edit Pizza') }}</div>

                    <form action="{{route('pizza.update',$pizza->id)}}" method="POST" enctype="multipart/form-data">@csrf
                    @method('PUT')
                        <div class="card-body">

                       <div class="mb-3">
                        <label for="name" class="form-label">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza" value="{{$pizza->name}}">
                      </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description of pizza</label>
                            <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" >Pizza price($)</label>
                            <div class="col-md-4">
                                <input type="text" name="small_pizza_price" class="form-control" placeholder="small pizza price" value="{{$pizza->small_pizza_price}}">
                            </div>
                              <div class="col-md-4">
                                <input type="text" name="medium_pizza_price" class="form-control" placeholder="medium pizza price" value="{{$pizza->medium_pizza_price}}">
                              </div>
                              <div class="col-md-4">
                                <input type="text" name="large_pizza_price" class="form-control" placeholder="large pizza price" value="{{$pizza->large_pizza_price}}">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" class="form-select">
                                <option value="{{$pizza->category}} " selected disabled>{{$pizza->category}} </option>
                                <option value="vegatarian">Vegatarian pizza</option>
                                <option value="nonvegatarian">nonvegatarian pizza</option>
                                <option value="traditional">Traditional</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{Storage::url($pizza->image)}}" width="80">
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
