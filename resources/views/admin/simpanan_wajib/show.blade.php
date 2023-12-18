@extends('admin.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Simpanan Wajib | Detail</h1>
                                  <p>MyKOPERASI</p>
                              </div>
                              <div>

                                <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                                        </path>                            
                                    </svg>                                                
                                    Tambah Simpanan Wajib
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
                       <h4 class="card-title">Tabel Data Simpanan Wajib | {{$simw->anggota->nama}}</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data simpanan wajib yang dimiliki anggota {{$simw->anggota->nama}}.</p>
                    @if (session('Success'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Success')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('Successss'))
                    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                        <span><b>Success</b> {{session('Successss')}}</span>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped" data-toggle="data-table">
                          <thead>
                             <tr>
                                <th>No</th>
                                <th>Nama Anggota</th>
                                <th>Lama</th>
                                <th>Simpanan Wajib</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tfoot>
                            <tr>
                                <th></th>
                                <td></td>
                                <td><b>Total</b></td>
                                
                                    @php
                                        $totalss = 0;        
                                    @endphp
                                @foreach ($WD as $y)
                                    @php
                                        $totalss += $y->simpanan_wajib
                                    @endphp
                                @endforeach
                                <td colspan="2"><b>Rp. {{ number_format($totalss ,0, ',', '.') }}</b></td>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($WD as $no=>$item)
                            <tr>
                                
                                <td>{{ $no+1 }}</td>
                                <td>{{ $simw->anggota->nama }}</td>
                                <td>{{ $item->bulan }}/bulan</td>
                                <td>Rp. {{ number_format($item->simpanan_wajib ,0, ',', '.') }}</td>
                                {{-- <td>{{ $item->manasuka_detail->simpanan_manasuka}}</td> --}}
                               
                              
                                <td>
                                    <form>
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

           @foreach ($WD as $item)
           <!-- Modal -->
           <form action="{{url('hapus-simpanan-wajib/'. $item->id)}}" method="POST">
            @csrf
            @method('PUT')
           <div class="modal fade" id="staticBackdrop1{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Hapus Simpanan Wajib</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus simpanan wajib <b>{{$simw->anggota->nama}}&nbsp; Rp. {{ number_format($item->simpanan_wajib ,0, ',', '.') }}</b>?</p>
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




           <form action="{{ route('wajib-detail.store') }}" method="POST">
            @csrf
            @method('POST') 
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Simpanan Wajib</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lengkapi data dibawah ini untuk menambahkan simpanan wajib {{$simw->anggota->nama}}!</p>
                        <div class="row">
                            <div class="form-group">
                                @php
                                    $o = 0;
                                @endphp
                                @forelse ($WD as $c)
                                    <label class="form-label" for="exampleInputText1">Simpanan Wajib Sebelumnya : <b>Rp. {{ number_format($c->simpanan_wajib ,0, ',', '.') }}</b></label>
                                    <input type="hidden" id="cc1" value="{{$c->simpanan_wajib}}">
                                @empty
                                <label class="form-label" for="exampleInputText1">Simpanan Wajib Sebelumnya : <b>Null</b></label>
                                @endforelse                
                            </div>
                            <div class="form-group">
                                <p>Info : Nominal yang digunakan untuk menambahkan simpanan wajib adalah sebesar <b>Rp. 150.000</b> dalam 
                                satu bulan. Silahkan pilih jangka waktu bulan dibawah ini untuk menambahkan simpanan wajib!</p>
                                <input type="hidden" id="cc3" value="150000">
                                <label class="form-label" for="choices-single-default">Pilih Bulan</label>
                                <select class="form-select" data-trigger name="bulan" id="">
                                    {{-- <option value="">-</option> --}}
                                    <option value="1">1 Bulan</option>
                                    <option value="12">12 Bulan</option>
                                    {{-- @foreach ($angg as $s)
                                    @if (!in_array($s->id, $simpMOptions))
                                        <option value="{{ $s->id }}" {{old('anggota_id') == $s->id ?  'selected' : null}}>{{ $s->nama }}
                                        </option>
                                    @endif
                                    @endforeach --}}
                                </select>
                            </div>
                           
                            <input type="hidden" name="simpanan_wajib_id" value="{{$simw->id}}">
                            <input type="hidden" name="anggota_id" value="{{$simw->anggota->id}}">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">Nominal Simpanan Wajib</label>
                                <input type="text" id="simpanan_wajib" class="form-control" name="simpanan_wajib">
                                
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

        @foreach ($WD as $item)
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
                        <p>Lengkapi data dibawah ini untuk mengubah simpanan manasuka {{$simw->anggota->nama}}!</p>
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
                                <input type="text" class="form-control" id="simpanan_wajib1" placeholder=" " name="simpanan_wajib" value="{{$item->simpanan_wajib}}">
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
            var simpanan_wajib = document.getElementById('simpanan_wajib');
            simpanan_wajib.addEventListener('keyup', function(e)
            {
                simpanan_wajib.value = formatRupiah(this.value, 'Rp. ');
            });
            
            var simpanan_wajib1 = document.getElementById('simpanan_wajib1');
            simpanan_wajib1.addEventListener('keyup', function(e)
            {
                simpanan_wajib1.value = formatRupiah(this.value, 'Rp. ');
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

<script type="text/javascript">
    function sum() {
        var txtFirstNumberValue = document.getElementById('cc1').value;
        var txtSecondNumberValue = document.getElementById('cc2').value;
        var txtThirdNumberValue = document.getElementById('cc3').value;
        // var txtFourthNumberValue = document.getElementById('cc4').value;
        var result = parseInt(txtThirdNumberValue) * parseInt(txtSecondNumberValue) + parseInt(txtFirstNumberValue) 
        if (!isNaN(result)) {
            document.getElementById('cc4').value=result;
        }
    }
</script>

@endsection