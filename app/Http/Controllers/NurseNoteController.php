<?php

namespace App\Http\Controllers;

use App\Actions\Records\NurseNote\StoreNurseNote;
use App\Actions\Records\NurseNote\UpdateNurseNote;
use App\Models\NurseNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class NurseNoteController extends Controller
{
    public function __construct(
        private StoreNurseNote $storeNurseNote,
        private UpdateNurseNote $updateNurseNote,
    ) {
    }

    public function index()
    {
        $nurseNote = NurseNote::all()->paginate(10);
        return view('user.records.nurseNote.index', compact('nurseNote'));
    }


    public function create()
    {
        return view('user.records.nurseNote.create');
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $add = $this->storeNurseNote->handle($request);
            // dd($add);
            DB::commit();
            return redirect()->route('nurseNote.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function show(NurseNote $nurseNote)
    {
        return view('user.records.nurseNote.show', compact('nurseNote'));
    }


    public function edit(NurseNote $nurseNote)
    {
        return view('user.records.nurseNote.edit', compact('nurseNote'));
    }


    public function update(Request $request, NurseNote $nurseNote)
    {
        try {
            DB::beginTransaction();
            $update = $this->updateNurseNote->handle($request, $nurseNote);
            // dd($update);
            DB::commit();
            return redirect()->route('nurseNote.index');
        } catch (\Exception $err) {
            DB::rollBack();
            dd($err);
            return redirect()->back()->withErrors($err->getMessage());
        }
    }


    public function destroy(NurseNote $nurseNote)
    {
        //
    }
}
