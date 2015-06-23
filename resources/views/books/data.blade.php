@extends('app')

@section('content')

<div id="chart-div">


<? echo Lava::render('DonutChart', 'Books', 'chart-div') ?>


@donutchart('Books', 'chart-div')
</div>
@stop