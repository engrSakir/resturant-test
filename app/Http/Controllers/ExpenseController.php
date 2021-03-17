<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = Expense::all();
            return datatables::of($data)
                ->addColumn('category', function($data) {
                    if($data->expenseCategory){
                        return '<span class="badge badge-info">'.$data->expenseCategory->name.'</span>';
                    }
                })->addColumn('action', function($data) {
                    return '<a href="'.route('expense.edit', $data).'" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('expense.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['category','action'])
                ->make(true);
        }else{
            $expenseCategories = ExpenseCategory::all();
            return view('backend.expense.index', compact('expenseCategories'));
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
        $request->validate([
            'category_id' => 'nullable|exists:expense_categories,id',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'amount' => 'required|numeric',
        ]);

        $expense = new Expense();

        $expense->category_id    =   $request->category;
        $expense->name    =   $request->name;
        $expense->description    =   $request->description;
        $expense->amount    =   $request->amount;
        $expense->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        $expenseCategories = ExpenseCategory::all();
        return view('backend.expense.edit', compact('expenseCategories','expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([
            'category_id' => 'nullable|exists:expense_categories,id',
            'name' => 'required|string',
            'description' => 'nullable|string',
            'amount' => 'required|numeric',
        ]);
        $expense->category_id    =   $request->category;
        $expense->name    =   $request->name;
        $expense->description    =   $request->description;
        $expense->amount    =   $request->amount;
        $expense->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        try {
            $expense->delete();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully deleted.',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'Something going wrong. '.$exception->getMessage(),
            ]);
        }
    }
}
