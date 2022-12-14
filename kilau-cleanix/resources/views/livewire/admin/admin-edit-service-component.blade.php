<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Service</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Edit Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Edit Service
                                        </div>
                                        <div class="col-md-6">
                                            <a href ="{{route('admin.all_services')}}" class="btn btn-info pull-right">All Services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="updateService">
                                        @csrf
                                        <div class="form-group">
                                            <div for="name" class="control-label col-sm-3">Service Name:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                                @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Slug:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug"wire:model="slug"/>
                                                @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Tagline:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="tagline"wire:model="tagline"/>
                                                @error('tagline') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Service Category:</div>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="service_category_id">
                                                    <option value="">Select Service Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('service_category_id') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Price:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="price"wire:model="price"/>
                                                @error('price') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Discount:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="discount"wire:model="discount"/>
                                                @error('discount') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Discount Type:</div>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="discount_type">
                                                    <option value="">Select Service Category</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                                @error('discount_type') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="featured" class="control-label col-sm-3">Featured:</div>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="featured">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                                @error('discount_type') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Desciption:</div>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="description"></textarea>
                                                @error('description') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Product Link:</div>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="link"wire:model="link"/>
                                                @error('link') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Inclusion:</div>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="inclusion"></textarea>
                                                @error('inclusion') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="slug" class="control-label col-sm-3">Exclusion:</div>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="exclusion"></textarea>
                                                @error('exclusion') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="image" class="control-label col-sm-3">Thumbnail:</div>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="thumbnail" wire:model="newthumbnail"/>
                                                @error('newthumbnail') <p class="text-danger">{{$message}}</p>@enderror
                                                @if($newthumbnail)
                                                    <img src="{{$newthumbnail->temporaryUrl()}}" width="60"/>
                                                @else
                                                    <img src="{{asset('images/services/thumbnails')}}/{{$thumbnail}}" width="60"/>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div for="image" class="control-label col-sm-3">Image:</div>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="image" wire:model="newimage"/>
                                                @error('newimage') <p class="text-danger">{{$message}}</p>@enderror
                                                @if($newimage)
                                                    <img src="{{$newimage->temporaryUrl()}}" width="60"/>
                                                @else
                                                    <img src="{{asset('images/services')}}/{{$image}}" width="60"/>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Update Service</button>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
