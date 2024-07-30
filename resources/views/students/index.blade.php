<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Data Siswa PKL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Dashboard Data Siswa PKL di Departemen TI</h1>

    <div>
        <h2>Statistik</h2>
        <p>Total Siswa: {{ $totalStudents }}</p>
        <h3>Jumlah Siswa Berdasarkan Jurusan:</h3>
        <ul>
            @foreach($jurusanStats as $stat)
                <li>{{ $stat->jurusan }}: {{ $stat->total }}</li>
            @endforeach
        </ul>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Asal Sekolah</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->nama_lengkap }}</td>
                <td>{{ $student->jurusan }}</td>
                <td>{{ $student->asal_sekolah }}</td>
                <td>{{ $student->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Placeholder untuk komponen tambahan lainnya -->
</body>
</html>
