@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            

                
                    <form method="POST" enctype="multipart/form-data" action="/p">
                        @csrf
                        <div class="form-group row"><div class="col-md-6 offset-4"><h1>Add New Post</h1></div></div>

                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="name" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
                            <div class="col-md-6">
                                @error('image')
                               
                                    <strong>{{ $message }}</strong>
                                
                            @enderror
                            <input type="file" name="image" class="form-control-file" id="image"/>
                            </div>
                        </div>
                        <div class="row md-6 offset-4 pt-2"><button class="btn btn-primary">Add New Post</button></div>
                    </form>
                
            
        </div>
    </div>
</div>
@endsection
