<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="PioEntryPage">
    <div class="Rectangle2"></div>
    <div class="Frame31">
        <div class="Frame28">
            <div class="Entry">Monitoring</div>
        </div>
        <div class="Frame30">
            <div class="Frame16">
                <!-- Form Filter -->
                <form method="GET" action="{{ route('monitoring') }}">
                    <div>
                        <label for="month">Bulan:</label>
                        <select name="month" id="month">
                            <option value="">--Pilih Bulan--</option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ request('month') == $i ? 'selected' : '' }}>
                                    {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                                </option>
                            @endfor
                        </select>
                        <label for="year">Tahun:</label>
                        <select name="year" id="year">
                            <option value="">--Pilih Tahun--</option>
                            @for ($i = 2020; $i <= date('Y'); $i++)
                                <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        <label for="regional">Regional:</label>
                        <input type="text" name="regional" id="regional" value="{{ request('regional') }}">
                        <label for="status">Status:</label>
                        <select name="status" id="status">
                            <option value="">--Pilih Status--</option>
                            <option value="Diterima" {{ request('status') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                        <button type="submit">Filter</button>
                    </div>
                </form>
                <!-- End Form Filter -->

                <!-- Tabel Data -->
                <table border="1">
                    <thead>
                    <tr>
                        <th>ID Kantor</th>
                        <th>Nama Kantor</th>
                        <th>Jenis Kantor</th>
                        <th>PSO/Non PSO</th>
                        <th>KCU/KC</th>
                        <th>Nomor NDE</th>
                        <th>Tanggal NDE</th>
                        <th>Perihal</th>
                        <th>Pejabat Pengirim NDE</th>
                        <th>Regional</th>
                        <th>Jenis Pengajuan</th>
                        <th>Biaya yang Diajukan</th>
                        <th>Masa Sewa</th>
                        <th>TMT</th>
                        <th>SD</th>
                        <th>Kinerja 2021</th>
                        <th>Kinerja 2022</th>
                        <th>Kinerja 2023</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Tanggal Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_kantor }}</td>
                            <td>{{ $item->nama_kantor }}</td>
                            <td>{{ $item->jenis_kantor }}</td>
                            <td>{{ $item->pso_non_pso }}</td>
                            <td>{{ $item->kcu_kc }}</td>
                            <td>{{ $item->nomor_nde }}</td>
                            <td>{{ $item->tanggal_nde }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>{{ $item->pejabat_pengirim_nde }}</td>
                            <td>{{ $item->regional }}</td>
                            <td>{{ $item->jenis_pengajuan }}</td>
                            <td>{{ $item->biaya_yang_diajukan }}</td>
                            <td>{{ $item->masa_sewa }}</td>
                            <td>{{ $item->tmt }}</td>
                            <td>{{ $item->sd }}</td>
                            <td>{{ $item->kinerja_2021 }}</td>
                            <td>{{ $item->kinerja_2022 }}</td>
                            <td>{{ $item->kinerja_2023 }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->tanggal_edit }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Tabel Data -->
            </div>
        </div>
    </div>
    <div class="Frame27">
        <div class="PerpanjanganIzinOperasi">Perpanjangan Izin Operasi</div>
    </div>
    <div class="Frame26 top-menu">
        <div class="Frame24">
            <a href="{{ route('entry') }}" class="Entry">Entry</a>
        </div>
        <div class="Frame25">
            <a href="{{ route('update.edit', ['id' => 1]) }}" class="Update">Update</a>
        </div>
        <div class="Frame26">
            <a href="{{ route('monitoring') }}" class="Monitoring">Monitoring</a>
        </div>
    </div>
    <div class="Frame34">
        <div class="Frame33">
            <img class="Image3" src="{{ asset('images/logo.png') }}" />
        </div>
        <div class="Frame32">
            <img class="Image4" src="{{ asset('images/poslogistics.png') }}" />
            <img class="Image5" src="{{ asset('images/posproperti.png') }}" />
            <img class="Image6" src="{{ asset('images/posfin.png') }}" />
        </div>
    </div>
</div>
</body>
</html>
