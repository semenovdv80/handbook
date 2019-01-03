@extends('layout.master')
@section('index')
<div class="row">
    <div class="col-sm-10">
        <h2>Новая заметка</h2>
        <div id="sample">
            <form method="post">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title"/>
                <br/>
                <label for="title">Содержание</label>
                <textarea name="content" style="width: 100%; height: 200px">Some Content</textarea>
            <input class="form-control btn btn-primary" type="submit" value="Сохранить">
            </form>
        </div>
    </div>
    <div class="col-sm-2">
        @include('php.menu')
    </div>
</div>
@endsection

@section('page.scripts')
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script>bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection