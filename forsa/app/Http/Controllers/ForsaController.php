<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForsaController extends Controller
{
    
    // view company
public function profilecompny(){
    return view('profilecompny');
}

public function edit_company(){
    return view('edit_company');
}
public function ShowSuper(){
    return view('ShowSuper');
}

public function show_student(){
    return view('show_student');
}
public function Requests(){
    return view('Requests');
}

public function archivescompany(){
    return view('archivescompany');
}


public function addsuper(){
    return view('addsuper');
}

//view supervisor

public function supervisor_profile(){
    return view('supervisor-profile');
}

public function supervisor_edit(){
    return view('supervisor-edit');
}

public function supervisor_tasks(){
    return view('supervisor-tasks');
}


public function supervisor_createTask(){
    return view('supervisor-createTask');
}

public function supervisor_task_detailes(){
    return view('supervisor_task_detailes');
}
public function supervisor_students(){
    return view('supervisor_students');
}


// view admin
public function admin_home(){
    return view('admin_home');
}
public function companyAdmin(){
    return view('companyAdmin');
}
public function aplicantAdmin(){
    return view('aplicantAdmin');
}
public function specialtyAdmin(){
    return view('specialtyAdmin');
}
public function studentAdmin(){
    return view('studentAdmin');
}

// view student

public function Applystudent(){
    return view('Applystudent');
}

public function Studenthome(){
    return view('Studenthome');
}
public function profileStudent(){
    return view('profileStudent');
}

public function Student_edit(){
    return view('Student-edit');
}
public function Applyarchivestudent(){
    return view('Applyarchivestudent');
}

public function tasksarchivestudent(){
    return view('tasksarchivestudent');
}
public function tasksStudent(){
    return view('tasksStudent');
}

// view Forsa
public function index(){
    return view('index');
}

public function login(){
    return view('login');
}

public function register(){
    return view('register');
}

public function sv_login(){
    return view('sv-login');
}



}
