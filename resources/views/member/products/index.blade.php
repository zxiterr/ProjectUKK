<div style="margin-left:260px; padding:35px;">

    <h3 style="font-weight:700; margin-bottom:10px;">Produk Saya</h3>
    <p style="color:#64748b; margin-top:-5px;">Daftar produk yang anda tambahkan.</p>

    <a href="{{ route('member.products.create') }}"
       style="
           display:inline-block;
           background:#4a00e0;
           color:white;
           padding:10px 18px;
           border-radius:10px;
           font-weight:600;
           text-decoration:none;
           margin-bottom:20px;">
        + Tambah Produk
    </a>

    <div style="
        background:white;
        padding:25px;
        border-radius:12px;
        border:1px solid #e5e7f3;
        box-shadow:0px 3px 10px rgba(0,0,0,0.05);
        ">

        <table style="width:100%; border-collapse:collapse; font-size:15px;">

            <thead>
                <tr style="background:#f3f4f6; text-align:left;">
                    <th style="padding:12px; border-bottom:1px solid #e5e7eb;">Nama</th>
                    <th style="padding:12px; border-bottom:1px solid #e5e7eb;">Harga</th>
                    <th style="padding:12px; border-bottom:1px solid #e5e7eb;">Kategori</th>
                    <th style="padding:12px; border-bottom:1px solid #e5e7eb;">Gambar</th>
                    <th style="padding:12px; border-bottom:1px solid #e5e7eb;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $p)
                    <tr style="border-bottom:1px solid #f1f1f1;">
                        <td style="padding:12px;">{{ $p->name }}</td>

                        <td style="padding:12px;">Rp {{ number_format($p->price) }}</td>

                        <td style="padding:12px;">
                            {{ $p->category->name ?? 'Tidak ada kategori' }}
                        </td>

                        <td style="padding:12px;">
                            @if($p->image)
                                <img src="/uploads/products/{{ $p->image }}" width="80"
                                     style="border-radius:8px; border:1px solid #ddd;">
                            @else
                                <span style="color:#999;">Tidak ada gambar</span>
                            @endif
                        </td>

                        <td style="padding:12px;">
                            <a href="{{ route('member.products.edit', $p->id) }}"
                               style="
                                    padding:8px 12px;
                                    background:#2563eb;
                                    color:white;
                                    border-radius:6px;
                                    text-decoration:none;
                                    margin-right:5px;
                                    font-size:13px;
                                ">
                                Edit
                            </a>

                            <form action="{{ route('member.products.destroy', $p->id) }}"
                                  method="POST"
                                  style="display:inline-block;"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    style="
                                        padding:8px 12px;
                                        background:#dc2626;
                                        color:white;
                                        border:none;
                                        border-radius:6px;
                                        cursor:pointer;
                                        font-size:13px;
                                    ">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
