@extends('user.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Detail Utang Barang</h1>
                                  <p>MyKOPERASI</p>
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
                </div>
             </div>
             <div class="col-sm-12">
                <div class="card">
                   <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                         <h4 class="card-title">Detail Pinjaman | <b>{{$UB->anggota->nama}}</b></h4>    
                      </div>
                   </div>
                   <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <th scope="row">No Anggota</th>
                                    <td>:</td>
                                    <td>{{$UB->anggota->no_anggota}}</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Tanggal Pinjaman</th>
                                    <td>:</td>
                                    <td>{{date("d/M/Y", strtotime($UB->created_at));}}</td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">Jenis Pinjaman</th>
                                    <td>:</td>
                                    <td>Utang Barang</td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">Status Pinjaman</th>
                                    <td>:</td>
                                    @if($UB->status_pinjaman == '1')
                                        <td class="text-danger">Belum Lunas</td>
                                        @else
                                        <td class="text-success">Lunas</td>
                                        @endif
                                   
                                  </tr>
                                 
                                 
                                </tbody>
                              </table>
                        
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                      <th scope="row">Jumlah Pinjaman</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format($UB['nominal_utang'], 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Bunga/Jasa</th>
                                      <td>:</td>
                                      @php
                                          $bungareq = ($UB->nominal_utang * $UB->bunga) / 100;
                                      @endphp
                                      <td>Rp. {{ number_format(($UB->nominal_utang * $UB->bunga) / 100, 0, ',', '.') }}</td>
                                     
                                    </tr>
                                    <tr>
                                      <th scope="row">Nominal Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format($UB->nominal_utang / $UB->lama, 0, ',', '.') }}</td>
                                     
                                    </tr>
                                    <tr>
                                      <th scope="row">Total Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format(($UB->nominal_utang/$UB->lama)+ $bungareq, 0, ',', '.') }} / {{$UB->lama}} Bulan</td>
                                     
                                    </tr>

                                    <tr>
                                      <th scope="row">Total Pinjaman</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format((($UB->nominal_utang/$UB->lama)+ $bungareq) * $UB->lama , 0, ',', '.') }}</td>
                                     
                                    </tr>
                                      <th scope="row">Sisa Angsuran</th>
                                      <td>:</td>
                                      <td>Rp. {{ number_format(((($UB->nominal_utang/$UB->lama)+ $bungareq) * $UB->lama) - ($angs + $jasa) , 0, ',', '.') }}</td> 
                                    </tr>
                                   {{-- @dd($angs+$jasa) --}}
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
                       <h4 class="card-title">Tabel Data Angsuran Utang Barang</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data angsuran utang barang yang dimiliki anggota {{$UB->anggota->nama}}.</p>
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
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($angub as $no=>$abc)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $UB->anggota->nama }}</td>
                                <td>Rp. {{ number_format($abc->nominal_angsuran ,0, ',', '.') }}</td>
                                <td>Rp. {{ number_format($abc->jasa ,0, ',', '.') }}</td>
                                <td>{{ $abc->bulan }}</td>
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



         
@endsection