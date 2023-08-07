<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserWeightHistory;

class WeightController extends Controller
{
    public function store(Request $req)
    {
        // Validate the request...
        $req->validate([
            'weight' => 'required|numeric',
        ]);

        $data = $req->all();
        $user = Auth::user();

        // The weight is valid, store in database...
        // 体重の更新履歴を記録
        // 同日の記録があればアップデート
        UserWeightHistory::insertGetId([
            "user_id" => $user['id'],
            "user_name" => $user['name'],
            "weight" => $data['weight'],
        ]);

        // user_health_status.weight を更新

        // return redirect()->route('home');
        return response()->json(['message' => 'Weight successfully stored']);
    }
}
