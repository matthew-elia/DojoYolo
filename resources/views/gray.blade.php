@extends('layouts.app')

@section('content')
<!-- <div class="container" id="prompterWrapper" style="position:absolute;top:60px;height:25%;width:100%;">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h1>Gray Matters.</h1>
        </div>
    </div>
</div> -->
<div id="terminalWrapper" style="position:absolute;bottom:0;height:100%;width:100%;margin:0;padding:0;">
    <div id="LeftTerminal" style="position:absolute;top:0px;bottom:0;left:0;width:50%;float:left;border:2px solid red;"></div>
    <div id="RightTerminal" style="pointer-events:none;position:absolute;top:0px;bottom:0;right:0;width:50%;float:right;border:2px solid red;"></div>
</div>
@endsection
