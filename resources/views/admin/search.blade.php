@extends('admin.template.layout')
@section('main_title', 'Simform')
@section('title', 'algoriya')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Algoriya Search</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Search</label>
                    <select class="form-control select2" id="searchable-feild" name='status'>
                    </select>

                </div>
            </div>
            <!-- /.card-body -->
    </div>
@endsection

@push('validation-script')
    {{-- <script type="text/javascript" src="{{ asset('theme/custom/js/department.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchable-feild').select2({
                ajax: {
                    url: "{{ route('algoriya.search') }}",
                    data: function(data) {
                        var query = {
                            query: data.term,
                            search: data.term,
                        }
                        return query;
                    }
                },
                placeholder: "Search",
                minimumInputLength: 3
            });
        });
    </script>
@endpush
