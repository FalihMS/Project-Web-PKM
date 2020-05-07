<?php

namespace App\Http\Controllers;

use App\lecturer;
use App\pkm;
use App\Role;
use App\session;
use App\Term;
use App\upload;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Storage;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function export(){
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $pkms = pkm::orderBy('class','desc')->get();
        $columns = array('No', 'Title', 'Class', 'Lecturer');

        $callback = function() use ($pkms, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            $i = 1;
            foreach($pkms as $pkm) {
                fputcsv($file, array($i++, $pkm->title, $pkm->class, $pkm->lecturer->name));
            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
    }
    public function showLecturer()
    {
        $lecturers = lecturer::all();
        return view('admin.lecturer')
            ->with('lecturers', $lecturers);
    }

    public function showSession()
    {
        $terms = term::where('status', 'active')->orderBy('id', 'desc')->get();
        $sessions = session::all();
        return view('admin.session')
            ->with('sessions', $sessions)
            ->with('terms', $terms);
    }

    public function showTerm()
    {
        $term = term::orderBy('id', 'desc')->get();
        return view('admin.term')
            ->with('term', $term);
    }

    public function showAll()
    {
        $pkms = pkm::orderBy('class','desc')->get();
        return view('admin.view_all')
            ->with('pkms', $pkms);
    }

    public function showAllAdmin(){
        $users = DB::table('users')
            ->join('role_user','role_user.user_id', '=' , 'users.id')
            ->where('role_id','=','2')
            ->get();
        return view('admin.add_admin')
            ->with('users', $users);
    }

    public function download($id)
    {
        $upload = Upload::where('idPkm',$id)->first();
        $pathToFile = $upload['file'];
        return response()->download($pathToFile);
    }
}
