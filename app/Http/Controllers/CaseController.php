<?php

namespace App\Http\Controllers;

use App\Models\Case_Model;
use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseController extends Controller
{
    public function create($cast_id, Request $request)
    {
        $data = Cast::find($cast_id);

        return view('cases.create', compact('data'));
    }

    public static function callback(Request $request, $cast_id)
    {
        $cast = Cast::find($cast_id);

        // トークンを記載します
        $token = '1By37ZJz1xeGeUJYtGhuP86Hs2CQjbZvgemJCn5gILa';
        // リクエストヘッダを作成します
        $message = <<<EOT
[案件]
名前：$cast[cast_name]
年齢：$cast[age]
身長：$cast[height]
体重：$cast[weight]
バスト：$cast[bust]
電話番号：$cast[phone_number]
NGプレイ：$cast[ng_play]
お住まいのエリア：$cast[area]
現在の在籍店舗：$cast[current]
経験店舗：$cast[experience]

提案店舗：$request[suggestion]
EOT;

        $query = http_build_query([
            'message' => $message,
        ]);
        $header = [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer ' . $token,
            'Content-Length: ' . strlen($query),
        ];
        $ch = curl_init('https://notify-api.line.me/api/notify');
        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => $query,
        ];
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        curl_close($ch);

        $case = new Case_Model();

        $case->suggestion_store = $request['suggestion'];
        $case->decided_flg = 0;
        $case->done_flg = 0;
        $case->user_id = Auth::id();
        $case->cast_id = $cast_id;

        $case->save();

        return redirect('/myPage')->with([
            'flash_msg' => __('Send'),
        ]);
    }
}
