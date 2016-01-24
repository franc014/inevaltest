<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    private $studentRoleId;

    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        $this->studentRoleId = Role::whereName('Student')->first()->id;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('all-student-info')) {
            return User::where('role_id', $this->studentRoleId)->where('id', Auth::user()->id)->get()->toJson();
        } else {
            return User::where('role_id', $this->studentRoleId)->get()->toJson();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\StoreStudentRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        if (Gate::denies('store-student')) {
            abort(403);
        }
        $data = $request->all();
        $data['password'] = bcrypt($request->get('idn'));
        $data['role_id'] = $this->studentRoleId;

        $student = new User;
        $student->create($data);

        return $student->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::findOrFail($id);
        $data = ['student' => $student];
        return view('show_student')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreStudentRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudentRequest $request, $id)
    {
        if (Gate::denies('edit-student')) {
            abort(403);
        }
        $student = User::findOrFail($id);
        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('remove-student')) {
            abort(403);
        }
        User::destroy($id);
    }
}
