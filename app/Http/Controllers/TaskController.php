<?php
declare(strict_types=1); // 「型を厳格にする」ための設定 int型であること
namespace App\Http\Controllers;
//名前空間の指定
// オートローディング（オートロード）によりrequire_once()が自動で呼び出され
// 別のファイルに保存されているPHPスクリプトを取り込まれる
// require_once(ファイル名)の記載はいらない

use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * タスク一覧ページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('task.list');
    }

}