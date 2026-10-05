<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Mahasiswa</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
        body{background:linear-gradient(135deg,#1f0c1a 0%,#3b132f 30%,#5c1a4a 60%,#250d20 100%);min-height:100vh;padding:30px;position:relative;overflow:hidden;}
        .bintang{position:absolute;width:100%;height:100%;pointer-events:none;}
        .bintang span{position:absolute;width:5px;height:5px;background:#fbcfe8;border-radius:50%;box-shadow:0 0 10px #f472b6;animation:kedip 2.5s infinite ease-in-out;}
        @keyframes kedip{0%,100%{opacity:.3;transform:scale(1);}50%{opacity:1;transform:scale(1.6);}}
        h1{background:linear-gradient(90deg,#fbcfe8,#f9a8d4,#f472b6,#ec4899,#f472b6,#f9a8d4,#fbcfe8);background-size:400% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:jalurWarna 3.5s linear infinite;text-align:center;margin-bottom:30px;font-size:28px;}
        @keyframes jalurWarna{0%{background-position:0% 50%;}100%{background-position:400% 50%;}}
        .kotak{max-width:900px;margin:0 auto;background:rgba(255,255,255,.12);border-radius:24px;padding:30px;backdrop-filter:blur(12px);border:2px solid rgba(248,113,113,.35);animation:muncul .8s ease-out forwards;transform:translateY(20px);opacity:0;}
        @keyframes muncul{to{transform:translateY(0);opacity:1;}}
        .tambah{display:inline-block;background:linear-gradient(90deg,#be185d,#ec4899,#f472b6,#f9a8d4,#f472b6,#ec4899,#be185d);background-size:300% 100%;color:#fff;padding:12px 25px;border-radius:10px;text-decoration:none;font-weight:bold;margin-bottom:20px;animation:gerakWarna 3s linear infinite;}
        @keyframes gerakWarna{0%{background-position:0% 50%;}100%{background-position:300% 50%;}}
        .tambah:hover{transform:scale(1.05);}
        .pesan{background:rgba(74,222,128,.2);color:#bbf7d0;padding:12px;border-radius:8px;margin-bottom:20px;text-align:center;}
        table{width:100%;border-collapse:collapse;color:#fff;}
        th,td{padding:14px;text-align:left;border-bottom:1px solid rgba(255,255,255,.15);}
        th{color:#fef08a;}
        .lihat{color:#86efac;text-decoration:none;margin-right:10px;}
        .lihat:hover{color:#bbf7d0;}
        .ubah{color:#fbbf24;text-decoration:none;margin-right:10px;}
        .ubah:hover{color:#fef08a;}
        .hapus{color:#f87171;border:none;background:transparent;cursor:pointer;}
        .hapus:hover{color:#fca5a5;}
        .kembali{display:inline-block;margin-top:25px;color:rgba(255,255,255,.6);text-decoration:none;}
        .kembali:hover{color:#f472b6;}
    </style>
</head>
<body>
    <div class="bintang">
        <span style="top:10%;left:15%;"></span>
        <span style="top:25%;left:80%;animation-delay:.5s;"></span>
        <span style="top:50%;left:10%;animation-delay:1s;"></span>
        <span style="top:70%;left:85%;animation-delay:1.5s;"></span>
        <span style="top:85%;left:40%;animation-delay:2s;"></span>
    </div>
    <h1>📋 Daftar Data Mahasiswa</h1>
    <div class="kotak">
        @if(session('success'))<div class="pesan">{{ session('success') }}</div>@endif
        <a href="{{ route('mahasiswa.create') }}" class="tambah">➕ Tambah Data Baru</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $no => $mhs)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show',$mhs) }}" class="lihat">Lihat</a>
                        <a href="{{ route('mahasiswa.edit',$mhs) }}" class="ubah">Ubah</a>
                        <form action="{{ route('mahasiswa.destroy',$mhs) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="hapus" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="kembali">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>