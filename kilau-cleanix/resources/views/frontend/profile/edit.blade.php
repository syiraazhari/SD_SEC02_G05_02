@extends('layouts.app')

@section('content')
    <div class="container">
    <form enctype="multipart/form-data" action="{{ url('update-profile')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Profile Info
                </div>

                <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        {{ __('Profile Picture') }}
                                    </div>

                                    <div class="card-body">
                                        @foreach ($users as $item)
                                        @if($item->avatar)
                                            <img 
                                                src="{{ asset('assets/uploads/avatar/'.$item->avatar) }}"
                                                alt="Profile Picture" 
                                                style="width: 300px; height: 300px; border-radius: 50%; margin-left:auto; margin-right:auto;">
                                        @endif
                                        @endforeach
                                    </div>
                                    <div class="card-footer">
                                    
                                        <label>Profile Image</label>
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        User Information
                                    </div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif


                                        
                                        @foreach ($users as $item)
                                            <div class="col-md-6 mb-3">
                                                <label for="">Name :</label>
                                                <input type="text" value="{{ $item->name }}" class="form-control" name="name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Email :</label>
                                                <input type="text" value="{{ $item->email }}" class="form-control" name="email">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Phone :</label>
                                                <input type="text" value="{{ $item->phone }}" class="form-control" name="phone">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Address 1 :</label>
                                                <input type="text" value="{{ $item->address1 }}" class="form-control" name="address1">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Address 2 :</label>
                                                <input type="text" value="{{ $item->address2 }}" class="form-control" name="address2">
                                            </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection