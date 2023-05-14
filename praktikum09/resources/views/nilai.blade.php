@php
    $nama = "Lidiana"
    $nilai = 90;
@endphp

@if ($nilai > 80)
    @php
        $sket = 'lulus';
    @endphp 
@else
    @php
        $sket = 'Gagal';
    @endphp
@endif

Siswa {{$nama}} dinyatakan {{$sket}}