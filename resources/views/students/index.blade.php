<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Data Siswa PKL</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }
        h1, h2 {
            color: #343a40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 15px;
            text-align: left;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
        tr:hover td {
            background-color: #e9ecef;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #fff;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .chart-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .navbar {
            background-color: #007bff;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #0056b3;
        }
        .navbar a.active {
            background-color: #0056b3;
            color: #fff;
        }
        .content {
            padding-top: 70px; /* Padding untuk menghindari tumpang tindih dengan navbar */
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#chart">Chart</a>
        <a href="#tabel">Tabel Data</a>
        <a href="#statistik">Statistik</a>
    </div>

    <div class="content">
        <div class="container">
            <h1 id="dashboard">Dashboard Data Siswa PKL di Departemen TI</h1>

            <div id="chart" class="chart-container">
                <canvas id="jurusanChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('jurusanChart').getContext('2d');
                const jurusanData = {
                    labels: @json($jurusanStats->pluck('jurusan')),
                    datasets: [{
                        label: 'Jumlah Siswa',
                        data: @json($jurusanStats->pluck('total')),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true,
                        tension: 0.4
                    }]
                };

                const config = {
                    type: 'line',
                    data: jurusanData,
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                };

                new Chart(ctx, config);
            </script>

            <div id="tabel">
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
            </div>

            <div id="statistik">
                <h2>Statistik</h2>
                <p>Total Siswa: {{ $totalStudents }}</p>
                <h3>Jumlah Siswa Berdasarkan Jurusan:</h3>
                <ul>
                    @foreach($jurusanStats as $stat)
                        <li>{{ $stat->jurusan }}: {{ $stat->total }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Ambil semua tautan dengan kelas .navbar a
        document.querySelectorAll('.navbar a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                // Hapus kelas 'active' dari semua tautan
                document.querySelectorAll('.navbar a').forEach(link => link.classList.remove('active'));

                // Tambahkan kelas 'active' pada tautan yang diklik
                this.classList.add('active');

                // Ambil ID dari href
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                // Scroll ke elemen target
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
