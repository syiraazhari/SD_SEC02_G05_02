@extends('layouts.app')

@section('content')
<div class="container">
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
                                <img 
                                    src="{{ asset('assets/uploads/avatar/'.$item->avatar) }}"
                                    alt="Profile Picture" 
                                    style="width: 300px; height: 300px; border-radius: 50%; margin-left:auto; margin-right:auto;">
                                @endforeach
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('User Information') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @foreach ($users as $item)
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name :</label>
                                        <span class="name">{{ $item->name }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Email :</label>
                                        <span class="name">{{ $item->email }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Phone :</label>
                                        <span class="name">{{ $item->phone }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Address 1 :</label>
                                        <span class="name">{{ $item->address1 }}</span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Address 2 :</label>
                                        <span class="name">{{ $item->address2 }}</span>
                                    </div>

                                    
                                @endforeach
                                    
                                </form>
                            </div>

                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('edit-profile') }}" class="btn btn-primary">Edit</a>
                <a href="{{ url('change-password') }}" class="btn btn-danger">Change Pssword</a>
            </div>
        </div>
    </div>
    
</div>
@endsection