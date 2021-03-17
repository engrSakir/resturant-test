<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = ExpenseCategory::all();
            return datatables::of($data)
                ->addColumn('expense', function($data) {
                    return '<span class="badge badge-primary">'.$data->expenses->sum('amount').'</span>';
                })->addColumn('action', function($data) {
                    return '<button onclick="editCategory('.$data->id.')" class="btn btn-info btn-sm" ><i class="fa fa-edit"></i> </button>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="'.route('expenseCategory.destroy', $data).'"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['expense','action'])
                ->make(true);
        }else{
            return view('backend.expense.category-index');
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
            'name' => 'required|unique:expense_categories',
        ]);
        $expense_category = new ExpenseCategory();
        $expense_category->name    =   $request->name;
        $expense_category->save();
        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $request->validate([
            'name' => 'required|unique:expense_categories,name,'.$expenseCategory->id,
        ]);
        $expense_category = $expenseCategory;
        $expense_category->name    =   $request->name;
        try {
            $expense_category->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully updated.',
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => 'Something going wrong. '.$exception->getMessage(),
            ]);
        }

        return back()->withToastSuccess('Successfully saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseCategory $expenseCategory)
    {
        try {
            $expenseCategory->delete();
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
