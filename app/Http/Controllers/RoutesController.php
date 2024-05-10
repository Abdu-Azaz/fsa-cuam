<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Club;
use App\Models\Department;
use App\Models\Event;
use App\Models\Major;
use App\Models\Programme;
use App\Models\Slide;
use App\Models\Student;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces = Announce::where('status', 'published')->latest()->take(10)->get();

        $sliders = Slide::get();
        $events = Event::orderBy('updated_at', 'DESC')->get();
        return view('index', compact('announces', 'sliders', 'events'));
    }

    public function departements()
    {
        $departements = Department::all();

        return view('departments.departements', compact('departements'));
    }

    public function departmentsHandle($slug)
    {
        $department = Department::where('slug', $slug)->firstOrFail();
        $professors = $department->professors;
        $pageBreadcrumb = 'departments';
        $programs = Major::where('department_id', $department->id)->get()->groupBy('diploma');

        switch ($department->id) {
            case '1':
                $pageBreadcrumb .= '.gisi';
                break;
            case '2':
                $pageBreadcrumb .= '.maths';
                break;
            case '3':
                $pageBreadcrumb .= '.chimie';
                break;
            case '4':
                $pageBreadcrumb .= '.physique';
                break;
            case '5':
                $pageBreadcrumb .= '.sv';
                break;
        }
        return view('departments.single-department', compact('professors', 'pageBreadcrumb', 'department', 'programs'));
    }

    public function licenceinformatique()
    {
        return view('departments.GISI.licenceinformatique');
    }

    public function ContactUsForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        // $input = $request->all();

        return back()->with('success', 'Email envoyé, ip: ' . $request->ip());
    }

    public function storeNode(Request $request)
    {
        return route("administration");
    }

    public function formations()
    {

        $programs = Major::all()->groupBy('diploma');

        return view('departments.formations', compact('programs'));
    }

    public function timetables()
    {
        $timetables = Timetable::all()->groupBy(['major.label', 'semester']);

        return view('timetables', compact('timetables'));
    }

    public function clubs()
    {
        $clubs = Club::all();

        return view('clubs', compact('clubs'));
    }

    public function how_to()
    {
        $howtos = DB::table('howtos')->get();
        return view('how_to', compact('howtos'));
    }

    public function students(Request $request)
    {
        $cne = $request->input("cne");
        $nom = $request->input("nom");
        $prenom = $request->input("prenom");

        $filiere = Student::select('filiere')->where('cne', $cne)->first();
        if ($filiere !=null)
            return response(['ok'=>'you are enrolled in ' . $filiere], 200);
    return response(['err'=>'Sorry ' . $filiere],301);
        
    }
}
