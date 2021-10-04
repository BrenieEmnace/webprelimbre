@extends('layouts.app')

@section('content')
<div class="container">
<table>
<tr>
        <th>Nissan</th>
        <th>Ford</th>
    </tr>
    <tr>
        <th>Nissan Terra
        <img src="/nissan.jpg" alt="">
        </th>
        <th>Ford Mustang
        <img src="/download.jfif" alt="">
        </th>
    </tr>
    <tr>
        <th>13 Sales</th>
        <th>7 Sales</th>
    </tr>
    

</table>
</div>    
@endsection
<style>
    
    table, th, td{
    border:2px solid black;
    padding:5px;
    background-color: beige;
    width: 900px;
    height: 100px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>

