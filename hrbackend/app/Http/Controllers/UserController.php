<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\File;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    //
    public function landing(){
        return view("welcome");
    }

    public function login(){
        return view("login");
    }

    public function authenticate(Request $request){
        $auth = DB::table('users')->where('email', $request->email)->where('password', $request->password)->get();

        if(!$auth->isEmpty()){
            $name = '';
            foreach($auth as $user)
            {
                $name = $user->name;
            }

            $applicant = DB::table('applicant')->where('full_name', $name)->get();
            $hr = DB::table('hr')->where('username', $name)->get();

            if(!$applicant->isEmpty()){
                $usertype = '';
                $name = '';
                foreach($applicant as $user)
                {
                    $usertype = $user->usertype;
                    $name = $user->full_name;
                }

                return redirect('/home')->with('usertype', $usertype)->with('name', $name);
            }
            elseif(!$hr->isEmpty()){
                $usertype = '';
                $name = '';
                foreach($hr as $user)
                {
                    $usertype = $user->usertype;
                    $name = $user->username;
                }

                return redirect('/home')->with('usertype', $usertype)->with('name', $name);
            }
            else{
                $error = "Invalid Username or Password";
                return redirect('/login')->with('error', [$error]);
            }
        }
    }

    public function signup(){
        return view('signup');
    }

    public function register(Request $request){
        
        $request->validate([
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:8',
            'full_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:100',
            'phone_number' => 'required|regex:/^\+92\d{10}$/',
            'address' => 'required|max:500',
            'major' => 'required|max:100',
            'cgpa' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'faculty' => 'required|max:200',
            'preferred_job_type' => 'required|max:150',
            'linkedin_profile' => 'nullable|url|max:200', // Nullable in case the applicant doesn't have a LinkedIn profile
            'portfolio' => 'nullable|url|max:300', // Nullable in case the applicant doesn't have a portfolio
            'resume' => 'required|file|mimes:pdf|max:2048',
        ]);

        DB::table('users')->insert([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->full_name,
        ]);

        if ($request->hasFile('resume') && $request->file('resume')->isValid()) {
            $file = $request->file('resume');

            // Ensure the "resumes" directory exists in the "public" disk
            if (!Storage::disk('public')->exists('resumes')) {
                Storage::disk('public')->makeDirectory('resumes');
            }

            // Store the uploaded file in the 'resumes' directory of the 'public' disk
            $path = Storage::disk('public')->put('resumes', $file);
            
            DB::table('applicant')->insert([
                'email' => $request->email,
                'password' => $request->password,
                'full_name' => $request->full_name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'major' => $request->major,
                'cgpa' => $request->cgpa,
                'faculty' => $request->faculty,
                'preferred_job_type' => $request->preferred_job_type,
                'resume_path' => $path,
                'linkedin_profile' => $request->linkedin_profile,
                'portfolio' => $request->portfolio,
                'usertype' => 'applicant',
            ]);

            return redirect("/")->with('success', 'Signup Successful');
        }
        else{
            echo ($request->hasFile('resume'));
        }
    }

    public function home(Request $request){
        if($request->isMethod('get')){
            $usertype = request('usertype');
            $name = request('name');

            $jobs = DB::table('jobs')->get();

            $jobs_processed = [];
                
            foreach ($jobs as $key => $value) {
                // Create a dictionary and add it to the array
                $jobs_processed = [
                    $key => $value,
                ];
            }

            return view('home', ['usertype' => $usertype, 'name' => $name, 'jobs' => $jobs_processed]);
        }
        elseif($request->isMethod('post')){
            echo("I CAME IN POST!");
            echo(request('name'));
            $currentDate = Carbon::now();
            $user = DB::table('hr')->where('username', request('name'))->get();
            if(!$user->isEmpty()){
                $faculty = '';
                foreach($user as $users)
                {
                    $faculty = $users->faculty;
                }
                
                echo($request->name.'/'.$request->p_langs.'/');
                DB::table('jobs')->insert([
                    'name' => $request->title,
                    'programming_languages' => $request->p_langs,
                    'skills' => $request->skills,
                    'experience' => $request->exp,
                    'created_at' => $currentDate,
                    'open_until' => $request->open_till,
                    'total_applicants' => 0,
                    'description' => $request->desc,
                    'faculty' => $faculty,
                ]);

                $jobs = DB::table('jobs')->get();

                $jobs_processed = [];
                
                foreach ($jobs as $key => $value) {
                    // Create a dictionary and add it to the array
                    $jobs_processed = [
                        $key => $value,
                    ];
                }

                return view('home', ['usertype' => $request->usertype, 'name' => request('name'), 'jobs' => $jobs_processed]);
            }
        }
    }

    public function view_job_details(){
        $usertype = request('usertype');
        $name = request('name');
        $title = request('title');

        $job = DB::table('jobs')->where('name', $title)->get();

        return view('vd', ['usertype' => $usertype, 'name' => $name, 'title' => $title, 'job' => $job[0]]);
    }
}
