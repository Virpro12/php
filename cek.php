<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengguna yang Menyelesaikan PR</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
</head>
<body>
  <h2>Pengguna yang Menyelesaikan PR</h2>
  <canvas id="myChart"></canvas>

  <script>
    // Ganti data berikut dengan data Anda
    var data = {
      labels: ['Januari', 'Februari', 'Maret','april','mei'], // Sesuaikan label dengan periode data
      datasets: [{
        label: 'Pengguna yang Menyelesaikan PR',
        data: [10, 20, 30,40,50], // Ganti dengan data jumlah pengguna
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    };

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar', // Ganti dengan jenis chart yang diinginkan
      data: data,
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
</body>
</html>
