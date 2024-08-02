@extends('layout')
@section('content')
    <div class="mx-3 my-3 overflow-scroll">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-3xl">Jadwal Piket</h1>
            <div class="flex justify-end">
                <!-- You can open the modal using ID.showModal() method -->
                <button class="btn btn-info rounded-2xl" onclick="my_modal_3.showModal()">Tambah jadwal</button>
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
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                            <div class="flex flex-col">
                                <label for="">Absensi</label>
                                <select class="select select-primary w-full max-w-xs rounded-xl" name="absen">
                                    <option disabled selected>pilih salah satu :</option>
                                    <option value="belum">belum</option>
                                    <option value="sudah">sudah</option>
                                </select>
                            </div>
                            <button class="btn btn-warning rounded-2xl my-4" type="submit">Tambah</button>
                        </form>
                    </div>
                </dialog>
            </div>
        </div>


        <div class="px-5 py-2">
            <div class="grid grid-cols-6 text-center border-b mt-10 font-semibold">
                <h1>Nama</h1>
                <h1>Divisi</h1>
                <h1>Tanggal</h1>
                <h1>Shift</h1>
                <h1>Absen</h1>
                <h1>Akasi</h1>
            </div>
            @foreach ($jadwals as $item)
                <div class="grid grid-cols-6 text-center items-center mt-4">
                    <h1>{{ $item->user->name }}</h1>
                    <h1>{{ $item->user->divisi }}</h1>
                    <h1> {{ date('d/m/Y', strtotime($item->tanggal)) }} </h1>
                    <h1>{{ $item->shift }}</h1>
                    <h1>{{$item->absen}}</h1>
                    <div>
                        <!-- Open the modal using ID.showModal() method -->
                        <button class="btn btn-error rounded-2xl" onclick="my_modal_2.showModal()">Absen</button>
                        <dialog id="my_modal_2" class="modal">
                            <div class="modal-box">
                                <form action="">
                                    <button class="btn btn-primary rounded-2xl">absen</button>
                                </form>
                            </div>
                            <form method="dialog" class="modal-backdrop">
                                <button>close</button>
                            </form>
                        </dialog>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
