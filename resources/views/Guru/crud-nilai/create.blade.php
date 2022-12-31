<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Nilai | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Munculrapor.css") }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .section-card {
        position: absolute;
        width: 1005px;
        height: auto;
        left: 352px;
        top: 600px;
        background: #F6F6F6;
        border-radius: 15px;
        display: flex;
    }
    .table {
        position: relative;
        width: 100%;
        height: auto;
        left: auto;
        top: auto;

        background: #ffffff;
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
    }
    </style>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="page-tittle1">
        <h5 class="tittle1">Crud Nilai </h5>
        <ul class="breadcrumb">
            <li><a href="#">Guru</a></li>
            <li><a href="">Crud Nilai</a></li>
            <li><a href="">Pilih Siswa</a></li>
        </ul>
    </div>
    <div class="section-card" style="top: 600px;">
        <div style="position: relative; width: 100%; padding: 3rem;">
            {{-- <div>
                <a href="{{ route('admin.dashboard.crud-nilai.create') }}" class="btn btn-primary">Tambah</a>
            </div> --}}
            <div class="fs-2 mb-4 fw-bolder">
                Input Nilai
            </div>
            <div class="mb-4">
                <div class="d-flex gap-4">
                    <div>Nama Siswa:</div>
                    <div>{{ $siswa->nama }}</div>
                </div>
                <div class="d-flex gap-4">
                    <div>Kelas:</div>
                    <div>{{ $jadwal->kelas->nama_kelas }}</div>
                </div>
                <div class="d-flex gap-4">
                    <div>Mapel:</div>
                    <div>{{ $jadwal->mapel->mapel }}</div>
                </div>
            </div>
            <form action="{{ route('guru.dashboard.crud-nilai.store', ['jadwal_id' => $jadwal->id, 'siswa_id' => $siswa->id]) }}" method="POST">
                @csrf
                <div class="fs-4 fw-bolder">Semester Ganjil</div>
                <hr>
                <div class="p-4 mb-4" style="background: rgba(102, 102, 102, 0)">
                    <div class="fs-5 fw-bolder">Nilai</div>
                    <table class="table table-hover" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="tugas1" id="tugas1" placeholder="Tugas 1" value="{{ @$nilai->tugas1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="tugas2" id="tugas2" placeholder="Tugas 2" value="{{ @$nilai->tugas2 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="tugas3" id="tugas3" placeholder="Tugas 3" value="{{ @$nilai->tugas3 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="uts" id="uts" placeholder="UTS" value="{{ @$nilai->uts ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="uas" id="uas" placeholder="UAS" value="{{ @$nilai->uas ?? 100 }}" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="fs-5 fw-bolder">Ketrampilan</div>
                    <table class="table table-hover" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">Pratikum 1</th>
                            <th scope="col">Pratikum 2</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas1" id="p_tugas1" placeholder="Tugas 1" value="{{ @$nilai_p->tugas1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas2" id="p_tugas2" placeholder="Tugas 2" value="{{ @$nilai_p->tugas2 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas3" id="p_tugas3" placeholder="Tugas 3" value="{{ @$nilai_p->tugas3 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_pratikum1" id="p_pratikum1" placeholder="pratikum1" value="{{ @$nilai_p->praktikum1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_pratikum2" id="p_pratikum2" placeholder="pratikum2" value="{{ @$nilai_p->praktikum2 ?? 100 }}" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fs-4 fw-bolder">Semester Genap</div>
                <hr>
                <div class="p-4 mb-4" style="background: rgba(102, 102, 102, 0)">
                    <div class="fs-5 fw-bolder">Nilai</div>
                    <table class="table table-hover" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="tugas1s2" id="tugas1s2" placeholder="Tugas 1" value="{{ @$nilais2->tugas1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="tugas2s2" id="tugas2s2" placeholder="Tugas 2" value="{{ @$nilais2->tugas2 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="tugas3s2" id="tugas3s2" placeholder="Tugas 3" value="{{ @$nilais2->tugas3 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="utss2" id="utss2" placeholder="UTS" value="{{ @$nilais2->uts ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="uass2" id="uass2" placeholder="UAS" value="{{ @$nilais2->uas ?? 100 }}" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="fs-5 fw-bolder">Ketrampilan</div>
                    <table class="table table-hover" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">Pratikum 1</th>
                            <th scope="col">Pratikum 2</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas1s2" id="p_tugas1s2" placeholder="Tugas 1" value="{{ @$nilai_ps2->tugas1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas2s2" id="p_tugas2s2" placeholder="Tugas 2" value="{{ @$nilai_ps2->tugas2 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_tugas3s2" id="p_tugas3s2" placeholder="Tugas 3" value="{{ @$nilai_ps2->tugas3 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_pratikum1s2" id="p_pratikum1s2" placeholder="pratikum1" value="{{ @$nilai_ps2->praktikum1 ?? 100 }}" min="0" max="100">
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="p_pratikum2s2" id="p_pratikum2s2" placeholder="pratikum2" value="{{ @$nilai_ps2->praktikum2 ?? 100 }}" min="0" max="100">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('guru.dashboard.crud-nilai.index', ['jadwal_id' => $jadwal->id]) }}" type="submit" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
