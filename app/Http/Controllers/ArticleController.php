<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Support\Facades\Mail;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $articles = Article::all();
       $articles = Article::latest()->get();
       return view("article.list",["articles"=> $articles ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'discription' => 'required'
        ]);


        $article = new Article();
        $article->title = request("title");
        $article->discription = request("discription");
        $article->save();
        return redirect("/list");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);
        return view("article.show",["article"=> $articles ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        return view("article.edit",["article"=> $articles ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = request("title");
        $article->discription = request("discription");
        $article->save();
        return redirect("/list");
    }

    public function autocomplete(Request $request)
    {
        $data = Article::select("title")
                ->where("title","LIKE", '%'.$request->get('query').'%')
                ->get();
        return response()->json($data);
    }

    public function SendMail()
    {
        $details = [
            'title' =>"mail form my companyname",
            "body" =>"this is for tseting"
        ];

        Mail::to("sudhaparayil@gmail.com")->send(new TestMail($details));
        return "email send";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect("/list");
    }
}
