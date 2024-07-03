<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="PioEntryPage">
    <form action="{{ route('submit') }}" method="post">
        @csrf
        <div class="Rectangle2"></div>
        <div class="Frame31">
            <div class="Frame28">
                <div class="Entry">Entry</div>
            </div>
            <div class="Frame30">
                <div class="Frame16">
                    <div class="Frame14">
                        <div class="Frame4">
                            <div class="IdKantor">ID Kantor</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="ID Kantor" name="id_kantor">
                            </div>
                        </div>
                    </div>
                    <div class="Frame15">
                        <div class="Frame4">
                            <div class="NamaKantor">Nama Kantor</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Nama Kantor" name="nama_kantor">
                            </div>
                        </div>
                    </div>
                    <div class="Frame16">
                        <div class="Frame4">
                            <div class="JenisKantor">Jenis Kantor</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Jenis Kantor" name="jenis_kantor">
                            </div>
                        </div>
                    </div>
                    <div class="Frame17">
                        <div class="Frame4">
                            <div class="PsoNonPso">PSO/non PSO</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="PSO/non PSO" name="pso_non_pso">
                            </div>
                        </div>
                    </div>
                    <div class="Frame18">
                        <div class="Frame4">
                            <div class="KcuKc">KCU/KC</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="KCU/KC" name="kcu_kc">
                            </div>
                        </div>
                    </div>
                    <div class="Frame19">
                        <div class="Frame4">
                            <div class="NomorNde">Nomor NDE</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Nomor NDE" name="nomor_nde">
                            </div>
                        </div>
                    </div>
                    <div class="Frame20">
                        <div class="Frame4">
                            <div class="TanggalNde">Tanggal NDE</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Tanggal NDE" name="tanggal_nde">
                            </div>
                        </div>
                    </div>
                    <div class="Frame21">
                        <div class="Frame4">
                            <div class="Perihal">Perihal</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Perihal" name="perihal">
                            </div>
                        </div>
                    </div>
                    <div class="Frame22">
                        <div class="Frame4">
                            <div class="PejabatPengirimNde">Pejabat Pengirim NDE</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Pejabat Pengirim NDE" name="pejabat_pengirim_nde">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Frame29">
                    <div class="Frame17">
                        <div class="Frame22">
                            <div class="Frame4">
                                <div class="Regional">Regional</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Regional" name="regional">
                                </div>
                            </div>
                        </div>
                        <div class="Frame14">
                            <div class="Frame4">
                                <div class="JenisPengajuan">Jenis Pengajuan</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Jenis Pengajuan" name="jenis_pengajuan">
                                </div>
                            </div>
                        </div>
                        <div class="Frame15">
                            <div class="Frame4">
                                <div class="BiayaYangDiajukan">Biaya yang Diajukan</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Biaya yang Diajukan" name="biaya_yang_diajukan">
                                </div>
                            </div>
                        </div>
                        <div class="Frame16">
                            <div class="Frame4">
                                <div class="MasaSewa">Masa Sewa</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Masa Sewa" name="masa_sewa">
                                </div>
                            </div>
                        </div>
                        <div class="Frame17">
                            <div class="Frame4">
                                <div class="Tmt">Tmt</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Tmt" name="tmt">
                                </div>
                            </div>
                        </div>
                        <div class="Frame18">
                            <div class="Frame4">
                                <div class="Sd">Sd.</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Sd." name="sd">
                                </div>
                            </div>
                        </div>
                        <div class="Frame19">
                            <div class="Frame4">
                                <div class="Kinerja2021">Kinerja 2021</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Kinerja 2021" name="kinerja_2021">
                                </div>
                            </div>
                        </div>
                        <div class="Frame20">
                            <div class="Frame4">
                                <div class="Kinerja2022">Kinerja 2022</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Kinerja 2022" name="kinerja_2022">
                                </div>
                            </div>
                        </div>
                        <div class="Frame21">
                            <div class="Frame4">
                                <div class="Kinerja2023">Kinerja 2023</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="Kinerja 2023" name="kinerja_2023">
                                </div>
                            </div>
                        </div>
                        <div class="Frame23">
                            <button class="Submit" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="Frame27">
        <div class="PerpanjanganIzinOperasi">Perpanjangan Izin Operasi</div>
    </div>
    <div class="Frame26 top-menu">
        <div class="Frame24">
            <div class="Entry">Entry</div>
        </div>
        <div class="Frame25">
            <div class="Update">Update</div>
        </div>
        <div class="Frame26">
            <div class="Monitoring">Monitoring</div>
        </div>
    </div>
    <div class="Frame34">
        <div class="Frame33">
            <img class="Image3" src="images/logo.png" />
        </div>
        <div class="Frame32">
            <img class="Image4" src="images/poslogistics.png" />
            <img class="Image5" src="images/posproperti.png" />
            <img class="Image6" src="images/posfin.png" />
        </div>
    </div>
</div>
</body>
</html>
