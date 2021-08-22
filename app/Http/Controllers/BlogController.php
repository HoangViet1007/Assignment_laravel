<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\CategoryPost;

class BlogController extends Controller
{
    public function __construct()
    {
        // them gan day
        $post_recent = Post::where('status',config('common.posts.status.active'))->limit(5)->orderBy('id', 'DESC')->get();

        // danh muc bai viet
        $category_post = CategoryPost::where('status',config('common.category_posts.status.active'))->get();

        return view()->share(['post_recent'=>$post_recent,'category_post'=>$category_post]);
    }

    public function blog()
    {
        $blog = Post::where('status',config('common.posts.status.active'))->paginate(3);

        return view('homepage.blog', compact('blog'));
    }

    public function blogDetail(Request $request)
    {
        // segment tức là phân đoạn nó sẽ lấy ... ngăn cách bởi // ... nếu segment(1) nó sẽ lấy phân đoạn /tin-tuc/
        $array_url = preg_split("/(-)/i", $request->segment(2));

        // id se la phần tử cuối của mảng .... lấy za dùng hàm pop
        $id = array_pop($array_url);

        $blog_detail = Post::find($id);

        return view('homepage.blog_detail', compact('blog_detail'));
    }

    public function blogCate(Request $request)
    {
        $array_url = preg_split("/(-)/i", $request->segment(3));
        $category_posts_id = array_pop($array_url);
        // laays za name cate post
        $name_cate_posts = CategoryPost::find($category_posts_id);
        $blogCate = Post::where('status', 1)->where('category_posts_id', $category_posts_id)->paginate(3);
        return view('homepage.blog_cate', compact('blogCate', 'name_cate_posts'));
    }
}
