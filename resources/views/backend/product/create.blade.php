@extends('backend.layout.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card">
        <div class="card-header">
            Create Product
        </div>
        <div class="card-body">
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter the product title">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" name="company" class="form-control" placeholder="Enter the product company name">

                    @error('company')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category">Select Category</label>

                    <select class="form-control" name="category">
                        <option value="injectable">Injectable</option>
                        <option value="vaccine">Vaccine</option>
                        <option value="powder">Powder</option>
                        <option value="liquid">Liquid</option>
                    </select>

                    @error('category')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" class="form-control" >

                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea placeholder="Enter the product description " name="description" id="" cols="30" rows="10" class="form-control "></textarea>

                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection