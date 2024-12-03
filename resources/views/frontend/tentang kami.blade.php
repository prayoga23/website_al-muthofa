@extends('layout.index')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
        <h3 class="display-4 font-weight-bold text-white">Tentang Kami</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Tentang Kami</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="logo-kamu" src="{{ asset('img/logo.png')}}" alt="" />
            </div>
            <div class="col-lg-7" style="padding-right:50px ;">
                <p class="section-title pr-5">
                    <span class="pr-2">Mengenal Lebih Tentang Kami</span>
                </p>
                <h1 class="mb-2">Mahdrasah Tsanawiyah <br> Al-Musthofa Canggu</h1>
                <p style="text-align:justify;">
                    Mahdrasah Tsanawiyah Al-Musthofa Canggu merupakan salah Lorem Ipsum is simply dummy text of the
                    printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<div class="container-fluid py-5">
    <div class="container">

        <div class="col-lg-0 mb-4 mb-lg-0">
            <p class="section-title pr-5">
                <span class="pr-2">Sejarah Mahdrasah Kami</span>
            </p>
            <h1 class="mb-3">Sejarah Mahdrasah Tsanawiyah Al-Musthofa Canggu</h1>
            <p style="text-align:justify;">
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
            <p style="text-align:justify;">
               
            </p>
    
           
            </p>
           
                <p class="section-title pr-5">
                    <span class="pr-2">Latar Belakang</span>
                </p>
                <h1 class="mb-3">Latar Belakang Berdirinya Mahdrasah Tsanawiyah <br> Al-Musthofa Canggu</h1>
                <p style="text-align:justify;">
                   Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
               
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
