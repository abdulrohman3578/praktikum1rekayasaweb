<!DOCTYPE html>
<html>
<head>
    <title>Tabel Destinasi Wisata dari JSON</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Destinasi Wisata</h2>
    <table id="wisataTable">
        <thead>
            <tr>
                <th>KOTA</th>
                <th>LANDMARK</th>
                <th>TARIF</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan diisi oleh JavaScript -->
        </tbody>
    </table>

    <script>
        // Data JSON
        const dataWisata = [
            { kota: "SEMARANG", landmark: "LAWANG SEWU", tarif: "20000" },
            { kota: "YOGYAKARTA", landmark: "PRAMBANAN", tarif: "35000" },
            { kota: "MAGELANG", landmark: "BOROBUDUR", tarif: "45000" },
            { kota: "SURAKARTA", landmark: "PGS", tarif: "GRATIS" }
        ];

        // Mengisi tabel dengan data JSON
        const tableBody = document.querySelector('#wisataTable tbody');
        dataWisata.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.kota}</td>
                <td>${item.landmark}</td>
                <td>${item.tarif}</td>
            `;
            tableBody.appendChild(row);
        });
    </script>
</body>
</html>