@extends('backend.layout.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card">
        <h5 class="card-header">
            Products
            <a href="{{route('product.create')}}" class="btn btn-success float-right">Add Product</a>
        </h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Company</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index=>$product)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->company}}</td>
                        <td>{{$product->category}}</td>
                        <!-- <td>{{$product->description}}</td> -->
                        <td>@php echo substr($product->description, 0, 10) @endphp ...</td>
                        <td>@php echo substr($product->image, 0, 10) @endphp ...</td>

                        <td>{{$product->slug}}</td>

                        <td>
                            <a href="{{route('product.edit', ['product'=> $product->id])}}"><i
                                    class="fa fa-edit"></i></a>
                            <a href="#" class="delete" id="{{$product->id}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection