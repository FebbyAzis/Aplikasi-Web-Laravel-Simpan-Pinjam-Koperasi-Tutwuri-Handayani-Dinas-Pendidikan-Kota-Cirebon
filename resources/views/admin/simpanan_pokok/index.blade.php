@extends('admin.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Simpanan Pokok | Page</h1>
                                  <p>SIKOPER</p>
                              </div>
                              <div>

                                <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                                        </path>                            
                                    </svg>                                                
                                    Tambah Simpanan Pokok
                                </a>

                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Launch static backdrop modal
                                    </button> --}}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="iq-header-img">
                  <img src="{{asset('images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{asset('images/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{asset('images/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{asset('images/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{asset('images/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                  <img src="{{asset('images/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
              </div>
          </div>          <!-- Nav Header Component End -->
        <!--Nav End-->
      </div>
      <div class="conatiner-fluid content-inner mt-n5 py-0" data-aos="fade-up" data-aos-delay="800">
        <div class="row">
           <div class="col-sm-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Tabel Data Simpanan Pokok</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data simpanan pokok seluruh anggota koperasi.</p>
                    @if (session('Success'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Success')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('Successs'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Successs')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped" data-toggle="data-table">
                          <thead>
                             <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Simpanan Pokok</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tfoot>
                            <tr>
                                <td></td>
                                <td><b>Total</b></td>
                                <td><b>Rp. {{ number_format($simptotal ,0, ',', '.') }}</b></td>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($simp as $no=>$item)
                            <tr>
                                
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->anggota->nama }}</td>
                                <td>Rp. {{ number_format($item->simpanan_pokok ,0, ',', '.') }}</td>
                                <td>
                                    <form>
                                        {{-- <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">EDIT</a> --}}
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$item->id}}">HAPUS</a>
                                    </form>
                                </td>
                                
                             </tr>
                             @endforeach
                         </tbody>
                          
                       </table>
                    </div>
                 </div>
              </div>
           </div>
        </div>
           </div>

           @foreach ($simp as $item)
           <!-- Modal -->
           <form action="{{url('simpanan-pokok/'. $item->id)}}">
           <div class="modal fade" id="staticBackdrop1{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Simpanan Pokok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus simpanan pokok <b>{{$item->nama}}</b>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </div>
            </div>
            </form>
            @endforeach




           <form action="{{ route('simpanan-pokok.store') }}" method="POST">
            @csrf
            @method('POST') 
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Simpanan Pokok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lengkapi data dibawah ini untuk menambahkan simpanan pokok baru!</p>
                        <div class="row">
                            <div class="form-group">
                                <label class="form-label" for="choices-single-default">Pilih Anggota</label>
                                <select class="form-select" data-trigger name="anggota_id" id="anggota_id">
                                    <option value="0">-</option>
                                    @foreach ($angg as $s)
                                    @if (!in_array($s->id, $simpOptions))
                                        <option value="{{ $s->id }}" {{old('anggota_id') == $s->id ?  'selected' : null}}>{{ $s->nama }}
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nominal Simpanan Pokok</label>
                                <input type="text" class="form-control" id="exampleInputText1" placeholder="Rp 160000" value="Rp. 160.000" readonly>
                                <input type="hidden" name="simpanan_pokok" value="160000">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
            </div>
        </form>

        {{-- @foreach ($simp as $item)
        <form action="{{ route('anggota.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT') 
           <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lengkapi data dibawah ini untuk menambahkan anggota baru!</p>
                        <div class="row">
                            
                            <div class="form-group">
                                <label class="form-label" for="choices-single-default">Pilih Anggota</label>
                                <select class="form-select" data-trigger name="users_id" id="users_id">
                                    <option value="0">-</option>
                                    @foreach ($users as $s)
                                    @if (!in_array($s->id, $anggotaOptions))
                                        <option value="{{ $s->id }}" {{old('users_id') == $s->id ?  'selected' : null}}>{{ $s->name }}
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">No Anggota</label>
                                <input type="text" class="form-control" id="exampleInputText1" placeholder=" " name="no_anggota" value="{{$item->no_anggota}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">No Identitas</label>
                                <input type="text" class="form-control" id="exampleInputText1"  placeholder=" " name="no_identitas" value="{{$item->no_identitas}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nama Anggota</label>
                                <input type="text" class="form-control" id="exampleInputText1"  placeholder=" " name="nama" value="{{$item->nama}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Jenis Kelamin</label>
                                <div class="form-check">
                                  <div class="row m-3">
                                    <div class="col-md-4">
                                        <p class="form-radio-label pl-1" for="L">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" id="L" @if ($item->jenis_kelamin === "L") checked @endif>
                                            <span class="form-check-label">Laki-laki</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="form-radio-label pl-1" for="P">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="P" @if ($item->jenis_kelamin === "P") checked @endif>
                                            <span class="form-check-label">Perempuan</span>
                                        </p>    
                                    </div>
                                  </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputText1" placeholder=" " name="tempat_lahir" value="{{$item->tempat_lahir}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputdate" name="tgl_lahir" value="{{$item->tgl_lahir}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">No Telepon</label>
                                <input type="text" class="form-control" id="exampleInputText1" name="no_tlp" placeholder=" " value="{{$item->no_tlp}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="alamat">{{$item->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">Status Anggota</label>
                                @if ($item->status == 1)
                                @if ($item->status == '1')
                                <p><b>
                                        <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z"
                                                fill="green">
                                            </path>
                                        </svg>
                                        &nbsp;
                                        Aktif
                                    </b>
                                </p>
                            @else
                                <p><b>
                                        <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z"
                                                fill="red">
                                            </path>
                                        </svg>
                                        &nbsp;
                                        Tidak Aktif
                                    </b></p>
                            @endif
                                @else
                                    
                                @endif
                                
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
        @endforeach --}}


        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                loadData()
                $('#users_id').select2();
            });
           </script>
        

@endsection