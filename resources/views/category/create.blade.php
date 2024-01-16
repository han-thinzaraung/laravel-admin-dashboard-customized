@extends('dashboard.index')
 
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-body align-items-center m-4">

                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                    
                        <div class="col-auto">
                            <label for="inputname" class="col-form-label">Category Name<small class="text-danger">*</small></label>
                            <input type="text" id="inputname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                            @error('name')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>
                    
                        <div class="col-sm mt-3">
                        <a href="{{ route('category.index') }}" class="btn btn-outline-dark">Back</a>
                        <button type="submit" class="btn btn-outline-primary">Create</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection