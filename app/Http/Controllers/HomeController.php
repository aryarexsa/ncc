<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Xendit\Configuration;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\InvoiceApi;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function maintenance()
    {
        return view('error.pagenotfound');
    }

    public function admin()
    {
        $user = User::where('usertype', 'user')->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        return view('admin.index', compact('user', 'product', 'order'));
    }

    public function home()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.index', compact('count'));
    }

    public function subs(Request $request)
    {
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;

        $newsletter->save();

        toastr()->success('Berhasil subscribe, silahkan konfirmasi email anda');
        return redirect()->back();
    }

    public function dashboard()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.index', compact('count'));
    }

    public function about()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.about', compact('count'));
    }

    public function services()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.service', compact('count'));
    }

    public function services_design()
    {
        return view('home.design');
    }

    public function services_webdev()
    {
        return view('home.webdev');
    }

    public function products()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.product', compact('count'));
    }

    public function products_gpt()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        $gpt = Product::where('category', 'gpt')->get();
        return view('home.product.ai', compact('gpt', 'count'));
    }

    public function products_spotify()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        $spotify = Product::where('category', 'spotify')->get();
        return view('home.product.spotify', compact('count', 'spotify'));
    }

    public function products_zoom()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        $zoom = Product::where('category', 'zoom')->get();
        return view('home.product.zoom', compact('count', 'zoom'));
    }

    public function products_gpt_details($id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        $product_details = Product::find($id);
        return view('home.product.details', compact('product_details', 'count'));
    }

    public function contact() {}

    public function add_cart(Request $request, $id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();

        toastr()->success('Berhasil menambahkan item ke keranjang');
        return redirect()->route('mycart');
    }

    public function mycart()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;
            $count = Cart::where('user_id', $user_id)->count();

            $data_cart = Cart::where('user_id', $user_id)->get();
        }

        return view('home.mycart', compact('count', 'data_cart'));
    }

    public function myorders()
    {
        $user_id = Auth::user()->id;
        $data = Order::where('user_id', $user_id)->get();
        $count_cart = Cart::where('user_id', $user_id)->get()->count();
        return view('home.myorders', compact('data', 'count_cart'));
    }

    public function delete_cart($product_id)
    {
        $cart_wants_to_delete = Cart::where('user_id', Auth::user()->id)->where('product_id', '=', $product_id)->first();
        if ($cart_wants_to_delete) {
            $cart_wants_to_delete->delete();
            toastr()->success('Berhasil menghapus product ');
        } else {
            toastr()->error('Produk tidak ditemukan di keranjang ');
        }

        return redirect()->back();
    }

    public function confirm_order_gpt($id)
    {
        $product = Product::find($id);
        DB::table('carts')->where('product_id', '=', $id)->delete();

        $order_id = 'ORDER-' . uniqid();  // Simpan order_id sebagai variabel

        $data = new Order;
        $data->order_id = $order_id;  // Tambahkan ini
        $data->name = Auth::user()->name;
        $data->rec_address = Auth::user()->email;
        $data->phone = Auth::user()->no_hp;
        $data->user_id = Auth::user()->id;
        $data->product_id = $id;
        $data->payment_status = 'pending';

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = true;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,  // Gunakan variabel ini
                'gross_amount' => $product->price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->no_hp,
            ),
            "callbacks" => array(
                "finish" => "https://wa.me/6283135900521"
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $data->snap = $snapToken;
        $data->save();

        return redirect()->route('checkout', ['id' => $data->id]);
    }

    public function checkout($id)
    {
        $count = Cart::where('user_id', Auth::user()->id)->count();

        $order = Order::findOrFail($id);
        $product_details = Product::findOrFail($order->product_id);

        $order_id = $order->order_id;

        return view('home.checkout', compact('order', 'product_details', 'count', 'order_id'));
    }





    /*public function confirm_order($id)
    {
        $user_id = Auth::user()->id;
        $product = Product::find($id);
        $uuid = (string) Str::uuid();
        $cart_wants_to_delete = Cart::where('user_id', $user_id)->where('product_id', $product->id);


        $apiInstance = new InvoiceApi();
        $createInvoiceRequest = new CreateInvoiceRequest([
            'external_id' => $uuid,
            'description' => $product->description,
            'amount' => $product->price,
            'currency' => 'IDR',
            'payer_email' => Auth::user()->email,
            'customer' => array(
                'given_names' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
            'success_redirect_url' => 'https://www.digiexpert.co.id',
            'failure_redirect_url' => 'https://www.digiexpert.co.id',
        ]);

        try {
            $result = $apiInstance->createInvoice($createInvoiceRequest);

            $order = new Order;
            $order->name = Auth::user()->name;
            $order->rec_address = Auth::user()->email;
            $order->phone = "None";
            $order->user_id = $user_id;
            $order->product_id = $id;
            $order->payment_status = 'pending';
            $order->checkout_link = $result['invoice_url'];
            $order->external_id = $uuid;
            $order->save();

            $cart_wants_to_delete->delete();

            return redirect($result['invoice_url']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    } */


    /* public function payment_post(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->where('product_id', 14)->get();

        $create_invoice_request = new \Xendit\Invoice\CreateInvoiceRequest([
            'external_id' => (string) Str::uuid(),
            'description' => $request->description,
            'amount' => $request->amount,
            'payer_email' => $request->payer_email,
        ]);

        $result = $this->apiInstance->createInvoice($create_invoice_request);

        $order = new Order;
        $order->name = Auth::user()->name;
        $order->rec_address = Auth::user()->email;
        $order->phone = "None";
        $order->user_id = $user_id;
        $order->product_id = 14;
        $order->payment_status = 'pending';
        $order->checkout_link = $result['invoice_url'];
        $order->external_id = $create_invoice_request['external_id'];
        $order->save();

        return response()->json($order);
    } */
}
