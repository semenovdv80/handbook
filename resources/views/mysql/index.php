@extends('layout.master')
@section('index')
<div class="row">
    <div class="col-sm-10">
        <?php
        foreach ($articles as $article) {
            echo '<div class="article">
                    <span class="article-title">#'.$article->id.' '.$article->title.'</span>
                    <div class="article-content">'.htmlspecialchars_decode($article->content).'</div>
                    <div class="btn-group">
                     <a href="/article/edit/'.$article->id.'" class="btn btn-primary">Изменить</a>
                     <button data-route="/article/delete/'.$article->id.'" class="btn btn-danger btn-delete">Удалить</button>
                    </div> 
                  </div>';
        }
        ?>
    </div>
    <div class="col-sm-2">
        @include('mysql.menu')
    </div>
</div>
@endsection