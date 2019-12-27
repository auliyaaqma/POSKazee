<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use DataTables;
use Validator;
use Storage;
use DB;
use Exception;

class ProductController extends Controller
{

     public function __construct()
    {
        parent::__construct();

        $this->url = 'admin/product';
        $this->view = 'app.product.';
        $this->model = new Product;

        $this->middleware(function ($request, $next) {
            $this->user = \Auth::user();

            view()->share([
                'url'         => $this->url,
                'view'          => $this->view,
            ]);

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
        $data['products']=$this->model->orderBy('created_at', 'DESC')->get();
        return view($this->view.'index', $data);
    }

    public function datatable($type = null)
    {
        if ($type == 'datatables') {
            $data = $this->model->orderBy('created_at', 'DESC')->get();
            $data = get_ordinal_numbers($data);
            
            return Datatables::of($data)
                ->addColumn('action', function ($data) {
                    $action = '';

                    return $action;
                })->make(true);
        } else {
            flash(trans('app.label.data-not-found'), 'warning');

            return redirect()->route($this->route.'.index');
        }
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
        // dd($request);
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect($this->url)
                ->withErrors($validator)
                ->withInput();
        }

        try {
           // dd($request);
            DB::beginTransaction();

            $product = $this->model;
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName   = time() . '.' . $file->getClientOriginalExtension();
                $filePath   = "public/product_img/";
                $file->storeAs($filePath,$fileName);
                $product->photo = $fileName;
            }

            $product->name = $request->name;
            $product->price = $request->price;
            $product->save();

            DB::commit();
            return redirect()->back()->with('message', 'Data berhasil ditambahkan!');
            //return redirect($this->url);
        } catch (Exception $e) {
            DB::rollback();
            return redirect($this->url);
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
        $product = $this->model->find(decrypt($id));
        return $product;
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
        $product = $this->model->find($id);
        $product->delete();

        return back();
    }
}
