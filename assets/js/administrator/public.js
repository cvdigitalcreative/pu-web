$(document).ready(function() {
    function drawChartPendidikan(provinsi) {
        if (provinsi == 0) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 60, 12, 23, 34]
            data2 = [50, 90, 12, 56, 89]
        }

        if (provinsi == 1) {
            label = ["Sumatera Selatan"]
            data1 = [40]
            data2 = [50]
        }

        if (provinsi == 2) {
            label = ["Jambi"]
            data1 = [60]
            data2 = [90]
        }




        // $.ajax({
        //     url: ``,
        //     method: "GET",
        //     success: function(data) {
        //         var label = [];
        //         var value = [];
        //         i = 0;
        //         do {
        //             label.push(data.data[i].employee_name);
        //             value.push(data.data[i].employee_salary);
        //             i++;

        //         } while (i < 2);
        var ctx = document.getElementById('Mitra').getContext('2d');
        Pendidikan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Kerja Sama Yang Belum Terlaksana",
                    backgroundColor: "#4e73df",
                    borderColor: "#4e73df",
                    data: data1
                }, {
                    label: "Kerja Sama Yang Terlaksana",
                    backgroundColor: "#f6c23e",
                    borderColor: "#f6c23e",
                    data: data2
                }],



            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //     }
        // });

    }
    drawChartPendidikan(0);
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        drawChartPendidikan(provinsi);
    })
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        $('#chart-filter-file-mitra').attr('href', provinsi);

    })
    $('a').attr('href', 'https://api.classico.id/pupr/uploads//file/file_materi_kegiatan/3._Dasar-Dasar_Keselamatan_Konstruksi_A2K4-I_(1)_1614697339.pdf');
});