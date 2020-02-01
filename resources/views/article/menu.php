<div>
    <ul class="nav flex-column nav-pills main-menu">
        <li class="nav-item">
            <a class="nav-link" href="/"><strong>На главную</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/php">Все заметки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/article/add">Добавить заметку</a>
        </li>
        <?php foreach($articles as $article) { ?>
            <li class="nav-item">
                <?='<a class="nav-link" href="/article/edit/'.$article->id.'">'.$article->title.'</a>'?>
            </li>
        <?php } ?>
    </ul>
</div>