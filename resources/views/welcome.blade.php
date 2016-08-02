@extends('layouts.app')

@section('content')
<div id="terminalWrapper" style="height:100%;width:100%;margin:0;padding:0;">
    <div id="LeftTerminal" style="position:absolute;top:50px;bottom:0;left:0;width:50%;float:left;border:2px solid red;"></div>
    <div id="RightTerminal" style="pointer-events:none;position:absolute;top:50px;bottom:0;right:0;width:50%;float:right;border:2px solid red;"></div>
</div>
@endsection
