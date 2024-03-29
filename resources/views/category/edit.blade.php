@extends('dashboard.index')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body align-items-center m-4">

                <h3 class="text-dark mb-3"> Edit Category </h3>
                
                <form action="{{route('category.update' , $category->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="align-items-center m-4">

                   
                    <div class="col-auto">
                        <label for="inputname" class="col-form-label">Category Name<small class="text-danger">*</small></label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name}}">
                        @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror
                    </div>
                   
                 
   
                 
                    <div class="col-sm mt-3">
                    <a href="{{ route('category.index') }}" class="btn btn-outline-dark">Back</a>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
