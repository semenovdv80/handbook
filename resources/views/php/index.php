@extends('layout.master')
@section('index')
<div class="row">
    <div class="col-sm-10">
        <div class="text-right">
        <form>
            <input type="text" name="q" value="<?= !empty(request()->q) ? request()->q : ''?>">
            <input type="submit" value="Найти">
        </form>
        </div>
        <?php
        foreach ($articles as $article) {
            echo '<div class="article">
                    <span class="article-title">'.$article->title.'</span>
                    <div class="article-content">'.htmlspecialchars_decode($article->content).'</div>
                  </div>';
        }
        ?>
    </div>
    <div class="col-sm-2">
        @include('php.menu')
    </div>
</div>
@endsection