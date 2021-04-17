<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Variation;
use App\Models\VariationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class PosController extends Controller
{
    // pos
    public function pos(){
        $product_categories = ProductCategory::where('branch_id', Session::get('branch')->id)->get();
        //$product_categories = Session::get('branch')->productCategories; //এটা ব্যবহার করলে Session এর আগের data ধরে কাজ করে। নতুন পরিবর্তন নিয়ে কাজ হয় না।
        return view('backend.pos.index', compact('product_categories'));
    }

    // pos Store
    public function posStore(Request $request){
        if(empty($request->products || $request->variations)){
            return response()->json([
                'type' => 'error',
                'message' => 'Please select a product !!',
            ]);
        }
//        if (count(explode(',', $request->products) ) + count(explode(',', $request->variations)) > 0 ){
//            return response()->json([
//                'type' => 'success',
//                'message' => 'Got data'.(explode(',', $request->products) ),
//            ]);
//        }else{
//            return response()->json([
//                'type' => 'success',
//                'message' => 'Empty data set',
//            ]);
//        }
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|string',
            'phone'   => 'nullable|string',
            'vat'   => 'nullable',
            'discount'   => 'nullable',
            'discount_type'   => 'nullable',
            'total_price'   => 'required',
        ]);

        //  CREATE CUSTOMER check exists or not
        $customer = Customer::where('phone', $request->phone)->first();
        if(!$customer){
            $customer = new Customer();
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->email = $request->email;
            $customer->save();
        }

        //  CREATE INVOICE
        $invoice = new Invoice();
        do {
            $invoice_id = mt_rand( 000001, 999999);
        } while ( Invoice::where( 'invoice_id', $invoice_id )->exists() );
        $invoice->invoice_id = $invoice_id;
        $invoice->customer_id = $customer->id;
        $invoice->paid_amount = $request->total_price;
        $invoice->discount = $request->discount;
        $invoice->discount_type = $request->discount_type;
        $invoice->branch_id = Session::get('branch')->id;
        $invoice->staff_id = 1;
        $invoice->save();

        //  CREATE INVOICE ITEM
        if(!empty($request->products )){
            $combined_array = array_combine(explode(',', $request->products) ,explode(',', $request->product_quantities));
            foreach ($combined_array  as $product => $quantity){
                $invoiceItem = new InvoiceItem();
                $invoiceItem->invoice_id = $invoice->id;
                $invoiceItem->product_id = $product;
                $invoiceItem->quantity = $quantity;
                $invoiceItem->price = Product::findOrFail($product)->price;
                $invoiceItem->save();
            }
        }

        //  CREATE INVOICE ITEM for variation order
        if(!empty($request->variations )){
            $combined_array = array_combine(explode(',', $request->variations) ,explode(',', $request->variation_quantities));
            foreach ($combined_array  as $variation => $quantity){
                $invoiceItem = new InvoiceItem();
                $invoiceItem->invoice_id = $invoice->id;
                $invoiceItem->product_id = Variation::findOrFail($variation)->variationCategory->product->id;
                $invoiceItem->variation_id = $variation;
                $invoiceItem->quantity = $quantity;
                $invoiceItem->price = Variation::findOrFail($variation)->price;
                $invoiceItem->save();
            }
        }

        try {
            return response()->json([
                'type' => 'success',
                'invoice_url' => route('invoice.show', $invoice),
                'message' => 'Successfully stored.',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'Oops.. something went wrong'.$exception->getMessage(),
            ]);
        }
    }

    // get Variations By Product
    public function getVariationsByProduct($product_id){
        $variation_categories = Product::find($product_id)->variationCategories;

        $variations=array();
        foreach($variation_categories as $varriation_category){
            foreach($varriation_category->variations as $variation){
                array_push($variations, $variation);
            };
        }

        return Response::json([
             'variation_categories' => $variation_categories,
            //  'variations' => $variations,
        ]);

        // dd($variation_categories);

    }

}
