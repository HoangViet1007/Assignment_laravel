<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invioce;
use App\Models\InvioceDetail ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;

class InvioceController extends Controller
{
    public function __construct(){
        // $this->middleware('can:invioce_list',['only'=>['index','anyData']]) ;
        // $this->middleware('can:invioce_add',['only'=>['create','store']]) ;
        $this->middleware('can:invioce_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:invioce_delete',['only'=>['destroy']]) ;
    }

    public function index(){
        return view('admin.invioce.list_invioce') ;
    }

    public function anyData(Request $request){
        $data = Invioce::select(['id', 'name', 'email', 'phone', 'address', 'content','total_price','status'])->orderBy('id','DESC');
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('name')) {
                        $query->where('name', 'like', "%{$request->get('name')}%");
                    }
                    if ($request->has('email')) {
                        $query->where('email', 'like', "%{$request->get('email')}%");
                    }
                    if ($request->has('address')) {
                        $query->where('address', 'like', "%{$request->get('address')}%");
                    }
                    if ($request->has('phone')) {
                        $query->where('phone', 'like', "%{$request->get('phone')}%");
                    }
                    if ($request->get('status') != "") {
                        $query->where('status', $request->get('status'));
                    }
                }
            )
            ->make(true);
    }

    public function edit($id){
        $data = Invioce::find($id);
        if(!$data) {
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            return view('admin.invioce.edit_invioce',compact('data')) ;
        }
    }

    public function invioceDetail(Request $request,$id){
        $invioce_detail = InvioceDetail::where('invioce_id',$id)->get() ;
        // dd($invioce_detail) ;
        return view('admin.invioce.invioce_detail',compact('invioce_detail')) ;
    }

    public function update(Request $request,$id){
        $invioce = Invioce::find($id) ;
        if(!$invioce){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            $invioce->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'status' => $request->status,
            ]) ;
            return redirect()->route('invioce.index')->with('success','Update thông tin thành công!') ;
        }
    }

    public function destroy($id)
    {

        $model = Invioce::find($id) ;
        if(!$model){
            return redirect()->route('invioce.index')->with('err','Thông tin này không tồn tại !') ;
        }else{
            try{
                Invioce::destroy($id) ;
                $invioce_detail = InvioceDetail::where('invioce_id',$id)->get();
                foreach ($invioce_detail as $a){
                    InvioceDetail::destroy($a->id) ;
                }

                return response()->json([
                    'code' => 200 ,
                    'message' => 'success'
                ],200) ;

            }catch(\Exception $exception){
                Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
                return response()->json([
                    'code' => 500 ,
                    'message' => 'fail'
                ],500) ;
            }
        }
    }

}
