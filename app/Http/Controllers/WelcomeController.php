<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\User;
use App\Models\topicSection;

use Faker\Factory;

class WelcomeController extends Controller
{
  public function index(){
             // get List of Articles
         $articleList = article::orderBy('id','desc')->get();
         $articlesHeading = "All Articles";
         return view('main', [
             'articleList' => $articleList,
             'articlesHeading' =>$articlesHeading
         ]);
     }
     public function getArticle(){
         return view('articleForm');
     }
     public function postArticle(){
         $request = request();
         // The content is required
         $this->validate($request, [
             'content' => 'required',
             'title' => 'required|string|max:255',
             'readTime'=>'integer|numeric|min:1'
         ]);
         $user = request() ->user();
         if (!$user) {
             dd ('You must be logged in to post article');
         } else {
             $article = new article;
             $article->user_id = $user->id;
             $article->title = request()->input('title');
             $article->section = request()->input('section');
             $article->readTime = request()->input('readTime');
             $article->content = request()->input('content');
             $article->save();
             return redirect('/');
         }
     }
     public function getUserProfile($userId) {
         $user = User::where('id',$userId)->get();
         $articleList = article::where('user_id',$userId)->orderBy('id','desc')->get();
         return view ('profile', [
             'user' =>$user,
             'articleList' => $articleList,
             ]);
     }
 }
  ?>
