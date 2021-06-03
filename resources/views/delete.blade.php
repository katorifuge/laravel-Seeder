@extends('layouts.hello')
<style>
    th {
        background-color: black;
        color: white;
        padding: 5px 30px;
    }
    td {
        border: 1px solid black;
        padding: 5px 30px;
        text-align: center;
    }
    button {
        padding: 10px 20px;
        background: black;
        color: white;
    }
</style>
@section('title','delete.blade.php')


@section('content')
<form action="/delete" method="POST">
    <table>
        @csrf
<tr>
    <th>id</th>
    <td><input type="text" name="id" value="{{$form->id}}"></td>
</tr>
<tr>
    <th>name</th>
    <td><input type="text" name="name" value="{{$form->name}}"></td>
</tr>
<tr>
    <th>age</th>
    <td><input type="text" name="age" value="{{$form->age}}"></td>
</tr>
    </table>

    <button>送信</button>

</form>

@endsection
