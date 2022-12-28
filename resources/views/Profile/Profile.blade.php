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

            <div class="profile-base">
                <div class="img-profile">
                    <img src="/assets/img-profile.jpg" class="image-profile">
                </div>
                <div class="biodata">

                <tbody><tr>
                    <td valign="top">
                    <table  width="100%" style="padding-left: 2px; padding-right: 13px;">
                      <tbody>
                        <tr>
                          <td width="200px" valign="top" class="textt">Nama</td>
                            <td width="25px">:</td>
                            <td class="text1">Novi Roshidatu Aulia</td>
                        </tr>

                      <tr>
                          <td class="textt">NIS</td>
                            <td>:</td>
                            <td class="text1">2005121035</td>

                        </tr>

                      <tr>
                          <td class="textt">Kelas</td>
                            <td>:</td>
                            <td class="text1">X MIPA 1</td>
                        </tr>
                      <tr>
                          <td class="textt">TTL</td>
                            <td>:</td>
                            <td class="text1">Surabaya, 31 Agustus 1997</td>
                        </tr>
                      <tr>
                          <td class="textt">Jenis Kelamin</td>
                            <td>:</td>
                            <td class="text1">Perempuan</td>
                        </tr>
                      <tr>
                          <td valign="top" class="textt">Agama</td>
                            <td valign="top">:</td>
                            <td class="text1">Islam</td>
                        </tr>

                    </tbody></table>
                    </td>
                </tr>
                </tbody></table>
              </div>
                  </div>
                </div>
              </div>
            </div>
            <form action= {{ route('Profile/KartuDigital') }}>
                <div class="button">
                <input class="button-text" type="submit" value="Kartu Pelajar Digital" />
                </div>
            </div>
            </form>

            <div class="indent">
                test
            </div>



</body>
</html>
