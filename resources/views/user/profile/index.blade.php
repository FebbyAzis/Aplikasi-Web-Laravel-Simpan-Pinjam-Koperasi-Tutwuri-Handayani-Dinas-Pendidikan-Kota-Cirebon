@extends('user.layouts.app')
@section('content')

    <div class="iq-navbar-header" style="height: 215px;">
        <div class="container-fluid iq-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                        <div>
                            <h2>Detail Anggota | Page</h2>
                            <p>SIKOPER</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header-img">
            <img src="{{ asset('images/dashboard/top-header.png') }}" alt="header"
                class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
            <img src="{{ asset('images/dashboard/top-header1.png') }}" alt="header"
                class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
            <img src="{{ asset('images/dashboard/top-header2.png') }}" alt="header"
                class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
            <img src="{{ asset('images/dashboard/top-header3.png') }}" alt="header"
                class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
            <img src="{{ asset('images/dashboard/top-header4.png') }}" alt="header"
                class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
            <img src="{{ asset('images/dashboard/top-header5.png') }}" alt="header"
                class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
        </div>
    </div> <!-- Nav Header Component End -->
    <!--Nav End-->
    </div>
    
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Detail Data Anggota</h4>
                        </div>
                    </div>
              
                    <div class="card-body">
                        <center>
                            <div class="col-sm-12 pt-2 pb-2">
                                
                                @if ($anggota->users->foto == 1)
                                <img src="{{ asset('data_file/users.png') }}" class="img-thumbnail" alt="user-profile" width="150px" height="150px">
                                @else
                                <img src="{{ url('/data_file/'.$anggota->users->foto) }}" class="img-thumbnail" alt="user-profile" width="150px" height="150px">
                                @endif
                                
                            </div>
                            <div class="col-sm-12 pt-3">
                                <h4>{{$anggota->nama}}</h4>
                                <p>Anggota Koperasi</p>
                            </div>
                            <div class="col-sm-12 pb-3">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$anggota->id}}">
                                    {{-- <span class="btn-inner">
                                        <svg class="icon-20" width="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                    </span> --}}
                                    Ubah Foto Profil
                                </button>
                                @if ($anggota->foto == 1)
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop4{{$anggota->id}}" disabled>
                                    Hapus Foto Profil
                                </button>
                                @else
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop4{{$anggota->id}}">
                                    Hapus Foto Profil
                                </button>
                                @endif
                                
                                
                            </div>
                        </center>
                        <div class="row m-3 pt-1">
                            <div class="col-sm-3">
                                <p>No Anggota</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->no_anggota }}</b></p>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>No Identitas</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->no_identitas }}</b></p>
                            </div>
                        </div>
                        {{-- <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Nama Anggota</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->nama }}</b></p>
                            </div>
                        </div> --}}
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                @if ($anggota->jenis_kelamin == 'L')
                                    <p><b>Laki - Laki</b></p>
                                @else
                                    <p><b>Perempuan</b></p>
                                @endif
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Tempaat Lahir</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->tempat_lahir }}</b></p>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Tanggal Anggota</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->tgl_lahir }}</b></p>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Email Anggota</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->users->email }}</b></p>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>No Telepon</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->no_tlp }}</b></p>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Status Anggota</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                @if ($anggota->status == '1')
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
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1{{ $anggota->id }}">Non-Aktifkan
                                                Anggota</a>
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
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1{{ $anggota->id }}">Aktifkan Anggota</a>
                                        </b></p>
                                @endif
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-3">
                                <p>Alamat</p>
                            </div>
                            <div class="col-sm-1">
                                <p>:</p>
                            </div>
                            <div class="col-sm-8">
                                <p><b>{{ $anggota->alamat }}</b></p>
                            </div>
                        </div>

                        {{-- <div class="col-md-12">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th scope="row">No Anggota</th>
                                  <td>:</td>
                                  <td>{{$anggota->no_anggota}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">No Identitas</th>
                                  <td>:</td>
                                  <td>{{$anggota->no_identitas}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Nama Anggota</th>
                                  <td>:</td>
                                  <td>{{$anggota->users->name}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Jenis Kelamin</th>
                                  <td>:</td>
                                  @if ($anggota->jenis_kelamin == 'L')
                                  <td>Laki - Laki</td>
                                  @else
                                  <td>Perempuan</td>
                                  @endif
                                </tr>
                                <tr>
                                  <th scope="row">Tempat Lahir</th>
                                  <td>:</td>
                                  <td>{{$anggota->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Tanggal Lahir</th>
                                  <td>:</td>
                                  <td>{{$anggota->tgl_lahir}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Email Anggota</th>
                                  <td>:</td>
                                  <td>{{$anggota->users->email}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">No Telepon</th>
                                  <td>:</td>
                                  <td>{{$anggota->no_tlp}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Status Anggota</th>
                                  <td>:</td>
                                  @if ($anggota->status == '1')
                                  <td>
                                  <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" 
                                      fill="green">
                                      </path></svg>                        
                                      Aktif
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$anggota->id}}">Non-Aktifkan Anggota</a>
                                      
                                  </td>
                                  @else
                                      <td>
                                        <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z" 
                                          fill="red">
                                          </path>                            
                                        </svg>                        
                                        Tidak Aktif
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$anggota->id}}">Aktifkan Anggota</a>
                                        
                                      </td>
                                  @endif
                                  
                                </tr>
                                
                              </tbody>
                              </table>
                              <div class="row">
                                <div class="col-sm-12 col-md-3">
                                  &nbsp;&nbsp;&nbsp;&nbsp; 
                                  Alamat 
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  :
                                </div>
                                <div class="col-sm-12 col-md-9">
                                  {{$anggota->alamat}}&nbsp;
                                </div>
                              </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    {{-- <form action="{{ route('dashboard-admin.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal fade" id="staticBackdrop1{{ $anggota->id }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Status Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin <b>menonaktifkan</b> anggota?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    
    <form action="{{ route('foto.update', $anggota->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal fade" id="staticBackdrop{{$anggota->id}}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Foto Profil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="customFile" class="form-label custom-file-input">Pilih Foto</label>
                            <input class="form-control" type="file" id="customFile" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{route('foto.show', $anggota->id)}}">
        <div class="modal fade" id="staticBackdrop4{{$anggota->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="staticBackdropLabel">Hapus Foto Profil</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <p>Apakah anda yakin ingin menghapus foto profil?</p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                     <button type="submit" class="btn btn-primary">Ya</button>
                 </div>
             </div>
         </div>
         </div>
         </form> --}}


@endsection
