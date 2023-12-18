@extends('admin.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h3>Detail Pinjaman Reguler | {{$p->anggota->nama}}</h3>
                                  <p>MyKOPERASI</p>
                              </div>
                              <div>

                                <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                                        </path>                            
                                    </svg>                                                
                                    Tambah Pinjaman
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
            <div class="col-sm-12 mb-3">
                <div class="card mb-3">
                   {{-- <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">Tabel Data Simpanan Manasuka | {{$simpM->anggota->nama}}</h4>
                      </div>
                   </div> --}}
                </div>
             </div>
             <div class="col-sm-12">
                <div class="card">
                   <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">Detail Pinjaman | <b>{{$p->anggota->nama}}</b></h4>    
                      </div>
                   </div>
                   <div class="card-body">
                    @if (session('Successss'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Successss')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                      <div class="row">
                        {{-- <div class="col-md-12 mb-3">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nama Anggota</th>
                                        <td>:</td>
                                        <td>{{$p->anggota->nama}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> --}}
                        <div class="col-md-6">
                            <table class="table">
                               
                                <tbody>
                                  <tr>
                                    <th scope="row">No Anggota</th>
                                    <td>:</td>
                                    <td>{{$p->anggota->no_anggota}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Tanggal Pinjaman</th>
                                    <td>:</td>
                                    <td>{{date("d/M/Y", strtotime($p->created_at));}}</td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">Jenis Pinjaman</th>
                                    <td>:</td>
                                    <td>Pinjaman Reguler</td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">Status Pinjaman</th>
                                    <td>:</td>
                                    @if($p->status_pinjaman == '1')
                                        <td class="text-danger">Belum Lunas</td>
                                        @else
                                        <td class="text-success">Lunas</td>
                                        @endif
                                   
                                  </tr>
                                 
                                 
                                </tbody>
                              </table>
                              <div class="col-md-12 mt-5">
                                <center>
                                    @php
                                          $bungareq = ($p->nominal_utang * $p->bunga) / 100;
                                          $qt = ($p->nominal_utang/$p->lama) + $bungareq;
                                      @endphp
                                    @if ($qt * $p->lama - ($angs + $jasa) <= 99)
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4{{$p->id}}">LUNAS</button>
                                    @else
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop4{{$p->id}}" disabled>LUNAS</button>
                                    @endif
                                    {{-- @dd(((($p->nominal_utang/$p->lama)+ $bungareq) * $p->lama) - ($angs += $jasa)) --}}
                                    {{-- @dd((($p->nominal_utang/$p->lama)+ $bungareq) * $p->lama) --}}
                                    {{-- @dd($angs+$jasa) --}}
                                    {{-- @dd($qt * $p->lama - ($angs + $jasa)) --}}
                                </center>
                                
                              </div>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                      <th scope="row">Jumlah Pinjaman</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format($p['nominal_utang'], 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Bunga/Jasa</th>
                                      <td>:</td>
                                      @php
                                          $bungareq = ($p->nominal_utang * $p->bunga) / 100;
                                      @endphp
                                      <td>Rp. {{ number_format(($p->nominal_utang * $p->bunga) / 100, 0, ',', '.') }}</td>
                                     
                                    </tr>
                                    <tr>
                                      <th scope="row">Nominal Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format($p->nominal_utang / $p->lama, 0, ',', '.') }}</td>
                                     
                                    </tr>
                                    <tr>
                                      <th scope="row">Total Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format(($p->nominal_utang/$p->lama)+ $bungareq, 0, ',', '.') }} / {{$p->lama}} Bulan</td>
                                     
                                    </tr>

                                    <tr>
                                      <th scope="row">Total Pinjaman</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format((($p->nominal_utang/$p->lama)+ $bungareq) * $p->lama , 0, ',', '.') }}</td>
                                     
                                    </tr>
                                      <th scope="row">Sisa Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format((($p->nominal_utang/$p->lama)+ $bungareq) * $p->lama - $angs += $jasa , 0, ',', '.') }}</td> 
                                    </tr>
                                   
                                  </tbody>
                                </table>
                        </div>
                      </div>
                   </div>
                </div>
             </div>
           <div class="col-sm-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Tabel Data Angsuran Pinjaman Reguler | {{$p->anggota->nama}}</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data angsuran pinjaman reguler yang dimiliki anggota {{$p->anggota->nama}}.</p>
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
                                <th>Angsuran</th>
                                <th>Jasa</th>
                                <th>Bulan</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($angreg as $no=>$abc)
                            <tr>
                                
                                <td>{{ $no+1 }}</td>
                                <td>{{ $p->anggota->nama }}</td>
                                <td>Rp. {{ number_format($abc->nominal_angsuran ,0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($abc->jasa ,0, ',', '.') }}</td>
                                <td>{{ $abc->bulan }}</td>
                                {{-- <td>Rp. {{ number_format($abc->simpanan_manasuka ,0, ',', '.') }}</td> --}}
                                {{-- <td>{{ $abc->manasuka_detail->simpanan_manasuka}}</td> --}}
                               
                              
                                <td>
                                    <form>
                                
                                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{$abc->id}}">HAPUS</a>
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

           <form action="{{url('status-utang-barang/'. $p->id)}}" method="POST">
            @csrf
            @method('PUT')
           <div class="modal fade" id="staticBackdrop4{{$p->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Simpanan Manasuka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin mengubah status pinjaman <b>{{$p->anggota->nama}} - Rp. {{ number_format($p->nominal_utang ,0, ',', '.') }}</b> menjadi lunas?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </div>
            </div>
            </div>
            </form>

           @foreach ($angreg as $item)
           <!-- Modal -->
           <form action="{{url('hapus-angsuran-utang-barang/'. $item->id)}}" method="POST">
            @csrf
            @method('PUT')
           <div class="modal fade" id="staticBackdrop1{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Simpanan Manasuka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus simpanan manasuka <b>{{$p->anggota->nama}} - Rp. {{ number_format($item->nominal_angsuran ,0, ',', '.') }}</b>?</p>
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

            @foreach ($angreg as $u)
            <!-- Modal -->
            <form action="{{url('penarikan-simpanan/'. $u->id)}}">
            <div class="modal fade" id="staticBackdrop2{{$u->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="staticBackdropLabel">Hapus Penarikan Simpanan Manasuka</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <p>Apakah anda yakin ingin menghapus penarikan simpanan manasuka <b>{{$p->anggota->nama}} - Rp. {{ number_format($u->jumlah_penarikan ,0, ',', '.') }}</b>?</p>
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


           <form action="{{ route('angsuran-utang-barang.store') }}" method="POST">
            @csrf
            @method('POST') 
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pinjaman Reguler</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lengkapi data dibawah ini untuk membayar utang barang {{$p->anggota->nama}}!</p>
                        <div class="row">
                            {{-- <div class="form-group">
                                <label class="form-label" for="choices-single-default">Pilih Anggota</label>
                                <select class="form-select" data-trigger name="anggota_id" id="anggota_id">
                                    <option value="0">-</option>
                                    @foreach ($angg as $s)
                                    @if (!in_array($s->id, $simpMOptions))
                                        <option value="{{ $s->id }}" {{old('anggota_id') == $s->id ?  'selected' : null}}>{{ $s->nama }}
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div> --}}
                            {{-- <div class="col-sm-12">
                                <p><b>Simpanan saat ini : Rp. {{ number_format($q ,0, ',', '.') }}</b></p>
                            </div> --}}
                            <input type="hidden" name="utang_barang_detail_id" value="{{$p->id}}">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nominal Angsuran</label>
                                <input type="text" id="angsuran1" class="form-control" name="nominal_angsuran" value="{{ number_format($p->nominal_utang / $p->lama ,0, ',', '.') }}">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Jasa</label>
                                <input type="text" id="angsuran2" class="form-control" name="jasa" value="{{ number_format($p->nominal_utang * $p->bunga / 100 ,0, ',', '.') }}">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Bulan</label>
                                <input type="text" id="pinjaman" class="form-control" name="bulan">
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

        <form action="{{ route('penarikan-simpanan.store') }}" method="POST">
            @csrf
            @method('POST') 
           <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Penarikan Simpanan Manasuka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Isi kolom dibawah ini untuk menarik simpanan manasuka <b>{{$p->anggota->nama}}</b> !</p>
                        <div class="row">
                            {{-- <div class="form-group">
                                <label class="form-label" for="choices-single-default">Pilih Anggota</label>
                                <select class="form-select" data-trigger name="anggota_id" id="anggota_id">
                                    <option value="0">-</option>
                                    @foreach ($angg as $s)
                                    @if (!in_array($s->id, $simpMOptions))
                                        <option value="{{ $s->id }}" {{old('anggota_id') == $s->id ?  'selected' : null}}>{{ $s->nama }}
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div> --}}
                            
                            <input type="hidden" name="simpanan_manasuka_id" value="{{$p->id}}">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Jumlah Penarikan Simpanan</label>
                                <input type="text" id="penarikan" class="form-control" name="jumlah_penarikan">
                                
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

        @foreach ($angreg as $item)
        <form action="{{ route('simpanan-manasuka.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT') 
           <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Simpanan Manasuka</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lengkapi data dibawah ini untuk mengubah simpanan manasuka {{$p->anggota->nama}}!</p>
                        <div class="row">
                            
                            {{-- <div class="form-group">
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
                            </div> --}}
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nominal Simpanan Manasuka</label>
                                <input type="text" class="form-control" id="simpanan_manasuka1" placeholder=" " name="simpanan_manasuka" value="{{$item->simpanan_manasuka}}">
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
        @endforeach


        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                loadData()
                $('#users_id').select2();
            });
           </script>
        
        <script type="text/javascript">
            var angsuran1 = document.getElementById('angsuran1');
            angsuran1.addEventListener('keyup', function(e)
            {
                angsuran1.value = formatRupiah(this.value, 'Rp. ');
            });
            
            var angsuran2 = document.getElementById('angsuran2');
            angsuran2.addEventListener('keyup', function(e)
            {
                angsuran2.value = formatRupiah(this.value, 'Rp. ');
            });
            var penarikan = document.getElementById('penarikan');
            penarikan.addEventListener('keyup', function(e)
            {
                penarikan.value = formatRupiah(this.value, 'Rp. ');
            });
            function formatRupiah(angka, prefix)
            {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split    = number_string.split(','),
                    sisa     = split[0].length % 3,
                    rupiah     = split[0].substr(0, sisa),
                    ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                    
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
                
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
            }
            </script>

@endsection