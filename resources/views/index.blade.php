@extends('layout.index')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-primary px-md-5 py-5 bg-foto">
  <div class="row align-items-center justify-content-center px-0">
    <div class="col-lg-8 text-center" style="padding-bottom:40px;">
      <h1 class="align-items-center font-weight-bold text-white"> <br>
        Mahdrasah Tsanawiyah Al-Musthofa Canggu
        <br>
        Berbasis Information and Communication Technology (ICT)
      </h1>
      <p class="text-white mb-4">
        Selamat datang di Website MTs. Al-Musthofa yang merupakan website resmi dari MTs. Al-Musthofa. Temukan pengetahuan dan kemajuan pendidikan melalui MTs. Al-Musthofa, Sekolah unggulan dengan kurikulum terbaik.
      </p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img class="img-fluid rounded mb-5 mb-lg-0" src="img/foto brosur PPDB MTS.png" alt="" />
      </div>
      <div class="col-lg-7">
        <p class="section-title section-title-secondary pr-5">
          <span class="pr-2">Tentang Kami</span>
        </p>
        <h1 class="mb-4 ">MTs. Al-Musthofa</h1>
        <p>
          MTs. Al-Musthofa adalah lembaga pendidikan yang memiliki pengalaman mendalam dalam menyediakan lingkungan.
        </p>
        <div class="row pt-2 pb-4">
          <div class="col-12 col-md-12">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>MTs. Al-Musthofa Sekolah Berazas Islam
              </li>
              <li class="py-2 border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>MTs. Al-Musthofa Sekolah Yang Bersifat Independent
              </li>
              <li class="py-2 border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>MTs. Al-Musthofa Berfungsi Sebagai Sekolah Mencerdaskan bangsa.
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>MTs. Al-Musthofa Berpereran Sebagai Sekolah Berakhaluq Karimah
              </li>
            </ul>
          </div>
        </div>
        <a href="{{ route('tentang kami') }}" class="btn btn-primary mt-2 py-2 px-4">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Sambutan Start -->
<div class="container-fluid py-5 bg-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="text-center mb-5">
          <p class="section-title section-title-secondary px-5" >
            <span class="px-3" > Sambutan </span>
          </p>
        </div>
        <h1 class="text-white">Taufiqurohman, S.Pd.</h1>
        <p class="mb-4 text-white">- Kepala Sekolah Mahdrasah Tsanawiyah Al-Musthofa </p>
        <p class="text-white text-justify">
          Assalamualaikum Wr Wb
          <br>
Alhamdulillah, segala puji dan syukur kita panjatkan ke hadirat Allah SWT yang telah melimpahkan nikmat kepada kita semua mulai dari nikmat sehat, iman dan kesempatan untuk dapat mengabdi di bidang pendidikan untuk mencerdaskan anak bangsa.
Pendidikan adalah modal utama bagi suatu bangsa dalam upaya meningkatkan kualitas sumberdaya manusia yang dimilikinya. Sumberdaya manusia yang berkualitas akan mampu mengelola sumber daya alam untuk meningkatkan kesejahteraan masyarakat.
Madrasah Tsanawiyah Al-Musthofa senantiasa berusaha mewujudkan apa yang menjadi harapan pemerintah dan masyarakat melalui serangkaian kegiatan dan program kerja yang berorientasi kepada peningkatan kualitas dan daya saing lulusan yang berakhlaqul karimah.
Dalam rangka merealisasikan hal tersebut perlu dijalin kerjasama dan komunikasi yang baik antara pihak Madrasah, Masyarakat (Komite) dan pemerintah yang mengurusi lembaga pendidikan yakni Kemenag dan Kemendikbud Ristek.
Website ini kami hadirkan dalam rangka untuk menjalin komunikasi dan mengawali kerjasama yang baik antara pihak Madrasah, Peserta didik, Wali murid, Masyarakat dan Pemerintah, dan pada akhirnya komunikasi ini akan sangat berguna bagi semua pihak yang berkepentingan dengan dunia pendidikan. Semoga situs web ini dapat memberikan manfaat bagi siapa saja yang mengunjungi. Terimakasih.
          <br>
          Wassalamu’alaikum Warohmatullahi Wabarokatuh
        </p>

      </div>
      <div class="col-lg-5">
        <img style="width: 100%; height: 100%;"
          src="{{ asset('img/pak taufiq png.png') }}" alt="" />
      </div>

    </div>
  </div>
</div>
<!-- Sambutan End -->

<!-- Publikasi Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center">
      <p class="section-title px-5">
        <span class="px-2">Publikasi Terbaru</span>
      </p>
    </div>
    <div class="row">
      @foreach ($publikasi_list as $p)
      <div class="col-lg-3 mb-4">
        <div class="card border-0 shadow-lg mb-2" onclick="location.href='{{route('publikasi.detail',$p->slug)}}'">
          <div class="pdf-thumb-box-overlay">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x pdf-thumb-square"></i>
              <i class="fa fa-eye fa-stack-1x pdf-thumb-eye"></i>
            </span>
          </div>
          <img class="card-img-top mb-0" style="min-height:150px !important;height:150px !important;"
            src="{{ asset($p->gambar) }}" alt="" />
          <div class="card-body bg-light text-center px-3 py-2">
            <h6 class="heading-article">{{ $p->judul }}</h6>
            <div class="d-flex justify-content-center">
              <small class="mr-1"><i class="fa fa-calendar text-primary"></i> {{ $p->tanggal_rilis }}</small>
              <small class="mr-1"><i class="fa fa-tag text-primary"></i> {{ $p->kategori->nama_kategori }}</small>
              <small class="mr-1"><i class="fa fa-comment text-primary"></i> {{ count($p->komentar) }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mb-4">
      <a href="{{ route('publikasi') }}" class="btn btn-secondary px-4 py-2 mx-auto my-2">Lihat semua publikasi</a>
    </div>
  </div>
</div>
<!-- Publikasi End -->

<!-- Berita Start -->
<div class="container-fluid pt-5 bg-primary">
  <div class="container">
    <div class="text-center">
      <p class="section-title px-5">
        <span class="px-2">Berita Terbaru</span>
      </p>
    </div>
    <div class="row">
      @foreach ($berita_list as $p)
      <div class="col-lg-3 mb-4">
        <div class="card border-0 shadow-lg mb-2" onclick="location.href='{{route('berita.detail',$p->slug)}}'">
          <div class="pdf-thumb-box-overlay">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x pdf-thumb-square"></i>
              <i class="fa fa-eye fa-stack-1x pdf-thumb-eye"></i>
            </span>
          </div>
          <img class="card-img-top mb-0" src="{{ asset($p->gambar) }}"" alt=""  style=" min-height:150px
            !important;height:150px !important;" />
          <div class=" card-body bg-light text-center px-3 py-2">
            <h6 class="heading-article">{{ $p->judul }}</h6>
            <div class="d-flex justify-content-center">
              <small class="mr-1"><i class="fa fa-calendar text-primary"></i> {{ $p->tanggal_rilis }}</small>
              <small class="mr-1"><i class="fa fa-tag text-primary"></i> {{ $p->kategori->nama_kategori }}</small>
              <small class="mr-1"><i class="fa fa-comment text-primary"></i> {{ count($p->komentar) }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mb-4">
      <a href="{{ route('berita') }}" class="btn btn-secondary px-4 py-2 mx-auto my-2">Lihat semua Berita</a>
    </div>
  </div>
</div>
<!-- Berita End -->

<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Galeri</span>
      </p>
    </div>
    <div class="row portfolio-container">

      @foreach ($galeri_list as $p)
      <div class="col-lg-4 col-md-6 mb-4 portfolio-item ">
        <div class="position-relative overflow-hidden mb-2">
          <img class="img-fluid w-100" src="{{ asset($p->gambar) }}" alt="" style=" min-height:250px
          !important;height:250px !important;" />
          <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
            <a href="{{ asset($p->gambar) }}" data-lightbox="portfolio">
              <i class="fa fa-eye text-white" style="font-size: 60px"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Gallery End -->
@endsection