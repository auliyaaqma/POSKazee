<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailTransaction;
use App\Models\Product;
use App\Models\Transaction;

use Validator;
use DB;
use Exception;

class TransactionController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->product = new Product;
        $this->transaction = new Transaction;
        $this->detail_transaction = new DetailTransaction;

        // $this->user = \Auth::user();

        $this->middleware(function ($request, $next) {
            $this->user = \Auth::user();

            // view()->share([
            //     'url'         => $this->url,
            //     'view'          => $this->view,
            // ]);

            return $next($request);
        });

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        try {
           // dd($request);
            DB::beginTransaction();
            $product_id = decrypt($request->product_id);
            $product = $this->product->find($product_id);
            $transaction = $this->transaction;
           // dd($this->user);
            $transaction->user_id = $this->user->id;
            $transaction->total = $request->qty*$product->price;
            $transaction->save();

            //dd($transaction);

            $detail_transaction = $this->detail_transaction;   
            $detail_transaction->transaction_id = $transaction->id;
            $detail_transaction->product_id = $product_id;
            $detail_transaction->qty = $request->qty;
            
            $detail_transaction->save();


            //dd($transaction, $detail_transaction);
            DB::commit();
            return redirect('/home')->with('message', 'Produk berhasil dibeli!');

        } catch (Exception $e) {
            dd($e);
            DB::rollback();
            return redirect('/home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
