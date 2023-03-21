<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffsController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '1') {
                $staffs = User::query()->where('usertype', '0')->paginate(10);

                return view('admin.staffs.index', compact('staffs'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function archive()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '1') {
                $staffs = User::onlyTrashed()->paginate(10);
                // dd($staffs);
                return view('admin.staffs.archive', compact('staffs'));
            } else {
                return abort(404, "page not found");
            }
        } else {
            return redirect()->back();
        }
    }

    public function destroy(User $staffs, $id)
    {
        $staffs = User::withTrashed()->findOrFail($id);
        if (!$staffs->trashed()) {
            $staffs->delete();
        } else {
            $staffs->restore();
            return redirect()->route('users.index');
        }
        return back();
    }
}
