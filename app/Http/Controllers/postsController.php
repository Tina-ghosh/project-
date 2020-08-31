<?php
namespace App\Http\Controllers;
use DB;
use App\post;
class postscontroller extends controllers
{
	public function show($slug)
	{
	$post = \DB::table('posts')-> where('slug',$slug)->first() ;
if (! $posts) {
	abort(484);
}
return view('post', [
'post' => $post
]);
}
}