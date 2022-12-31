<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Saya</title>
    <link rel="stylesheet" href="Style/Profile.css">
</head>
<body>
    @yield('Navbar')
    <div class="profile">
        <div class="title">Profil Saya </div>
        @php
            $user = Auth::user() ?? Auth::guard('admin')->user() ?? Auth::guard('guru')->user() ?? Auth::guard('walisiswa')->user();
        @endphp
        <div class="profile-base">
            <div class="img-profile">
                <img src="/assets/img-profile.jpg" class="image-profile">
            </div>
            <div class="biodata">

            @auth('siswa')
                <tbody><tr>
                    <td valign="top">
                    <table  width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                        <tr>
                            <td width="200px" valign="top" class="textt">Nama</td>
                            <td width="25px">:</td>
                            <td class="text1">{{ $user->nama }}</td>
                        </tr>

                        <tr>
                            <td class="textt">NIS</td>
                            <td>:</td>
                            <td class="text1">{{ $user->nis }}</td>

                        </tr>

                        <tr>
                            <td class="textt">Kelas</td>
                            <td>:</td>
                            <td class="text1">{{ $user->kelas->nama_kelas }}</td>
                        </tr>
                        <tr>
                            <td class="textt">TTL</td>
                            <td>:</td>
                            <td class="text1">{{ $user->tempat_lahir }}, {{ $user->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <td class="textt">Jenis Kelamin</td>
                            <td>:</td>
                            <td class="text1">{{ $user->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td valign="top" class="textt">Agama</td>
                            <td valign="top">:</td>
                            <td class="text1">{{ $user->agama }}</td>
                        </tr>

                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
            @endauth

            @auth('guru')
                <tbody><tr>
                    <td valign="top">
                    <table  width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                        <tr>
                            <td width="200px" valign="top" class="textt">Nama</td>
                            <td width="25px">:</td>
                            <td class="text1">{{ $user->nama }}</td>
                        </tr>

                        <tr>
                            <td class="textt">NIP</td>
                            <td>:</td>
                            <td class="text1">{{ $user->nip }}</td>

                        </tr>

                        <tr>
                            <td class="textt">Alamat</td>
                            <td>:</td>
                            <td class="text1">{{ $user->alamat }}</td>

                        </tr>

                        <tr>
                            <td class="textt">TTL</td>
                            <td>:</td>
                            <td class="text1">{{ $user->tempat_lahir }}, {{ $user->tgl_lahir }}</td>

                        </tr>

                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
            @endauth

            @auth('admin')
                <tbody><tr>
                    <td valign="top">
                    <table  width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                        <tr>
                            <td width="200px" valign="top" class="textt">Nama</td>
                            <td width="25px">:</td>
                            <td class="text1">{{ $user->nama }}</td>
                        </tr>

                        <tr>
                            <td class="textt">Alamat</td>
                            <td>:</td>
                            <td class="text1">{{ $user->alamat }}</td>

                        </tr>

                        <tr>
                            <td class="textt">TTL</td>
                            <td>:</td>
                            <td class="text1">{{ $user->tempat_lahir }}, {{ $user->tgl_lahir }}</td>

                        </tr>

                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
            @endauth


            @auth('walisiswa')
                <tbody><tr>
                    <td valign="top">
                    <table  width="100%" style="padding-left: 2px; padding-right: 13px;">
                        <tbody>
                        <tr>
                            <td width="200px" valign="top" class="textt">Nama</td>
                            <td width="25px">:</td>
                            <td class="text1">{{ $user->nama }}</td>
                        </tr>

                        <tr>
                            <td class="textt">Email</td>
                            <td>:</td>
                            <td class="text1">{{ $user->email }}</td>

                        </tr>

                        <tr>
                            <td class="textt">Nomor Telepon</td>
                            <td>:</td>
                            <td class="text1">{{ $user->tlpn }}</td>

                        </tr>

                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
            @endauth

            </div>
                </div>
            </div>
            </div>
        </div>
        @auth('siswa')
            <form action= {{ route('Profile/KartuDigital') }}>
                <div class="button">
                <input class="button-text" type="submit" value="Kartu Pelajar Digital" />
                </div>
            </div>
        @endauth
        </form>
</body>
</html>
