@extends('user.layouts.app')
@section('content')
<div class="iq-navbar-header" style="height: 215px;">
              <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="flex-wrap d-flex justify-content-between align-items-center">
                              <div>
                                  <h1>Pinjaman Reguler</h1>
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
                       <h4 class="card-title">Tabel Data Pinjaman Reguler</h4>
                    </div>
                 </div>
                 <div class="card-body">
                    <p>Berikut adalah tabel data pinjaman reguler yang dimiliki anggota.</p>
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
                                <th>Pinjaman</th>
                                <th>Status</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                            @foreach ($PR as $no=>$item)
                            <tr>
                                
                                <td>{{ $no+1 }}</td>
                                <td>{{ $item->anggota->nama }}</td>
                                <td>Rp. {{ number_format($item->nominal_utang ,0, ',', '.') }}</td>
                                @if ($item->status_pinjaman == 1)
                                <td class="text-danger">Belum Lunas</td>
                                @else
                                <td class="text-success">Lunas</td>
                                @endif
                                <td>
                                    <form>
                                        <a class="btn btn-sm btn-primary" href="{{url('/pinjaman-reguler-anggota', $item->id)}}">LIHAT</a>
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


@endsection