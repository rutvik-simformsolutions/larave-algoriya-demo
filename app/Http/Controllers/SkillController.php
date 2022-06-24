<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {

            if ($request->ajax()) {
                $data = $skill = Skill::with('user','department')->get();
//                dd($data);
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('createdby', function ($data) {
                        return $data->user->name;
                    })
                    ->editColumn('department', function ($data) {
                        return $data->department->departmentname;
                    })
                    ->editColumn('status', function ($row) {
                        if ($row['isedit'] == '1') {
                            if ($row['status'] == '0') {
                                return '<a  href="' . url('skill_status', ['id' => $row->id, 'status' => $row['status']]) . '"><span class=" badge badge-danger">Inactive</span></a>';
                            } else {
                                return '<a  href="' . url('skill_status', ['id' => $row->id, 'status' => $row['status']]) . '"><span class=" badge badge-success">Active</span></a>';
                            }
                        } else {
                            return '<span class="badge badge-success">Active</span>';
                        }
                    })
                    ->addColumn('action', function ($row) {
                        if ($row['isedit'] == '1') {
                            $btn = '
                            <a class="btn btn-tbl-delete  delete" data-skillid="' . $row->id . '">
                            <i class="fa fa-trash"></i></a>';
                        } else {
                            $btn = 'Non Editable';
                        }

                        return $btn;
                    })
                    ->rawColumns(['status', 'action'])
                    ->make(true);
            }

            return view('admin.skill.list');
        } catch (\Throwable $th) {
            return redirect('dashboard')->with('error', $th->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $department = Department::all();
//            dd($department);
            return view('admin.skill.add',['department'=>$department]);
        } catch (\Throwable $th) {
            return redirect('department')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(['skillname' => 'required|max:50|min:1']);

        $skillname = Skill::where('skillname', $request->input('skillname'))->where('status', '!=', '2')->count();

        if ($skillname >= '1') {
//            request()->validate([
//                'skillname' => 'unique:skill,skillname',
//            ], ['skillname.unique' => 'The skill name has been taken already']);
        }
        try {
            $skill = new Skill();
            $skill['skillname'] = $request->input('skillname');
            $skill['departmentid'] = $request->input('department');
            $skill['description'] = $request->input('description');
            $skill['status'] = $request->input('status');
            $skill['createdby'] = Auth::user()->id;
            $dep = $skill->save();
            if ($dep) {
                return redirect('skill')->with('success', 'Inserted Successfully');
            } else {
                return redirect('skill')->with('error', 'Something Went Wrong');
            }
        } catch (\Throwable $th) {
            return redirect('skill')->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
