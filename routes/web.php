<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //$post = new Post();
    //$post->title = 'test title';
    //$post->content = 'test content';
    //$post->save();

    //Post::create([
    //    'title' =>
    //    'content' 
    //]);

    //$post = Post::find(1);
    //echo '標題: '.$post->title.'<br>';
    //echo '內容: '.$post->content.'<br>';
    //dd($post);

    //$posts = Post::all();
    //foreach ($posts as $post){
    //    echo '編號: '.$post->id.'<br>';
    //    echo '標題: '.$post->title.'<br>';
    //    echo '內容: '.$post->content.'<br>';
    //    echo '張貼時間: '.$post->created_at.'<br>';
    //    echo '--------------------------'.'<br>';
    //}
    //dd($posts);

    //$posts = Post::where('id','<', 10)->orderBy('id','DESC')->get();
    //dd($posts);

    //$post = Post::find(1);
    //$post->update([
    //    'title'=>'updated title',
    //    'content'=>'updated content',
    //]);

    //$post = Post::find(1);
    //$post->title = 'saved title';
    //$post->content = 'saved content';
    //$post->save();

    //$post = Post::find(1);
    //$post->delete();

    //Post::destroy(3,5,7);

    //$allPosts = Post::all();
    //dd($allPosts);

    //$featurePosts = Post::where('is_feature', true)->get();
    //dd($featurePosts);

    //$fourthPost = Post::find(4);
    //dd($fourthPost);

    //$lastPost = Post::orderBy('id','DESC')->first();
    //dd($lastPost);

    /*
    $post = Post::find(6);
    echo '標題: '.$post -> title.'<br>';
    echo '內容: '.$post -> content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo '留言: '.$comment->content."<br>";
        echo '--------------------------'.'<br>';
    }
    */

    $comment = Comment::find(4);
    echo $comment->content.'<br>';
    echo '******************'.'<br>';
    $post = $comment->post;
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';

    

});
