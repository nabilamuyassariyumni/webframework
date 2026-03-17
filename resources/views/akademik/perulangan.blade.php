<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Perulangan</title>
</head>
<body>
    <div class="container">
        <h2>Perulangan While</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
                @foreach ($total_nilai as $nilai)
                    @if ($nilai < 50 )
                        @break
                    @endif
                    <div class="alert alert-danger d-inline-block">{{ $nilai }}</div>
                @endforeach
            
            {{--<h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
                @foreach ($total_nilai as $nilai)
                    @if ($nilai < 50 )
                        @continue
                    @endif
                    <div class="alert alert-danger d-inline-block">{{ $nilai }}</div>
                @endforeach--}}

            {{--Perulangan Forelse--}}
            {{--<h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
            @forelse ($total_nilai as $val)
                @if (($val >= 0) and ($val <50))
                    <div class="alert alert-warning d-inline-block"> {{ $val }}</div>
                @elseif(($val >=50) and ($val <100))
                    <div class="alert alert-success d-inline-block"> {{ $val }}</div>
                @endif
                @empty
                <div class="alert alert-danger d-inline-block">Data Tidak Valid</div>
            @endforelse--}}

            {{--Pengulangan foreach--}}
            {{-- <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
                @foreach ($total_nilai as $nilai)
                <div class="alert alert-info d-inline-block">{{ $nilai }}</div>
                @endforeach --}}

            {{--Perulangan While --}}
            {{-- <?php $i=1; ?>
            @while ($i < 5)
                Looping ke {{ $i }} <br/>
                <?php $i++?>
            @endwhile --}}
        </div>
    </div>
</body>
</html>