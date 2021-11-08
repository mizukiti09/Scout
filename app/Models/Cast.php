<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;

    // DBで間違っても変更させたくないカラム(ユーザーID、管理者権限など) にはロックをかけておくことができる
    //ロックの掛け方にはfillableかguardedの二種類がある。
    // どちらしか指定できない。

    protected $fillable = ['cast_name', 'age', 'height', 'weight', 'bust', 'phone_number', 'ng_play', 'area', 'experience', 'face_img1', 'face_img2', 'body_img1', 'body_img2'];
}
