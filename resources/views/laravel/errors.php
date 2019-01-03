@extends('layout.master')
@section('index')

<div class="row">
    <div class="col-sm-10">
        <h2>Ошибки MySQL</h2>
        <ol>
            <li><a href="/laravel/errors/smtpcertfail">SMTP SSL routines certificate verify failed. Как отключить SSL TLS шифрование на Laravel для SMTP.</a></li>
        </ol>
    </div>
    <div class="col-sm-2">
        @include('laravel.menu')
    </div>
</div>
@endsection