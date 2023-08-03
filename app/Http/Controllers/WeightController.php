<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'weight' => 'required|numeric',
        ]);

        $data = $request->all();
        // dd($request);
        // The weight is valid, store in database...

        // 体重の更新履歴を記録
        // 同日の記録があればアップデート
        // $insert_weight_id = WeightHistory::insertGetId([
            
        // ]);

        // user_health_status.weight を更新

        // return redirect()->route('home');
        return response()->json(['message' => 'Weight successfully stored']);
    }
}
