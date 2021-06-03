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
</style>
@section('title', 'show.blade.php')


@section('content')
@if ($items != null)
@foreach ($items as $item)
  <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
      </tr>
      <tr>
        <td>
          {{$item->id}}
        </td>
        <td>
          {{$item->name}}
        </td>
        <td>
          {{$item->age}}
        </td>
      </tr>
    </table>
@endforeach
@endif
@endsection
