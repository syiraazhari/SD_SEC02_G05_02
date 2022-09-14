@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
        <h1>Service Page</h1>
        <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($service as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src = "{{ asset('assets/uploads/service/'.$item->image) }}" class="service-image" alt="Image here">
                        </td>
                        <td>
                        <a href="{{ url('edit-serv/'.$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection