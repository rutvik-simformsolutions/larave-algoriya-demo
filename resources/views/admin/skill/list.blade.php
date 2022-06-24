@extends('admin.template.layout')
@section('main_title', 'Simform')
@section('title', 'Department')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-info float-right" href="{{ url('skill/create') }}"><i class="fas fa-plus"></i>
                        Add Skill</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="skill_table" class="table  table-hover">
                        <thead>
                            <tr>
                                <th>Skill Name</th>
                                <th>Description</th>
                                <th>Department</th>
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
            $('#skill_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('skill') }}",
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                scrollX: false,
                columns: [{
                    data: 'skillname',
                    name: 'skillname'
                },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'department',
                        name: 'department'
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
        });
    </script>
@endpush
