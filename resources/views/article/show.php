@extends('layout.master')
@section('index')
<div class="row">
    <div class="col-sm-10">
        <h2>Новая заметка</h2>
        <div id="sample">
            <form method="post">
                <div class="form-group">
                    <label for="section_id">Раздел</label>
                    <select name="section_id" class="form-control">
                        <?php foreach ($sections as $name => $id) {
                            $selected = isset($article) && $article->section_id == $id ? 'selected' : '';
                            echo "<option value='$id' $selected>$name</option>";
                        }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" value="<?= $article->title ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="content">Содержание</label>
                    <div style="width: 100%">
                    <textarea id="content" name="content" style="width: 100%; height: 200px"><?= $article->content ?? '' ?></textarea>
                    </div>
                </div>
                    <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Сохранить">
                </div>
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
<script>
    bkLib.onDomLoaded(function() {
        new nicEditor().panelInstance('content');
    });
</script>
@endsection