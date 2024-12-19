<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Report;

class AdminController extends Controller
{
    //
    public function show(Request $request)
    {
        if(session()->has('admin_login')) {
            $userCount = User::count();
            $unlistedListingCount = Listing::withoutGlobalScopes()->where('status', 0)->count();
            $totalListingCount = Listing::withoutGlobalScopes()->count();
            $reportCount = Report::count();

            return view('admin.dashboard', ['userCount' => $userCount, 'unlistedListingCount' => $unlistedListingCount, 'totalListingCount' => $totalListingCount, 'reportCount' => $reportCount]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function login(Request $request)
    {

        if(session()->has('admin_login')) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function loginPost(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = AdminUser::where('username', $username)->first();

        if($user) {
            if(password_verify($password, $user->password)) {
                session()->put('admin_login', true);
                session()->put('admin_id', $user->id);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->withErrors(['msg' => 'Invalid username or password']);
            }
        } else {
            return redirect()->route('admin.login')->withErrors(['msg' => 'Invalid username or password']);
        }
    }

    public function listings(Request $request)
    {
        if(session()->has('admin_login')) {
            // get listings where status is 0 and paginate them
            $listings = Listing::withoutGlobalScopes()->where('status', 0)->paginate(10);

            return view('admin.listings', ['listings' => $listings]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function reports(Request $request)
    {
        if(session()->has('admin_login')) {
            // get all reports and paginate them
            $reports = Report::paginate(10);

            return view('admin.reports', ['reports' => $reports]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function reportPreview(Request $request, $id)
    {
        if(session()->has('admin_login')) {
            $report = Report::find($id);

            return view('admin.report-preview', ['report' => $report]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function reportDelete(Request $request)
    {
        if(session()->has('admin_login')) {
            $reportId = $request->input('id');
            $report = Report::find($reportId);
            $report->delete();

            return response()->json(['success' => 'Report deleted']);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function listingPreview(Request $request, $id)
    {
        if(session()->has('admin_login')) {
            $listing = Listing::withoutGlobalScopes()->find($id);

            return view('admin.listing-preview', ['listing' => $listing]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function listingAction(Request $request, $id, $action)
    {
        if(session()->has('admin_login')) {
            $listing = Listing::withoutGlobalScopes()->find($id);

            if($action == 'approve') {
                $listing->status = 1;
                $listing->save();
            } else if($action == 'deny') {
                $listing->status = 2;
                $listing->save();
            }
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function users(Request $request)
    {
        if(session()->has('admin_login')) {
            $users = User::paginate(10);

            return view('admin.users', ['users' => $users]);
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function userPreview(Request $request, $id)
    {
        if(session()->has('admin_login')) {
            $user = User::find($id);

            return view('admin.user-preview', ['user' => $user]);
        } else {
            return redirect()->route('admin.login');
        }
    }
}
