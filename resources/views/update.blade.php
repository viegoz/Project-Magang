<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="UpdatePage">
    <form action="{{ route('update.update', $data->id ?? '') }}" method="post" id="updateForm">
        @csrf
        @method('PUT')
        <div class="Rectangle2"></div>
        <div class="Frame31">
            <div class="Frame28">
                <div class="Entry">Update</div>
            </div>
            <div class="Frame30">
                <div class="Frame16">
                    <div class="Frame14">
                        <div class="Frame4">
                            <div class="NomorNde">Nomor NDE</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <select class="Rectangle4" name="nomor_nde" id="nomorNdeSelect">
                                    <option value="">--Pilih Nomor NDE--</option>
                                    @foreach($allData as $item)
                                        <option value="{{ $item->id }}" {{ isset($data) && $data->nomor_nde == $item->nomor_nde ? 'selected' : '' }}>
                                            {{ $item->nomor_nde }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="Frame15">
                        <div class="Frame4">
                            <div class="TanggalEdit">Tanggal Edit</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="date" class="Rectangle4" name="tanggal_edit" value="{{ \Carbon\Carbon::now()->toDateString() }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="Frame16">
                        <div class="Frame4">
                            <div class="Perihal">Perihal</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" name="perihal" id="perihalField" value="{{ $data->perihal ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="Frame17">
                        <div class="Frame4">
                            <div class="Keterangan">Keterangan</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <input type="text" class="Rectangle4" name="keterangan" value="{{ $data->keterangan ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="Frame18">
                        <div class="Frame4">
                            <div class="Status">Status</div>
                        </div>
                        <div class="Frame3">
                            <div class="Frame2">
                                <select class="Rectangle4" name="status">
                                    <option value="Diterima" {{ isset($data) && $data->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                    <option value="Ditolak" {{ isset($data) && $data->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="Frame23">
                        <button class="Submit" type="submit">UPDATE</button>
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
<script>
$(document).ready(function() {
    $('#nomorNdeSelect').change(function() {
        var selectedId = $(this).val();
        if (selectedId) {
            $.ajax({
                url: '{{ route("getPerihalByNde") }}',
                type: 'GET',
                data: { id: selectedId },
                success: function(response) {
                    $('#perihalField').val(response.perihal);
                    $('#updateForm').attr('action', '{{ url("update") }}/' + selectedId);
                }
            });
        } else {
            $('#perihalField').val('');
            $('#updateForm').attr('action', '{{ route("update.update", "") }}');
        }
    });
});
</script>
</body>
</html>
