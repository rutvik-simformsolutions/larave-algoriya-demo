<?php

namespace App\Http\Controllers;

use App\Events\DepartmentCreated;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class DepartmentController extends Controller
{
    /**
     * list the all department in datatable.
     *
     * @return datatable/view if success return datatable or redirect to dashboard in case of error
     */
    function list(Request $request) {
        try {

            if ($request->ajax()) {
                $data = Department::select('*')->where('status', '!=', '2')->with('devby');

                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('createdby', function ($data) {
                        return $data->Devby->name;
                    })
                    ->editColumn('status', function ($row) {
                        if ($row['isedit'] == '1') {
                            if ($row['status'] == '0') {
                                return '<a  href="' . url('department_status', ['id' => $row->id, 'status' => $row['status']]) . '"><span class=" badge badge-danger">Inactive</span></a>';
                            } else {
                                return '<a  href="' . url('department_status', ['id' => $row->id, 'status' => $row['status']]) . '"><span class=" badge badge-success">Active</span></a>';
                            }
                        } else {
                            return '<span class="badge badge-success">Active</span>';
                        }
                    })
                    ->addColumn('action', function ($row) {
                        if ($row['isedit'] == '1') {
                            $btn = '
                            <a class="btn btn-tbl-delete  delete" data-departmentid="' . $row->id . '">
                            <i class="fa fa-trash"></i></a>';
                        } else {
                            $btn = 'Non Editable';
                        }

                        return $btn;
                    })
                    ->rawColumns(['status', 'action'])
                    ->make(true);
            }
            return view('admin.department.list');
        } catch (\Throwable $th) {
            return redirect('dashboard')->with('error', $th->getMessage());
        }
    }

    /**
     * Delete an Depart.
     *
     * @return void
     */
    public function destroy(Request $request)
    {
        try {
            $res = Department::where('id', $request->id)->delete();
            if (!$res) {
                throw new Exception("Departemt Can't be deleted");
            } else {
                return '1';
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * change the status of department.
     *
     * @param int $id
     * @param int $status
     *
     * @return redirect redirect to department
     */
    public function department_status($id, $status)
    {
        try {
            $status = ($status == '0') ? '1' : '0';
            $obj = Department::find($id);
            $obj->status = $status;
            $objs = $obj->save();
            if ($objs) {
                return redirect('department')->with('success', 'Status Updated Successfully');
            } else {
                return redirect('department')->with('error', 'Something Went Wrong');
            }
        } catch (\Throwable $th) {
            return redirect('department')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * display the add departmet form.
     *
     * @return view redirect to add department view
     */
    public function create()
    {
        try {
            return view('admin.department.add');
        } catch (\Throwable $th) {
            return redirect('department')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ($request);
        request()->validate(['departmentname' => 'required|max:50|min:1']);

        $departmentname = Department::where('departmentname', $request->input('departmentname'))->where('status', '!=', '2')->count();

        if ($departmentname >= '1') {
//            request()->validate([
//                'departmentname' => 'unique:department,departmentname',
//            ], ['departmentname.unique' => 'The department name has been taken already']);
        }
        try {
            $department = new Department();
            $department['departmentname'] = $request->input('departmentname');
            $department['status'] = $request->input('status');
            $department['isedit'] = '1';
            $department['createdby'] = Auth::user()->id;
            $dep = $department->save();
            if ($dep) {
                event(new DepartmentCreated($department));
                return redirect('department')->with('success', 'Inserted Successfully');
            } else {
                return redirect('department')->with('error', 'Something Went Wrong');
            }
        } catch (\Throwable $th) {
            return redirect('department')->with('error', $th->getMessage());
        }
    }
}
