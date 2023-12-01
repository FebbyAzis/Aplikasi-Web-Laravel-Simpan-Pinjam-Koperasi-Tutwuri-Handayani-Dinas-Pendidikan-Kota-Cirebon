@extends('admin.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Anggota | Page</h1>
                                  <p>My-KOPERASI</p>
                              </div>
                              <div>

                                <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z" fill="currentColor">
                                        </path>                            
                                    </svg>                        
                                    Tambah Anggota
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
      <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
           <div class="col-sm-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Tabel Data Anggota</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel seluruh anggota koperasi yang telah terdaftar.</p>
                    @if (session('Success'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Success')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped" data-toggle="data-table">
                          <thead>
                             <tr>
                                <th>No</th>
                                <th>No Anggota</th>
                                <th>Nama Anggota</th>
                                <th>Email Anggota</th>
                                <th>No Telepon</th>
                                <th>Status</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          
                          <tbody>
                            @foreach ($anggota as $no=>$item)
                            @if ($item->statused == '1')
                            @if ($item->users_id == 0)
                            <tr class="table-danger">
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->no_anggota }}</td>
                                <td><a href="{{route('anggota.show', $item->id)}}">{{ $item->nama }}(Nama Sementara!)</a></td>
                                <td>Anggota belum ditambahkan!</td>
                                <td>{{ $item->no_tlp }}</td>
                                @if($item->status == '1')
                                <td>
                                <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" 
                                    fill="green">
                                    </path></svg>                        
                                    <b>Aktif</b> 
                                </td>
                                @else
                                    <td>
                                    <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z" 
                                         fill="red">
                                         </path>                            
                                       </svg>
                                     <b>Tidak Aktif</b> 
                                 </td>
                                @endif
                                <td>
                                    <form 
                                    {{-- onsubmit="return confirm('Apakah anda yakin ingin menghapus anggota?');" action="{{ route('anggota.destroy', $item->id) }}" method="POST" --}}
                                    >
                                   
                                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">EDIT</a>
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$item->id}}">HAPUS</a>
                                        
                                    </form>
                                </td>
                             </tr>
                            @else
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->no_anggota }}</td>
                                <td><a href="{{route('anggota.show', $item->id)}}">{{ $item->users->name }}</a></td>
                                <td>{{ $item->users->email }}</td>
                                <td>{{ $item->no_tlp }}</td>
                                @if($item->status == '1')
                                <td>
                                <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" 
                                    fill="green">
                                    </path></svg>                        
                                    <b>Aktif</b> 
                                </td>
                                @else
                                    <td>
                                    <svg class="icon-30" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 1.99927H16.34C19.73 1.99927 22 4.37927 22 7.91927V16.0903C22 19.6203 19.73 21.9993 16.34 21.9993H7.67C4.28 21.9993 2 19.6203 2 16.0903V7.91927C2 4.37927 4.28 1.99927 7.67 1.99927ZM15.01 14.9993C15.35 14.6603 15.35 14.1103 15.01 13.7703L13.23 11.9903L15.01 10.2093C15.35 9.87027 15.35 9.31027 15.01 8.97027C14.67 8.62927 14.12 8.62927 13.77 8.97027L12 10.7493L10.22 8.97027C9.87 8.62927 9.32 8.62927 8.98 8.97027C8.64 9.31027 8.64 9.87027 8.98 10.2093L10.76 11.9903L8.98 13.7603C8.64 14.1103 8.64 14.6603 8.98 14.9993C9.15 15.1693 9.38 15.2603 9.6 15.2603C9.83 15.2603 10.05 15.1693 10.22 14.9993L12 13.2303L13.78 14.9993C13.95 15.1803 14.17 15.2603 14.39 15.2603C14.62 15.2603 14.84 15.1693 15.01 14.9993Z" 
                                         fill="red">
                                         </path>                            
                                       </svg>
                                     <b>Tidak Aktif</b> 
                                 </td>
                                @endif
                                <td>
                                    <form 
                                    {{-- onsubmit="return confirm('Apakah anda yakin ingin menghapus anggota?');" action="{{ route('anggota.destroy', $item->id) }}" method="POST" --}}
                                    >
                                   
                                        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">EDIT</a>
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$item->id}}">HAPUS</a>
                                        
                                    </form>
                                </td>
                             </tr>
                            @endif
                            @endif
                          @endforeach
                         </tbody>
                          
                       </table>
                    </div>
                 </div>
              </div>
           </div>
        </div>
           </div>

           @foreach ($anggota as $item)
           <!-- Modal -->
           <form action="{{url('dashboard-admin/'. $item->id)}}">
           <div class="modal fade" id="staticBackdrop1{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus anggota?</p>
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




           <form action="{{ route('anggota.store') }}" method="POST">
            @csrf
            @method('POST') 
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" id="exampleInputText1" placeholder=" " name="no_anggota">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">No Identitas</label>
                                <input type="text" class="form-control" id="exampleInputText1"  placeholder=" " name="no_identitas">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nama Anggota</label>
                                <input type="text" class="form-control" id="exampleInputText1" placeholder=" " name="nama">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Jenis Kelamin</label>
                                <div class="form-check">
                                  <div class="row m-3">
                                    <div class="col-md-4">
                                        <p class="form-radio-label pl-1" for="L">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" id="L">
                                            <span class="form-check-label">Laki-laki</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="form-radio-label pl-1" for="P">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="P">
                                            <span class="form-check-label">Perempuan</span>
                                        </p>    
                                    </div>
                                  </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputText1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="exampleInputText1" placeholder=" " name="tempat_lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputdate" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">No Telepon</label>
                                <input type="text" class="form-control" id="exampleInputText1" name="no_tlp" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="alamat"></textarea>
                            </div>
                            <input type="hidden" name="status" value="1">
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

        @foreach ($anggota as $item)
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
                            {{-- @if ($item->users_id == 0) --}}
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
                            {{-- @endif --}}
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
                            
                            {{-- <input type="hidden" name="status" value="1"> --}}
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
        @endforeach


        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                loadData()
                $('#users_id').select2();
            });
           </script>
        

@endsection