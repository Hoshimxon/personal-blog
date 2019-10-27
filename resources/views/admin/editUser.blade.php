@extends('layouts.admin');

@section('title') Editing {{$user->name}} @endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Editing {{$user->name}}
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
                        <form action="{{route('adminEditUserPost', $user->id)}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Name</label>
                                            <input id="normal-input" name="name" class="form-control" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Permissions</label>

                                            <input type="checkbox" class="form-control" style="width: 15px" id="author" name="author" value=1 {{$user->author == true ? 'checked' : ''}}>Author
                                            <br>
                                            <br>
                                            <input type="checkbox" class="form-control" style="width: 15px" id="admin" name="admin" value=1 {{$user->admin == true ? 'checked' : ''}}>Admin
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection