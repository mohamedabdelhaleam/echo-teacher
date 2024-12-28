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
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            <p>Products</p>

                        </div>
                        <div class="card-body p-0">
                            <div class="table4 p-25 mb-30">
                                <a href="{{ route('dashboard.products.create') }}"
                                    class="btn btn-primary my-2">Add Product</a>
                                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <span class="userDatatable-title">ID</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">User</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Country</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Company</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Position</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Join Date</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Status</span>
                                                    </th>
                                                    <th class="actions">
                                                        <span class="userDatatable-title">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#01</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Kellie Marquot</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            United Street
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Web Developer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#02</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Robert Clinton</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Japan
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Vehicle Master
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Senior Manager
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-warning  color-warning userDatatable-content-status active">deactivated</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#03</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Chris Joe</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            South Africa
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Content writer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            July 30, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-danger  color-danger userDatatable-content-status active">blocked</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#04</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Jack Kalis</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            South Korea
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Smart Collection
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            UX/UI Designer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            June 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#05</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Black Smith</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            United Kingdom
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Print Media
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Graphic Designer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            August 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#06</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Aftab Ahmed</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Bangladesh
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Online Super Shop
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Marketer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 15, 2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#07</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Daniel White</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Australia
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Project Manager
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 20, 2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#08</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Black Smith</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            United Kingdom
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Print Media
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Graphic Designer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            August 20, 2020
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#09</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Aftab Ahmed</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Bangladesh
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Online Super Shop
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Marketer
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 15, 2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#10</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <a href="#" class="text-dark fw-500">
                                                                    <h6>Daniel White</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Australia
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--subject">
                                                            Business Development
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            Project Manager
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content--priority">
                                                            January 20, 2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content d-inline-block">
                                                            <span
                                                                class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="view">
                                                                    <i class="uil uil-setting"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <i class="uil uil-edit"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="remove">
                                                                    <i class="uil uil-trash-alt"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteProduct(id) {
            if (confirm('Do you want to delete this product?')) {
                $.ajax({
                    url: "{{ route('dashboard.products.destroy', '') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(responseData) {
                        $('#pr_' + id).remove();
                    },
                    error: function(xhr, status, error) {
                        console.error('Request failed with status:', status);
                    }
                });
            }
        }
    </script>
@endsection
