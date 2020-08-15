@extends('layouts.app')

@section('style')
    <style>
        .col-12{
            margin:10px 0;
        }
    </style>
@endsection
@section('content')
    @auth
            <td>
                <form method="GET" action="{{route('settings.softdelete', $user)}}"> 
                @csrf
                    <div class="col text-center">
                        <input class="btn btn-danger" value="DELETE ACCOUNT" type="submit" style="width:200px">
                    </div>                
                </form>
            </td>
    @endauth  
@endsection  