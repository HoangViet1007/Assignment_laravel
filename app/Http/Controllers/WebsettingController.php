<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Websetting ;
use App\http\Requests\websetting\StoreRequest ;
use App\http\Requests\websetting\UpdateRequest ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;


class WebsettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dẫn đến trang danh sách
        return view('admin.websetting.list_websetting');

    }

    public function anyData(Request $request){
        $data = Websetting::select(['id','name','image','email','address','phone','description','status']);
        return Datatables::of($data)
        ->filter(
            function ($query) use ($request) {
                if ($request->has('address')) {
                    $query->where('address', 'like', "%{$request->get('address')}%");
                }
                if ($request->get('status') != "") {
                    $query->where('status', $request->get('status'));
                }

                if ($request->has('email')) {
                    $query->where('email', 'like', "%{$request->get('email')}%");
                }
            }
        )
        ->make(true) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.websetting.add_websetting');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // khi ấn submit ở màn hình thêm mới
        // $img = str_replace(url('uploads').'/' ,'',$request->image) ;
        // dd($img) ;
        // $request->merge(['image'=>$img]) ;
        if(Websetting::create($request->all())){
            return back()->with('success','Thêm thông tin thành công !') ;
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
        dd(1) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Websetting::find($id) ;
        if(!$model){
           return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
           return view('admin.websetting.edit_websetting',['data'=>$model]) ;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        // check xem id đó có trong csdl ko đã
        $model = Websetting::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            // neu nguoi dung ko nhap anh thi phai giu anh cu cho nta
            if($request->image == $model->image){
                Websetting::where('id',$id)->update($request->only('name','slug','email','address','phone','description','status'));
                return redirect()->route('websetting.list')->with('success','Update thông tin website thành công !') ;
            }else{
                Websetting::where('id',$id)->update($request->only('name','slug','image','email','address','phone','description','status'));
                return redirect()->route('websetting.list')->with('success','Update thông tin website thành công !') ;
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // kiểm tra xem id này có tồn tại trong database hay là ko
        $model = Websetting::find($id) ;
        if(!$model){
            return redirect()->route('websetting.list')->with('err','Thông tin này không tồn tại !') ;
        }else{
            try{
                Websetting::destroy($id) ;
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
            // Websetting::destroy($id) ;
            // return back()->with('success','Xóa thông tin website thành công !') ;
        }
    }
}
