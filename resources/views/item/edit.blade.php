@extends('dashboard.index')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body align-items-center m-4">

                <h3 class="text-dark mb-3"> Edit Item </h3>

                <form action="{{route('item.update' , $item->id)}}" method="post">
                @method('PUT')
                @csrf
               
                <div class="col-auto">
                    <label  class="col-form-label">Item Name<small class="text-danger">*</small></label>
                    <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $item->name }}">

                    @error('name')
                    <div class="text-danger">*{{$message}}</div>
                    @enderror

                </div>

                               
                <div class="col-auto">
                    <label class="col-form-label">Price<small class="text-danger">*</small></label>
                    <input type="text"  class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $item->price}}">

                    @error('price')
                    <div class="text-danger">*{{$message}}</div>
                     @enderror

                </div>
                        
                <div class="col-auto">
                    <label for="category_id">Select Category:</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror disabled">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>

                        @error('category_id')
                            <div class="text-danger">*{{$message}}</div>
                        @enderror
                </div>

                <div class="col-auto">
                    <label class="col-form-label">Expired Date<small class="text-danger">*</small></label>
                    <input type="datetime"  class="form-control @error('expired_date') is-invalid @enderror" name="expired_date" value="{{ $item->expired_date}}">

                        @error('expired_date')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror

                </div>
                   
                 
                <div class="col-sm mt-3">
                <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                <button type="submit" class="btn btn-outline-primary">Update</button>
                
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection