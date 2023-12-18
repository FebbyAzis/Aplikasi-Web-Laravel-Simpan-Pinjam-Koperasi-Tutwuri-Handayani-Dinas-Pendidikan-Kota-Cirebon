@extends('user.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Simpanan Manasuka</h1>
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
                   <div class="card-body mb-3">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h5>Total Simpanan</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5>:</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5>Rp. {{ number_format($SMT ,0, ',', '.') }}</h5>
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h5>Total Penarikan</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5>:</h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5>Rp. {{ number_format($PST ,0, ',', '.') }}</h5>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 text-end">
                            <h5><b>Total Simpanan Manasuka</b></h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5><b>:</b></h5>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h5><b>Rp. {{ number_format($SMT - $PST ,0, ',', '.') }}</b></h5>
                        </div> 
                    </div>
                   </div>
                </div>
             </div>
           <div class="col-sm-12">
              <div class="card">
                 <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                       <h4 class="card-title">Tabel Data Simpanan Manasuka</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data simpanan manasuka yang dimiliki anggota.</p>
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
                                <th>Simpanan Manasuka</th>
                             </tr>
                          </thead>
                          <tfoot>
                            <tr>
                                <th></th>
                                <td><b>Total</b></td>
                                <td><b>Rp. {{ number_format($SMT ,0, ',', '.') }}</b></td>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach ($SM as $no=>$item)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->anggota->nama }}</td>
                                <td>Rp. {{ number_format($item->simpanan_manasuka ,0, ',', '.') }}</td>
                             </tr>
                             @endforeach
                         </tbody>
                       </table>
                    </div>
                 </div>
              </div>
           </div>

           <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Tabel Data Penarikan Simpanan Manasuka </h4>
                  </div>
               </div>
               <div class="card-body">
                  <p>Berikut adalah tabel data penarikan simpanan manasuka anggota.</p>
                  @if (session('y'))
                  <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                      <span><b>Success</b> {{session('y')}}</span>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if (session('u'))
                  <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
                      <span><b>Success</b> {{session('u')}}</span>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <div class="table-responsive">
                     <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th>Nama Anggota</th>
                              <th>Jumlah Penarikan</th>
                           </tr>
                        </thead>
                        <tfoot>
                          <tr>
                              <th></th>
                              <td><b>Total</b></td>
                              <td><b>Rp. {{ number_format($PST ,0, ',', '.') }}</b></td>
                          </tr>
                        </tfoot>
                        <tbody>
                          @foreach ($PS as $no=>$items)
                          <tr>
                              <td>{{ $no+1 }}</td>
                              <td>{{ $items->anggota->nama }}</td>
                              <td>Rp. {{ number_format($items->jumlah_penarikan ,0, ',', '.') }}</td>                            
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