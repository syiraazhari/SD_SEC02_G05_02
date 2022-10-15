{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}
 <x-base-layout>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Reset Password</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Reset Password</li>
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
                        <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 profile1" style="min-height: 300px;">
                            <div class="thinborder-ontop">
                                <h3>RESET PASSWORD</h3>
                                
                                <x-jet-validation-errors class="mb-4" />
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                        
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label text-md-right">Email Address:</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{$request->email}}" required="" autofocus="">
                                    </div>
                        
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required="">
                                        </div>
                                    </div>
                        
                                    <div class="form-group row">
                                        <label for="password_confirmation"
                                            class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required="">
                                        </div>
                                    </div>
                        
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary" >Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>                                
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 profile1">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="section-twitter">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </section>
</x-base-layout>