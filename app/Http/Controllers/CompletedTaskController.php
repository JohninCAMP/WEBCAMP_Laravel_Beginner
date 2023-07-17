<?php
// Chapter15 v1.1.0「完了タスク一覧追加」
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task as TaskModel;
use App\Models\CompletedTask as CompletedTaskModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompletedTaskController extends Controller
{
    /**
     * タスク一覧ページ を表示する
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        // 1Page辺りの表示アイテム数を設定
        $per_page = 20;

        // 一覧の取得
        $list = $this->getListBuilder()
                     ->paginate($per_page);
        //
        return view('task.completed_list', ['list' => $list]);
    }

    /**
     * 一覧用の Illuminate\Database\Eloquent\Builder インスタンスの取得
     */
    protected function getListBuilder()
    {
        return CompletedTaskModel::where('user_id', Auth::id())
                     ->orderBy('priority', 'DESC')
                     ->orderBy('period')
                     ->orderBy('created_at');
    }

}