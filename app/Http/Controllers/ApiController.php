<?php
namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Case_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function myPageImgShow(Request $request)
    {
        $cast = Cast::find($request->input('cast_id'));
        return $cast;
    }

    public function myPageChangeDecided(Request $request)
    {
        DB::update('update cases set decided_flg = 1 where id = ?', [$request->input('case_id')]);

        return redirect(route('myPage'));
    }

    public function myPageChangeDone(Request $request)
    {
        DB::update('update cases set done_flg = 1 where id = ?', [$request->input('case_id')]);

        return redirect(route('myPage'));
    }
}
