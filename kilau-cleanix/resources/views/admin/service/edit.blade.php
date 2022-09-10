@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit and Update Service</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-service/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $service->name }}" class="form-control" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $service->slug }}" class="form-control" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <div for="">Description</div>
                    <textarea name="description" rows="3" class="form-control">{{ $service->description }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $service->status == "1" ? 'checked':'' }} name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{ $service->popular == "1" ? 'checked':'' }} name="popular">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" value="{{ $service->meta_title }}" class="form-control" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" value="{{ $service->meta_keywords }}" rows = "3" name="meta_keywords">{{ $service->meta_keywords }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea class="form-control" rows = "3" name="meta_descrip">{{ $service->meta_descrip }}</textarea>
                </div>
                @if($service->image)
                    <img src="{{ asset('assets/uploads/service/'.$service->image ) }}" alt="Service Image">
                @endif
                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class = "btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection