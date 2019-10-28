@extends('layouts.admin')

@section('title') New Product @endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            New Product
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-info">{{Session::get('success')}}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('adminNewProduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-file" class="form-control-label">Thumbnail</label>
                                            <input id="normal-file" name="thumbnail" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Title</label>
                                            <input id="normal-input" name="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="textarea">Description</label>
                                            <textarea id="textarea" name="description" class="form-control" rows="6" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input-price" class="form-control-label">Price</label>
                                            <input id="normal-input-price" name="price" class="form-control" placeholder="10.00">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Create product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection