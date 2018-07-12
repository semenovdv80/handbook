@extends('layout.master')
@section('index')
<div class="container" xmlns="http://www.w3.org/1999/html">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
        <h2>Авторизация на сайте</h2>
        <div style="width: 400px">
        <form method="post">
        <div class="form-group">
            <label for="email">Введите E-mail&nbsp;&nbsp;</label>
            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
        <div class="form-group">
            <label for="password">Введите пароль</label>
            <input type="text" name="password" class="form-control" placeholder="Пароль"/>
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"/> Запомнить меня
        </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary btn-md" value="Войти"/>
          </div>
        </form>
         </div>
</div>
@endsection