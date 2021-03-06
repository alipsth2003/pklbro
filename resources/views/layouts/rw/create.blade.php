@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kelurahan') }}</div>

                <div class="card-body">
                <form  action="{{route('rw.store')}}" method="post">
                    @csrf
                     <div class="form-group">
                        <label for="">kelurahan</label>
                        <select name="id_kelurahan" class="form-control" required>
                            @foreach($kelurahan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label"><b>Nama Rw</b</label>
                        <input type="text" class="form-control  @error('nama_rw') is-invalid @enderror" id="exampleInputPassword1" name="nama_rw">
                        @error ('nama_rw')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection