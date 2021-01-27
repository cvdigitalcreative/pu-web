<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body style="font-family: 'Times New Roman', Times, serif; width: 100%; height: 100%;">
    <div style="padding: 1rem;">
        <h6 style="text-align: right; font-size: 14px; font-style: normal;">FORMULIR F-01/DSM/I/03 Rev. : 01</h6>
        <h4 style="text-align: center; font-size: 20px; font-style: normal; line-height: 2rem;">CURRICULUM VITAE INSTRUKTUR <br> BIMTEK MANAGEMENT OF TRAINING (MOT)</h4>
        <h6 style="font-size: 13px;">TEMPAT / TANGGAL : PROV. JAMBI, 12 S/D 15 FEBRUARI 2018</h6>
        <div style="border-top: 2px solid black; margin-top: -1.75rem;"></div>

        <div style="padding-top: 2rem; padding-right: 3rem; padding-left: 3rem;">
            <table style="width: 100%;" cellspacing="10" cellpadding="4">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['nama_lengkap'] ?></td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['npwp'] ?></td>
                </tr>
                <tr>
                    <td>No. KTP</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['nik'] ?></td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['tempat_lahir'] ?>, <?= $tenaga_ahli['tanggal_lahir_text'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Rumah</td>
                    <td>:</td>
                    <td style="text-transform: capitalize;"><?= $tenaga_ahli['alamat_lengkap'] ?></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['email'] ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['no_handphone'] ?></td>
                </tr>
                <tr>
                    <td>Instansi/Tempat Kerja</td>
                    <td>:</td>
                    <td>PT. Perusahaan</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>Manajer of Human Resource</td>
                </tr>
                <tr>
                    <td>Pendidikan Formal</td>
                    <td>:</td>
                    <td><?= $tenaga_ahli['pendidikan'] ?></td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Pengalaman Kerja</td>
                    <td style="vertical-align: top;">:</td>
                    <td style="text-align:justify; text-transform: lowercase; vertical-align: top;">
                        <?php $index = 1;
                        if (count($tenaga_ahli['jabker']) != 0) :
                            foreach ($tenaga_ahli['jabker'] as $val) :
                                if ($index != count($tenaga_ahli['jabker'])) :
                                    echo $index . '. ' . $val['nama_jabker'] . '<br>';
                                else :
                                    echo $index . '. ' . $val['nama_jabker'];
                                endif;
                                $index++;
                            endforeach;
                        else :
                            echo "-";
                        endif; ?>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Kursus/Pelatihan yang Pernah Diikuti (Termasuk TOT/Asesor)</td>
                    <td style="vertical-align: top;">:</td>
                    <td style="text-align: justify; vertical-align: top;">-</td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">Bidang Materi Pelatihan yang Dikuasai (dibawakan)</td>
                    <td style="vertical-align: top;">:</td>
                    <td style="text-align: justify; vertical-align: top;">-</td>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>