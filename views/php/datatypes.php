@extends('layout.master')
@section('index')
<div class="col-sm-10 text-left">
    <h1>Типы данных</h1>
    <div class="well well-sm">В языке PHP есть <strong>восемь</strong> основных типов данных</div>
    <h3>Скалярные типы данных</h3>
    <div class="table-responsive">
        <table class="table">
        <tr>
            <td><a href="#boolean">1. Двоичный (Boolean)</a></td>
        </tr>
        <tr>
            <td>2. Целое число (Integer)</td>
        </tr>
        <tr>
            <td>3. Число с плавающей точкой (Float)</td>
        </tr>
        <tr>
            <td>4. Строка (String)</td>
        </tr>
         </table>
     </div>
    <h3>Смешанные типы данных</h3>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>5. Массив (Array)</td>
            </tr>
            <tr>
                <td>6. Объект (Object)</td>
            </tr>
        </table>
    </div>
    <h3>Специальные типы  данных</h3>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <td>7. Ресурс (Resource)</td>
            </tr>
            <tr>
                <td>8. Пустой тип (Null)</td>
            </tr>
        </table>
    </div>
    1111111111111111111111111111111111111<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div id="boolean">
        <h1>Двоичный тип данных (Boolean)</h1>
        <div class="well">
            Двоичный тип данных выражает истинность значения. Он может быть либо TRUE либо FALSE.
        </div>
    </div>


</div>
<div class="col-sm-2">
        @include('php.menu')
</div>
@endsection