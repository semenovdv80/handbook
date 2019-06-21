<?php

namespace App\models;

use App\base\BaseModel;
use Essential\Http\Request;

class Article extends BaseModel
{
    protected $table = 'articles';

    public static $sections = [
        'php' => 1,
        'mysql' => 2,
        'nginx' => 3
    ];


    /**
     * Get current section
     *
     * @param Request $request
     * @return array|null
     */
    public static function getSection(Request $request): ?int
    {
        $uri = ltrim($request->uri(), '/');
        return self::$sections[$uri] ?? 0;
    }

    /**
     * Get articles list
     *
     * @param $request
     * @return mixed
     */
    public static function list($request)
    {
        $section_id = self::getSection($request);
        $query = Article::where('section_id', $section_id);
        if (isset($request->q)) {
            $query->where(function ($query) use ($request) {
                return $query->whereLike('content', '%' . $request->q . '%')
                    ->orWhereLike('title', '%' . $request->q . '%');
            });
        }
        return $query;
    }
}