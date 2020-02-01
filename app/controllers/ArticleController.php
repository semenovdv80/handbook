<?php

namespace App\controllers;

use App\base\Controller;
use App\models\Article;
use function Couchbase\defaultDecoder;
use Essential\Http\Request;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $articles = Article::list($request)->get();
        view('article.index', [
            'page_title' => 'PHP - Установка и Настройка в Ubuntu 16.04',
            'page_keywords' => 'php, php5.6, пхп, пхп5.6',
            'page_description' => 'php5.6 - установка и настройка Ubuntu 16.04',
            'articles' => $articles
        ]);
    }



    /**
     * Add new article
     */
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            try {
                $articleId = Article::create([
                    'section_id' => $request->section_id,
                    'title' => $request->title,
                    'content' => htmlspecialchars($request->content)
                ]);
                if (!empty($articleId)) {
                    session()->set('result', 'success');
                    return redirect()->route('/');
                }
            } catch (\Exception $exception) {
                var_dump($exception->getMessage());
                exit();
            }
        }
        view('article.show', [
            'sections' => Article::$sections,
            'page_title' => 'PHP - Установка и Настройка в Ubuntu 16.04',
            'page_keywords' => 'php, php5.6, пхп, пхп5.6',
            'page_description' => 'php5.6 - установка и настройка Ubuntu 16.04'
        ]);
    }

    /**
     * @param $id
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $articles = Article::where('section_id', $article->section_id)->get();
        if (!$article) {
            return redirect()->route('/');
        }
        $request = request();
        if ($request->isMethod('POST')) {
            $article->update([
                'section_id' => $request->section_id,
                'title' => $request->title,
                'content' => htmlspecialchars($request->content)
            ]);
            session()->set('result', 'success');
            return redirect()->route('/');
        }
        return view('article.show', [
            'request' => $request,
            'sections' => Article::$sections,
            'article'=>$article,
            'articles'=>$articles,
            'page_title' => $article->title,
            'page_keywords' => $article->title,
            'page_description' => $article->title,
        ]);
    }

    /**
     * Delete article
     *
     * @param $id
     */
    public function delete($id)
    {
        $article = Article::find($id);
        if (!empty($article)) {
            $article->delete();
        }
    }
}