@extends('admin.template.layout')
@section('main_title', 'Simform')
@section('title', 'Department Add')
@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Enter Department Detail</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('/skill') }}" name="skill_form" id="skill_add" class="form" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Skill Name</label>
                    <input type="text" name="skillname" id="" class="form-control" value="{{ old('skillname') }}"  placeholder="JS,PHP,Jquery,laravel,Mean">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Skill Description</label>
                    <input type="text" name="description" id="" class="form-control" value="{{ old('description') }}"  placeholder="JS,PHP,Jquery,laravel,Mean">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Skill Department</label>
                    <select class="form-control" name='department'>
                        @forelse($department as $dept)
                            <option value="{{ $dept->id }}">{{ $dept->departmentname }}</option>
                        @empty
                            <option value="na"> No Department Found</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control" name='status'>
                        <option value="{{ 0 }}" {{ (old('status') == '0') ? "selected" : ""}} >Active</option>
                        <option value="{{ 1 }}" {{ (old('status') == '1') ? "selected" : ""}} >In Active</option>
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('validation-script')
    <script type="text/javascript" src="{{ asset('theme/custom/js/department.js') }}"></script>
@endpush


