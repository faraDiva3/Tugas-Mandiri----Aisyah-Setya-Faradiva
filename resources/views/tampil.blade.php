@extends('template')
@section('main')
    <h1>Data Siswa</h1>
    <a href="{{route('siswa.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->nis}}</td>     
                <td>{{$item->nama}}</td>     
                <td>{{$item->alamat}}</td> 
                <td>{{$item->sekolah->nama_sekolah}}</td> 
                <td>
                    <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('siswa.destroy', $item->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>   
            
                </tr>    
            @endforeach
        
        
        </tbody>
    </table>


@endsection