<div class="card-item">
    <p><strong>Nama Pelapor:</strong> {{ $item['nama_pelapor'] }}</p>
    <p><strong>Lokasi:</strong> {{ $item['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $item['tinggi_genangan'] }} cm</p>
    <p><strong>Status:</strong> 
        @if($item['tinggi_genangan'] < 30)
            <span class="badge badge-waspada">Waspada</span>
        @elseif($item['tinggi_genangan'] >= 30 && $item['tinggi_genangan'] <= 70)
            <span class="badge badge-siaga">Siaga</span>
        @else
            <span class="badge badge-awas">Awas</span>
        @endif
    </p>
</div>