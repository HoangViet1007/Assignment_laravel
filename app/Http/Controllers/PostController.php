<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost ;
use App\Models\Post;
use App\http\Requests\post\StoreRequest ;
use App\http\Requests\post\UpdateRequest ;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:post_list',['only'=>['index','anyData']]) ;
        $this->middleware('can:post_add',['only'=>['create','store']]) ;
        $this->middleware('can:post_edit',['only'=>['edit','update']]) ;
        $this->middleware('can:post_delete',['only'=>['destroy']]) ;
    }
    public function index()
    {
        // laays danh muc bai viet
        $cate_post = CategoryPost::all() ;
        return view('admin.post.list_post',compact('cate_post')) ;
    }

    public function anyData(Request $request)
    {
        $data = Post::
        join('category_posts','category_posts.id','posts.category_posts_id')
        ->select(['posts.id','posts.title','posts.short_description','posts.content','posts.image','posts.status','posts.highlight','category_posts.name as name_category_posts']);


        return Datatables::of($data)
        ->filter(
            function ($query) use ($request) {
                if ($request->has('title')) {
                    $query->where('title', 'like', "%{$request->get('title')}%");
                }
                if ($request->get('status') != "") {
                    $query->where('posts.status','=', $request->get('status'));
                }
                if ($request->get('highlight') != "") {
                    $query->where('highlight','=', $request->get('highlight'));
                }
                if ($request->get('category_posts_id') != "") {
                    $query->where('category_posts_id', $request->get('category_posts_id'));
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
        // laays danh muc bai viet
        $cate_post = CategoryPost::where('status',1)->get();
        return view('admin.post.add_post',compact('cate_post')) ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if(Post::create($request->all())){
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
        // check
        $model = Post::find($id) ;
        $cate_post = CategoryPost::all() ;

        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !');
        }else{
            return view('admin.post.edit_post',compact('model','cate_post')) ;
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
        // check
        $model = Post::find($id) ;
        if(!$model){
            return back()->with('err','Thông tin này không tồn tại !') ;
        }else{
            // nếu người dùng ko nhập ảnh thì lưu ảnh cũ cho người ta
            if($request->image == $model->image){
                Post::where('id',$id)->update($request->only('title','slug','short_description','content','status','highlight','category_posts_id')) ;
                return redirect()->route('post.index')->with('success', 'Update thông tin thành công !');
            }else{
                Post::where('id',$id)->update($request->only('title','slug','short_description','content','image','status','highlight','category_posts_id')) ;
                return redirect()->route('post.index')->with('success', 'Update thông tin thành công !');
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
        $model = Post::find($id) ;
        if(!$model){
            return redirect()->route('post.index')->with('err','Thông tin này không tồn tại !') ;
        }else{
            try{
                Post::destroy($id) ;
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

    public function demo(){
        return view('admin.post.demo') ;
    }
}
