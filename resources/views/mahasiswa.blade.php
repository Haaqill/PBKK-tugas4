@extends('layouts.app')

@section('title', 'Profil Mahasiswa - ' . $mahasiswa['nama'])

@section('content')

<div class="container py-5">

    <div class="mb-4">
        <a
            href="{{ route('home') }}"
            class="text-decoration-none text-secondary"
        >
            ← Kembali ke Home
        </a>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="profile-card">

                <div class="row align-items-center mb-5">

                    <div class="col-md-auto">

                        <div class="avatar" style="width: 100px; height: 100px; font-size: 36px;">
                            {{ strtoupper(substr($mahasiswa['nama'], 0, 1)) }}
                        </div>

                    </div>

                    <div class="col-md mt-3 mt-md-0">

                        <p class="text-secondary mb-1">
                            PROFIL MAHASISWA
                        </p>

                        <h1 class="fw-bold mb-2">
                            {{ $mahasiswa['nama'] }}
                        </h1>

                        <p class="text-secondary mb-0">
                            {{ $mahasiswa['jurusan'] }}
                        </p>

                    </div>

                </div>


                <h5 class="fw-bold mb-4">
                    Informasi Akademis
                </h5>

                <div class="row">

                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            NIM
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['nrp'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Nama Lengkap
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['nama'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Fakultas
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['fakultas'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Program Studi
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['jurusan'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Angkatan
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['angkatan'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Email
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['email'] }}
                        </div>

                    </div>


                    <div class="col-md-6 mb-4">

                        <div class="info-label">
                            Status
                        </div>

                        <div class="info-value">
                            {{ $mahasiswa['status'] }}
                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>

@endsection