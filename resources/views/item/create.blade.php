@extends('dashboard.index')
 
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-body align-items-center m-4">
                    <h3 class="text-dark mb-3"> Create Item </h3>

                    <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="col-auto">
                            <label  class="col-form-label">Item Name<small class="text-danger">*</small></label>
                            <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                            @error('name')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label class="col-form-label">Price<small class="text-danger">*</small></label>
                            <input type="number"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">

                            @error('price')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>
                        
                        <div class="col-auto">
                            <label for="category_id">Select Category:</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>
                        
                        <div class="col-auto">
                            <label class="col-form-label">Expired Date<small class="text-danger">*</small></label>
                            <input type="date"  class="form-control @error('expired_date') is-invalid @enderror" name="expired_date" value="{{ old('expired_date') }}">

                            @error('expired_date')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label class="col-form-label">Upload Image<small class="text-danger">*</small></label>
                            <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">

                            @error('image')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-sm mt-3">
                        <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
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