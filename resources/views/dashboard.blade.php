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
            @foreach ($jadwals as $item)
                <div class="grid grid-cols-4 text-center mt-4">
                    <h1>{{ $item->user->name }}</h1>
                    <h1>{{ $item->user->divisi }}</h1>
                    <h1> {{ date('d/m/Y', strtotime($item->tanggal)) }} </h1>
                    <h1>{{ $item->shift }}</h1>
                </div>
            @endforeach

        </div>
        <div class="flex justify-end">
            <!-- You can open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_3.showModal()">Tambah jadwal</button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box bg-neutral rounded-xl">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <form method="post" action="/jadwal" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col">
                            <label for="">nama</label>
                        <select class="select select-primary w-full max-w-xs rounded-xl" name="id_user">
                            <option disabled selected>pilih salah satu :</option>
                            @foreach ($users as $item )
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Tanggal</label>
                            <input type="date" class="input input-bordered w-full max-w-xs rounded-xl" name="tanggal" />
                        </div>
                        <div class="flex flex-col">
                            <label for="">Shif</label>
                        <select class="select select-primary w-full max-w-xs rounded-xl" name="shift">
                            <option disabled selected>pilih salah satu :</option>
                            <option value="pagi">pagi</option>
                            <option value="siang">siang</option>
                          </select>
                        </div>
                        <button class="btn btn-warning rounded-2xl my-4" type="submit">Tambah</button>
                    </form>
                </div>
            </dialog>
        </div>
    </div>
@endsection
