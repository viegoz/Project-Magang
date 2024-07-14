<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="PioEntryPage">
    <form action="{{ route('submit') }}" method="post" id="entryForm">
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
                                <input type="text" class="Rectangle4" placeholder="ID Kantor" name="id_kantor" id="id_kantor" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="Frame15">
                        <div class="Frame4">
                            <div class="NamaKantor">Nama Kantor</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <select class="Rectangle4" name="nama_kantor" id="nama_kantor">
                                    <option value="" disabled selected>Pilih Nama Kantor</option>
                                    <!-- Nama kantor akan dimuat melalui JavaScript -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="Frame16">
                        <div class="Frame4">
                            <div class="JenisKantor">Jenis Kantor</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="Jenis Kantor" name="jenis_kantor" id="jenis_kantor" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="Frame17">
                        <div class="Frame4">
                            <div class="PsoNonPso">PSO/non PSO</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="PSO/non PSO" name="pso_non_pso" id="pso_non_pso" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="Frame18">
                        <div class="Frame4">
                            <div class="KcuKc">KCU/KC</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" placeholder="KCU/KC" name="kcu_kc" id="kcu_kc" readonly>
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
                                    <input type="text" class="Rectangle4" placeholder="Regional" name="regional" id="regional" readonly>
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
                                <div class="Kinerja2021">Kinerja2021</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="format : Kurlog, Jaskug, Ritel" name="kinerja_2021">
                                </div>
                            </div>
                        </div>
                        <div class="Frame20">
                            <div class="Frame4">
                                <div class="Kinerja2022">Kinerja2022</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="format : Kurlog, Jaskug, Ritel" name="kinerja_2022">
                                </div>
                            </div>
                        </div>
                        <div class="Frame21">
                            <div class="Frame4">
                                <div class="Kinerja2023">Kinerja2023</div>
                            </div>
                            <div class="Frame3">
                                <div class="Frame2">
                                    <input type="text" class="Rectangle4" placeholder="format : Kurlog, Jaskug, Ritel" name="kinerja_2023">
                                </div>
                            </div>
                        </div>
                        <!-- Hidden Input for tanggal_submit_surat -->
                        <input type="hidden" id="tanggalSubmitSurat" name="tanggal_submit_surat">
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
            <a href="{{ route('entry') }}" class="Entry">Entry</a>
        </div>
        <div class="Frame25">
            <a href="{{ route('update.edit') }}" class="Update">Update</a>
        </div>
        <div class="Frame26">
            <a href="monitoring" class="Monitoring">Monitoring</a>
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
<script>
    document.getElementById('entryForm').addEventListener('submit', function() {
        var now = new Date();
        var formattedDate = now.getFullYear() + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + ('0' + now.getDate()).slice(-2);
        document.getElementById('tanggalSubmitSurat').value = formattedDate;
    });

    // Load kantor list
    $.ajax({
        url: '{{ route("getKantorList") }}',
        method: 'GET',
        success: function(response) {
            if (response) {
                response.forEach(function(kantor) {
                    $('#nama_kantor').append(new Option(kantor.nama_kantor, kantor.nama_kantor));
                });
            }
        },
        error: function(xhr, status, error) {
            console.error('Error loading kantor list:', status, error);
        }
    });

    // AJAX call to populate fields based on nama_kantor
    $('#nama_kantor').on('change', function() {
        var namaKantor = $(this).val();
        if (namaKantor) {
            $.ajax({
                url: '{{ route("getKantorData") }}',
                method: 'GET',
                data: { nama_kantor: namaKantor },
                success: function(response) {
                    if (response) {
                        $('#id_kantor').val(response.id_kantor);
                        $('#jenis_kantor').val(response.jenis_kantor);
                        $('#pso_non_pso').val(response.pso_non_pso);
                        $('#kcu_kc').val(response.kcu + ', ' + response.kc);
                        $('#regional').val(response.regional);
                    } else {
                        console.error('No data found for the given nama_kantor');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                }
            });
        }
    });
</script>
</body>
</html>
