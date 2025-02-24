<p align="center" style="font-weight:bold;font-size:16pt">LAPORAN DATA USER</p>

<table border="1" align="center" class=" table-auto">
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="100">Nama</th>
            <th width="200">Email</th>
            <th width="50">Status</th>
            <th width="100">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $user as $u )
        <tr>
            <td align="center">{{ $loop->iteration}}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td align="center">{{ $u->status }}</td>
            <td align="center">{{ $u->date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class=" flex">
    <div>
        <p align="center">
            <input type="button" value="Export Excel" id="downloadExcel">
        </p>
    </div>
    <div>
        <p align="center">
            <input type="button" value="Export PDF" id="downloadPDF">
        </p>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
        document.getElementById("downloadExcel").addEventListener("click", function () {
            let table = document.querySelector(".table-auto");
            let wb = XLSX.utils.book_new();
            let ws = XLSX.utils.table_to_sheet(table);
            XLSX.utils.book_append_sheet(wb, ws, "Laporan User");
            XLSX.writeFile(wb, "laporan_users.xlsx");
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.29/jspdf.plugin.autotable.min.js"></script>


    <script>
        document.getElementById("downloadPDF").addEventListener("click", function () {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Judul PDF
            doc.setFontSize(14);
            doc.text("Laporan Data User", 14, 15);
        
            // Ambil elemen tabel
            const table = document.querySelector(".table-auto");
            
            // Konversi tabel ke PDF menggunakan autoTable
            doc.autoTable({
                html: table,
                startY: 25, // Posisi mulai tabel di PDF
                theme: "grid", // Tema tabel
                headStyles: { fillColor: [52, 152, 219] }, // Warna header tabel
                alternateRowStyles: { fillColor: [240, 240, 240] }, // Warna selang-seling baris
                styles: { fontSize: 10 }
            });
        
            // Simpan PDF
            doc.save("laporan_users.pdf"); // Nama file PDF
        });
    </script>
