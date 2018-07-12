@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <div class="jumbotron">
            <h3>
                <p class="text-center">Данный сайт является личным блогом одного PHP разработчика.</p>
                <p class="text-center">Изложеннная здесь информация необходима мне для выполнения работы, носит исключительно
                    справочный характер и не претендует на истину последней инстанции.</p>
                <p class="text-center">Тем не менее буду рад, если что-то из изложенного здесь окажется Вам полезным.<br/>
                По всем вопросам и предложениям пишите <a href="mailto:semenovdv80@gmail.com">semenovdv80@gmail.com</a></p>
             </h3>
        </div>
    </div>
    <div class="col-sm-2">
        @include('index.menu')
    </div>
</div>
@endsection