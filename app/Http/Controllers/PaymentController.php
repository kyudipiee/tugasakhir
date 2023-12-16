<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentstudents()
    {
        return view('front.paymentstudents');
    }

    // request untuk menampung kriiman data dari client
    public function checkout(Request $request)
    {
        $request->request->add(['total_price' => 150000, 'status' => 'unpaid']);
        $payment = Payment::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
                'gross_amount' => $payment->total_price,
            ),
            'customer_details' => array(
                'nama' => $request->nama,
                'telp_student' => $request->telp_student,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('front.checkout', compact('snapToken', 'payment'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $payment = Payment::find($request->order_id);
                $payment->update(['status' => 'Paid']);
            }
        }
    }
}
