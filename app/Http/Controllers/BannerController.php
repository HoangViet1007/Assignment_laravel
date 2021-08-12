<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\Datatables\Datatables;
use App\http\Requests\banner\StoreRequest;
use App\http\Requests\banner\UpdateRequest;
use Illuminate\Support\Facades\Log;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banner.list_banner');
    }

    public function anyData(Request $request)
    {
        $data = Banner::select(['id', 'title', 'image', 'content', 'link', 'status']);
        return Datatables::of($data)
            ->filter(
                function ($query) use ($request) {
                    if ($request->has('title')) {
                        $query->where('title', 'like', "%{$request->get('title')}%");
                    }
                    if ($request->get('status') != "") {
                        $query->where('status', $request->get('status'));
                    }
                }
            )
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.add_banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {

        if (Banner::create($request->all())) {
            return back()->with('success', 'Thêm thông tin thành công !');
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
        $model = Banner::find($id);
        if (!$model) {
            return back()->with('err', 'Thông tin này không tồn tại !');
        } else {
            return view('admin.banner.edit_banner', compact('model'));
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
        $model = Banner::find($id);
        if (!$model) {
            return back()->with('err', 'Thông tin này không tồn tại !');
        } else {
            if ($request->imgae == $model->image) {
                Banner::where('id', $id)->update($request->only('title', 'slug', 'content', 'link', 'status'));
                return redirect()->route('banner.index')->with('success', 'Update thông tin thành công !');
            } else {
                Banner::where('id', $id)->update($request->only('title', 'slug', 'image', 'content', 'link', 'status'));
                return redirect()->route('banner.index')->with('success', 'Update thông tin thành công !');
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
        $model = Banner::find($id);
        if (!$model) {
            return redirect()->route('banner.index')->with('err', 'Thông tin này không tồn tại !');
        } else {
            try {
                Banner::destroy($id);
                return response()->json([
                    'code' => 200,
                    'message' => 'success'
                ], 200);
            } catch (\Exception $exception) {
                Log::error('Message' . $exception->getMessage() . '-- Line : ' . $exception->getLine());
                return response()->json([
                    'code' => 500,
                    'message' => 'fail'
                ], 500);
            }
        }
    }
}
