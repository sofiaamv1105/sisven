<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PayMode;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payModes = DB::table('pay_mode')->get();
        return json_encode(['pay_modes' => $payModes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payMode = new PayMode();
        $payMode->name = $request->name;
        $payMode->observation = $request->observation;
        $payMode->save();

        return json_encode(['pay_mode' => $payMode]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $payMode = PayMode::find($id);
        return json_encode(['pay_mode' => $payMode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $payMode = PayMode::find($id);
        $payMode->name = $request->name;
        $payMode->observation = $request->observation;
        $payMode->save();

        return json_encode(['pay_mode' => $payMode]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payMode = PayMode::find($id);
        $payMode->delete();

        $payModes = DB::table('pay_mode')->get();
        return json_encode(['pay_modes' => $payModes, 'success' => true]);
    }
}
