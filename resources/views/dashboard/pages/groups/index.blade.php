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
                            <p>المجاميع ( {{ $section->name }} )</p>
                        </div>
                        <div class="card-body p-0">
                            <div class="table4 p-25 mb-30">
                                <a href="{{ route('dashboard.groups.create', $section->id) }}"
                                    class="btn btn-primary my-2">اضافة مجموعة</a>
                                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr class="userDatatable-header">

                                                    <th>
                                                        <span class="userDatatable-title">الاسم</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">الحالة</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">السعر</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">عدد الطلاب</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">الدخل</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">وقت الانشاء</span>
                                                    </th>

                                                    <th class="actions">
                                                        <span class="userDatatable-title">الاجراءات</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($groups as $group)
                                                    <tr class="userDatatable-item" id="pr_{{ $group->id }}">
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="userDatatable-inline-title">
                                                                    <a href="#" class="text-dark fw-500">
                                                                        <h6>{{ $group->name }}</h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content d-inline-block">
                                                                @if ($group->active == 1)
                                                                    <span
                                                                        class="bg-opacity-success  color-success userDatatable-content-status active">مفعل
                                                                    </span>
                                                                @else
                                                                    <span
                                                                        class="bg-opacity-danger  color-danger userDatatable-content-status">غير
                                                                        مفعل
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content--subject">
                                                                {{ $group->price }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content--subject">
                                                                200
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content--subject">
                                                                {{ $group->price * 200 }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="userDatatable-content--subject">
                                                                {{ $group->created_at }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <ul
                                                                class="orderDatatable_actions mb-0 d-flex justify-content-start flex-wrap">
                                                                <li>
                                                                    <a href="{{ route('dashboard.groups.edit', $group->id) }}"
                                                                        class="edit" title="تعديل">
                                                                        <i class="uil uil-edit"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="delete" title="حذف"
                                                                        onclick="confirmDelete({{ $group->id }})">
                                                                        <i class="uil uil-trash-alt"></i>
                                                                    </a>

                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">لا يوجد بيانات</td>
                                                    </tr>
                                                @endforelse

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
    {{-- Delete Modal --}}
    <div class="modal modal-info-confirmed fade" id="modal-info-confirmed" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-info-body d-flex">
                        <div class="modal-info-icon warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="svg replaced-svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <div class="modal-info-text">
                            <h6>هل تريد حذف هذه المجموعة؟</h6>
                            <p>سيتم حذف البيانات بشكل دائم.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-outlined btn-sm" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="performDelete()">حذف</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let groupIdToDelete = null;

        function confirmDelete(id) {
            groupIdToDelete = id; // Store the group ID to delete
            $('#modal-info-confirmed').modal('show'); // Show the modal
        }

        function performDelete() {
            if (groupIdToDelete !== null) {
                $.ajax({
                    url: "{{ route('dashboard.groups.destroy', '') }}/" + groupIdToDelete,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $('#pr_' + groupIdToDelete).fadeOut(500, function() {
                                $(this).remove();
                            });
                            $('#modal-info-confirmed').modal('hide'); // Hide the modal
                        } else {
                            alert(response.message); // Show error message if needed
                        }
                        groupIdToDelete = null; // Reset the variable
                    },
                    error: function(xhr, status, error) {
                        console.error('Request failed with status:', status);
                        alert('An error occurred while trying to delete the section.');
                        groupIdToDelete = null; // Reset the variable
                    }
                });
            }
        }
    </script>
@endsection
