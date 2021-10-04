@extends('layouts.app')

@section('content')
<div class="container">
<table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Nissan
        <img src="/nissan.jpg" alt="">
        </td>
        <td>Nissan Terra</td>
        <td>Nissan Philippines</td>
    </tr>
    <tr>
        <td>Ford
        <img src="/download.jfif" alt="">   
        </td>

        <td>Ford Mustang</td>
        <td>American Automobiles</td>
    </tr>

</table>
</div>    
@endsection
<style>
    
    table, th, td{
    border:2px solid black;
    padding:3px;
    background-color: beige;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>
