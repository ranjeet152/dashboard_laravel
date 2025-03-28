<?php

namespace App\Http\Controllers;
  

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;  
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;


class AuthController extends Controller
{
    // Register
    public function registration(Request $request) {
        if ($request->isMethod("post")) {
            $request->validate([
                "username" => "required|string|max:255",
                "fathername" => "required|string|max:255",
                "mothername" => "required|string|max:255",
                "email" => "required|email|unique:users,email",
                "phone" => "required|unique:users,phone|digits_between:10,15",
                "dob" => "required|date", 
                "password" => "required|min:4|confirmed",
                "image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048"
            ]);
         
    
            try {
                $user = new User();
                $user->username = $request->username;
                $user->fathername = $request->fathername;
                $user->mothername = $request->mothername;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->dob = $request->dob;
    
                // Image Upload
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('profiles', 'public');
                    $user->image = $imagePath;
                }
    
                // Password Hashing
                $user->password = Hash::make($request->password); 
                $user->password_text = $request->password;

                $user->save();
    
              // Redirect to login after registration
            return redirect()->route('login')->with('success', 'Registration successful! Please login.');
        } catch (\Exception $e) {

            Log::error('Registration Error: ' . $e->getMessage());
            return redirect()->route('registration')->with('error', 'Something went wrong. Please contact support.');
        }
    }

    return view("auth.registration");
    }


    

    // Login
    public function login(Request $request) {

        if (Auth::check()) {
            return redirect()->route("dashboard");  
        }

    
        if ($request->isMethod("post")) {

            $request->validate([
                "email" => "required",
                "password" => "required",
            ], [
                "email.required" => "Email or Username is required.",
                "password.required" => "Password is required."
            ]);
            $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? "email" : "username";

            $user = User::where('email', $request->email)
            ->orWhere('username',  $request->email)
            ->get()->first();
           
          
            if (!$user) {
                return back()->with("error", "User not found.");
            }
    
            // Check Password Hash
            if (!Hash::check($request->password, $user->password)) {

                return back()->with("error", "Incorrect password.");
            }
          
    
    
            // Attempt Login
            if (Auth::attempt([$fieldType => $request->email, "password" => $request->password])) {
                return redirect()->route("dashboard")->with("success", "Login successful!");
            } else {
                return back()->with("error", "Login failed. Please try again.");
            }
        }
        

    
        return view("auth.login");
    }

    // Dashboard
    public function dashboard() {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first.');  
        }

        $user = Auth::user();  
        return view("dashboard", compact('user')); 
    }

    public function jsvectormap() {
        $user = Auth::user();  
        return view("maps.jsvectormap", compact('user'));  
    }

    public function googlemap(){
        $user = Auth::user();  
        return view("maps.googlemap", compact('user'));
    }
 
    public function form() {
        $user = Auth::user();  
        return view("forms.form", compact('user'));  
    }

    public function avatarc() {
        $user = Auth::user();  
        return view("components.avatarc", compact('user'));  
    }
    public function buttons() {
        $user = Auth::user();  
        return view("components.buttons", compact('user'));  
    }
    public function gridsystem() {
        $user = Auth::user();  
        return view("components.gridsystem", compact('user'));  
    }
    public function panels() {
        $user = Auth::user();  
        return view("components.panels", compact('user'));  
    }
    public function notifications() {
        $user = Auth::user();  
        return view("components.notifications", compact('user'));  
    }
    public function sweetalert() {
        $user = Auth::user();  
        return view("components.sweetalert", compact('user'));  
    }
    public function font_awesome_icons() {
        $user = Auth::user();   
        return view("components.font-awesome-icons", compact('user'));  
    }
    public function simple_line_icon() {
        $user = Auth::user();   
        return view("components.simple-line-icon", compact('user'));  
    }
    public function typography() {
        $user = Auth::user();   
        return view("components.typography", compact('user'));  
    }


    // View Profile
    public function view_profile() {
        $user = Auth::user();   
        return view("profile.view_profile", compact('user'));  
    }

    // View Profile Settings..
    public function updateImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = Auth::user();
 
        if ($user->image) {
            Storage::delete('public/' . $user->image);
        }
 
        $path = $request->file('image')->store('profiles', 'public');
        $user->image = $path;
        $user->save();

        return response()->json([
            'success' => true,
            'image_url' => asset('storage/' . $path)
        ]);
    }

    // Edit Action
// ✅ Profile View
public function profile()
{
    $user = auth()->user();
    return view('profile.view_profile', compact('user'));
}

//  Profile Edit Form
public function edit()
{
    $user = auth()->user();
    return view('profile.edit', compact('user'));
}

// Profile Update
public function update(Request $request)
{
    $user = auth()->user();

    $user->update([
        'username' => $request->username,
        'fathername' => $request->fathername,
        'mothername' => $request->mothername,
        'phone' => $request->phone,
        'dob' => $request->dob,
    ]); 
    
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('profiles', 'public');
        $user->update(['image' => $path]);
    }

    return redirect()->route('profile.view')->with('success', 'Profile Updated Successfully');
}

    // Quick Action
    public function calender() {
        $user = Auth::user();   
        return view("Quick_Actions.calender", compact('user'));  
    }

    public function maps() {
        $user = Auth::user();   
        return view("Quick_Actions.maps", compact('user'));  
    }

    public function report() {
        $user = Auth::user();   
        return view("Quick_Actions.report", compact('user'));  
    }

    public function email() {
        $user = Auth::user();   
        return view("Quick_Actions.email", compact('user'));  
    }

    public function invoice() {
        $user = Auth::user();   
        return view("Quick_Actions.invoice", compact('user'));  
    }


    // Sidebar_layout
    public function sidebar() {
        $user = Auth::user();  
        return view("sidebar.sidebar", compact('user'));  
    }

    // tables
    public function tables() {
        $user = Auth::user();  
        $users = User::all();
        return view("tables.tables", compact('user', 'users'));  
    }  
    public function datatablesForm() {
        $user = Auth::user();  
        $userProfiles = UserProfile::all();   
        
        return view("tables.datatables-form", compact('user', 'userProfiles'));  
    }
    

    // Basic Form
    // Register Function
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_profiles,email',
            'password' => 'required|string|min:8',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'dob' => 'required|date',
            'phone' => 'required|string',
            'college' => 'required|string',
            'village' => 'required|string',
            'hobbies' => 'required|string',
            'district' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

    }
    
    // Logout
    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    // Delete user and reset IDs
    public function deleteUser($id) {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Unauthorized access.');
        }

        try {
            User::where('id', $id)->delete();

            // Reset IDs of remaining users
            $users = User::orderBy('id')->get();
            foreach ($users as $index => $user) {
                $user->id = $index + 1;
                $user->save();
            }

            DB::statement('ALTER TABLE users AUTO_INCREMENT = ' . (User::max('id') + 1));

            return redirect()->route('dashboard')->with('success', 'User deleted successfully and IDs reset.');
        } catch (\Exception $e) {
            Log::error('User Deletion Error: ' . $e->getMessage());
            return redirect()->route('dashboard')->with('error', 'Something went wrong while deleting user.');
        }
    }

    public function submitform(Request $request){
         

        $imageName = "";
        
        $user = UserProfile::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'college'=>$request->college,
            'village'=>$request->village,
            'hobbies'=>$request->hobbies,
            'district'=>$request->district,
        ]);

    
        return redirect()->route('dashboard')->with('success', 'Form Successfully Submitted!');
    }

    // conter dashboard

    public function index()
    {
        $totalUsers = User::count();  // Users की Total संख्या निकाले
        
        return view('dashboard', compact('totalUsers')); // View में भेजें
    }
}   