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
                            <h6>أضافة مجموعة</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                {{-- @include('message.message') --}}
                                <form action="{{ route('dashboard.groups.store') }}" method="post">
                                    @csrf
                                    <div class="form-basic row">
                                        <div class="col-md-6 mb-25">
                                            <label>اسم المجموعة</label>
                                            <input type="text" class="form-control form-control-lg" name="name"
                                                required value="{{ old('name') }}">
                                            <input type="hidden" class="form-control form-control-lg" name="section_id"
                                                required value="{{ $sectionId }}">
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <label>سعر المجموعة</label>
                                            <input type="number" class="form-control form-control-lg" name="price"
                                                required value="{{ old('price') }}">

                                            @if ($errors->has('price'))
                                                <p class="text-danger">{{ $errors->first('price') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <label>حالة المجموعة</label>
                                            <select name="active" id="" class="form-control form-control-lg">
                                                <option value="1">مفعل</option>
                                                <option value="0">غير مفعل</option>
                                            </select>
                                            @if ($errors->has('active'))
                                                <p class="text-danger">{{ $errors->first('active') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-0 col-12">
                                            <button type="submit" class="btn btn-lg btn-primary btn-submit">أضافة
                                                مجموعة</button>
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
