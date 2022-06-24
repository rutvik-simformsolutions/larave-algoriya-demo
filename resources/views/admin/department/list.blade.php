@extends('admin.template.layout')
@section('main_title', 'Simform')
@section('title', 'Department')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-info float-right" href="{{ route('department.add') }}"><i class="fas fa-plus"></i>
                        Add Department</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="department_table" class="table  table-hover">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>


        $(document).ready(function() {
            $('#department_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('department') }}",
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                scrollX: false,
                columns: [{
                        data: 'departmentname',
                        name: 'departmentname'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'createdby',
                        name: 'createdby'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            $(document).delegate(".delete", 'click', function() {

                are_u_sure().then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).data('departmentid');
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('department.delete') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: id
                            },
                            success: function(res) {
                                if (res == '1') {
                                    salert('success', 'Department Delted');
                                } else {
                                    salert('error', res);
                                }
                                $("#department_table").DataTable().ajax.reload();
                            }
                        },);
                    }
                });
            });
        });
    </script>
@endpush
