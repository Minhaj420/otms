<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use PDF;

class AdminEnrollController extends Controller
{
    public function index()
    {
        return view('admin.enroll.index', ['enrolls' => Enroll::orderBy('id', 'desc')->get()]);
    }

    public function detail($id)
    {
        return view('admin.enroll.detail', ['enroll' => Enroll::find($id)]);
    }

    public function download($id)
    {
        $pdf = PDF::loadView('admin.enroll.invoice', ['enroll' => Enroll::find($id)]);
        return $pdf->stream('pdf_file.pdf');
//        return $pdf->download('pdf_file.pdf');


//        return view('admin.enroll.invoice');

    }

    public function editStatus($id)
    {
        return view('admin.enroll.update-status', ['enroll' => Enroll::find($id)]);
    }

    public function updateStatus(Request $request, $id)
    {
        Enroll::updateEnrollStatus($request, $id);
        return redirect('/admin/manage-enroll')->with('message', 'Enroll Status info Updated Successfully.');
    }
    public function delete($id)
    {
        return $id;
    }

}
