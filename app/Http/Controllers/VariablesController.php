<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use App\Models\Attribute;
use Illuminate\Http\Request;

class VariablesController extends Controller
{
    public function find($id)
    {
        $data = Variable::where('product_id', $id)->get();

        $attr = Attribute::all();
        // dd($attr);

        return view('clients.productVariables', compact('data', 'attr'));
    }

    public function create()
    {
        $data = Variable::all();

        $color = Attribute::where('term_id', 2)->get();

        $size = Attribute::where('term_id', 1)->get();
                


        return view('clients.createVariable', compact('data','color','size'));
    }

    public function store(Request $request)
    {
        $data = [];
        $id = $request->product_id;

        if(isset($request->color))
        {
            $data['product_id']=$request->product_id;
            $data['attribute_id']=$request->color;
            $data['stock']=$request->stock;
            $data['description']=$request->description;
            $data['image']=$request->image;
            $data['regular_price']=$request->regular_price;
            $data['sale_price']=$request->sale_price;
            $data['discount']=$request->discount;

            if($request->has('file_upload'))
            {
                $file = $request->file_upload;
                $ext = $request->file_upload->extension();
                $file_name = time().'-'.'product.'.$ext;
                $file->move(public_path('product-variables/uploads'), $file_name);
            }
            $request->merge(['image' => $file_name]);

            Variable::create($data);
        }

        if(isset($request->size))
        {
            $data['product_id']=$request->product_id;
            $data['attribute_id']=$request->size;
            $data['stock']=$request->stock;
            $data['description']=$request->description;
            $data['image']=$request->image;
            $data['regular_price']=$request->regular_price;
            $data['sale_price']=$request->sale_price;
            $data['discount']=$request->discount;

            Variable::create($data);
        }
        
        return redirect('product-variables/'.$id);
    }
}
