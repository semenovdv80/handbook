<?php

namespace App\models;

use App\base\BaseModel;

class Article extends BaseModel
{
    protected $table1 = 'articles';

    const PHP = 1;

    /**
     * Get articles list
     *
     * @param $request
     * @param $section_id
     * @return mixed
     */
    public static function list($request, $section_id)
    {
        $query = Article::where('section_id', $section_id);
        if (isset($request->q)) {
            $query->where(function ($query) use ($request) {
                return $query->whereLike('content', '%'.$request->q.'%')
                    ->orWhereLike('title', '%'.$request->q.'%');
            });
        }
        return $query;
    }
}