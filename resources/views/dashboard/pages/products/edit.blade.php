@extends('dashboard.layouts.app')
@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <div class="breadcrumb-action justify-content-center flex-wrap">

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Edit Product </h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                {{-- @include('message.message') --}}
                                <form action="{{ route('dashboard.products.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-basic row">
                                        <div class="col-md-4 mb-25">
                                            <label>Name</label>
                                            <input type="text" class="form-control form-control-lg" name="name"
                                                value="{{ $product->name }}" required>
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-4 mb-25">
                                            <label>price</label>
                                            <input type="number" class="form-control form-control-lg" name="price"
                                                value="{{ $product->price }}">
                                            @if ($errors->has('price'))
                                                <p class="text-danger">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-4 mb-25">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control form-control-lg" name="quantity"
                                                value="{{ $product->quantity }}">
                                            @if ($errors->has('quantity'))
                                                <p class="text-danger">{{ $errors->first('quantity') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-4 mb-25">
                                            <label>Rate</label>
                                            <input type="number" class="form-control form-control-lg" name="rate"
                                                value="{{ $product->rate }}">
                                            @if ($errors->has('rate'))
                                                <p class="text-danger">{{ $errors->first('rate') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control form-control-lg" id="" required>{{ $product->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <p class="text-danger">{{ $errors->first('description') }}</p>
                                            @endif
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <div class="dm-tag-wrap">
                                                    <label for="exampleFormControlSelect1"
                                                        class="il-gray fs-14 fw-500 align-center mb-10">
                                                        Thumbnail
                                                    </label>
                                                    <div class="dm-tag-wrap">
                                                        <div class="dm-upload">
                                                            <div class="dm-upload-avatar">
                                                                <img class="avatrSrc" src="{{ $product->image }}" alt="Avatar Upload">

                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="image"
                                                                    class="upload-avatar-input">
                                                            </div>
                                                        </div>
                                                        @error('image')
                                                            <div class="invalid-feedback d-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <button type="submit"
                                                class="btn btn-lg btn-primary btn-submit">Change Product Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
