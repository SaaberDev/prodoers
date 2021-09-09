<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\AssignOrderRequest;
use App\Models\AssignOrder;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class AssignOrderController extends Controller
{
    private $_className;

    public function __construct()
    {
        $this->_className = getClassName($this);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AssignOrderRequest $request
     * @param int $id
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(AssignOrderRequest $request, $id)
    {
//        dd($id);
        DB::beginTransaction();
        try {
            $order = Order::findOrFail($id);
            $order->assignOrders()
                ->updateOrCreate(
                ['order_id' => $order->id],
                [
                    'user_id' => $request->input('assignOrder'),
                    'status' => AssignOrder::PENDING
                ]
            );
            DB::commit();
            return back()->with([
                    'alert-type' => 'success_toast',
                    'message' => $this->_className . ' Updated Successfully!',
                ]);
        } catch (\Exception $exception) {
            DB::rollBack();
            report($exception->getMessage());
            return back()->with([
                'alert-type' => 'warning_toast',
                'message' => 'Oops, Something went wrong!',
            ]);
        }
    }
}
