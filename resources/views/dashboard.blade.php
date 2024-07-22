@extends('layout')
@section('content')
<div class="mx-3 my-3">
    <h1 class="font-semibold text-3xl mt-5">Jadwal Piket</h1>
    <div class="px-5 py-2 h-96">
        <div class="grid grid-cols-4 text-center border-b mt-10 font-semibold">
            <h1>Nama</h1>
            <h1>Divisi</h1>
            <h1>Tanggal</h1>
            <h1>Shift</h1>
        </div>
        <div class="grid grid-cols-4 text-center mt-4">
            <h1>Rifqi</h1>
            <h1>Kwu</h1>
            <h1>12/12/12</h1>
            <h1>Pagi</h1>
        </div>
    </div>
   <div class="flex justify-end">
    <a href="#"><button class="btn btn-primary rounded-xl w-36">Absen</button></a>
   </div>
</div>
@endsection
