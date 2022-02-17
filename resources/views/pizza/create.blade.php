@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                       <ul class="list-group">
                           <a href="" class="list-group-item list-group-item-action">View</a>
                           <a href="" class="list-group-item list-group-item-action">Create</a>
                       </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pizza') }}</div>
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
                    @endif
                    <form action="{{route('pizza.store')}}" method="POST">@csrf
                    <div class="card-body">

                       <div class="mb-3">
                        <label for="name" class="form-label">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                      </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description of pizza</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label" >Pizza price($)</label>
                            <div class="col-md-4">
                                <input type="number" name="small_pizza_price" class="form-control" placeholder="small pizza price">
                            </div>
                              <div class="col-md-4">
                                <input type="number" name="medium_pizza_price" class="form-control" placeholder="medium pizza price">
                              </div>
                              <div class="col-md-4">
                                <input type="number" name="large_pizza_price" class="form-control" placeholder="large pizza price">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" class="form-select">
                                <option value=""></option>
                                <option value="vegatarian">Vegatarian pizza</option>
                                <option value="nonvegatarian">nonvegatarian pizza</option>
                                <option value="traditional">Traditional</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
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
