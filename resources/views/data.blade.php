@extends('layout')
@section('content')
@if (session('successUpdate'))
    <div class="alert alert-success">
        {{ session('successUpdate') }}
    </div>
@endif
@if (session('successDelete'))
    <div class="alert alert-danger">
        {{ session('successDelete') }}
    </div>
@endif
@if (session('done'))
    <div class="alert alert-success">
        {{ session('done') }}
    </div>
@endif
<div class="card border-light mb-3" style="max-width: 60rem;">
    <table class="table table-bordered mb-3 table border-white table-primary">
    <tr>
        <td align="center" style="padding: 10px" class="no">No</td>
        <td align="center" style="padding: 10px" class="act">Kegiatan</td>
        <td align="center" style="padding: 10px" class="desc">Deskripsi</td>
        <td align="center" style="padding: 10px" class="time">Batas Waktu</td>
        <td align="center" style="padding: 10px" class="stat">Status</td>
        <td align="center" style="padding: 10px" class="action">Aksi</td>

    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($todos as $todo)
    <tr>
        <td align="center" style="padding: 15px">{{ $no++ }}</td>
        <td align="center" style="padding: 15px">{{$todo['title']}}</td>
        <td align="center" style="padding: 15px; max-width: 20rem" ><p class="text-truncate text-black">{{$todo ['description']}}</p></td>
        <td align="center" style="padding: 15px; " >{{\Carbon\Carbon::parse($todo['date'])->format('j F, Y')}}</td>
        <td align="center" style="padding: 25px">{{$todo['status']?'Complate' : 'On-Process'}}</td>
        <td class="d-flex" style="padding:32px" >
            @if ($todo['status']==0)
            <a href="/edit/{{ $todo['id']}}" class="btn btn-primary me-2" >Edit</a>
    
@endif
            <form action="/destroy/{{$todo['id']}}" method="POST" > 
            @csrf
            @method('DELETE')
            <button type="submit" type="button" class="btn btn-danger me-2">Hapus</button>
        </form>
        @if ($todo['status']==0)
            
        <form action="/complated/{{$todo['id']}}" method="POST">
            @csrf
            @method('patch')
            <button type="submit" class="btn btn-warning text-white">Complated</button>
        </form>
        @endif
        </td>

    </tr>
        
    @endforeach
  </table>
  
@endsection