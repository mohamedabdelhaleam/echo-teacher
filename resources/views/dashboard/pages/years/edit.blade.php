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
                            <h6>تعديل بيانات الصف الدراسي</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                {{-- @include('message.message') --}}
                                <form action="{{ route('dashboard.sections.update', ['section' => $section->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-basic row">
                                        <div class="col-md-6 mb-25">
                                            <label>اسم الصف</label>
                                            <input type="text" class="form-control form-control-lg" name="name"
                                                value="{{ $section->name }}" required>
                                            @if ($errors->has('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <label>حالة الصف</label>
                                            <select name="active" id="" class="form-control form-control-lg">
                                                <option value="1" @selected($section->active == 1)>مفعل</option>
                                                <option value="0" @selected($section->active == 0)>غير مفعل</option>
                                            </select>
                                            @if ($errors->has('active'))
                                                <p class="text-danger">{{ $errors->first('active') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-lg btn-primary btn-submit">تعديل بيانات
                                                الصف</button>
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
