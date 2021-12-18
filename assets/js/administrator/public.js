$(document).ready(function() {
    function drawChartPendidikan(provinsi) {
        if (provinsi == 0) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 60, 12, 23, 34]
            data2 = [50, 90, 12, 56, 89]
        }

        if (provinsi == 1) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [48, 60, 62, 23, 34]
            data2 = [58, 90, 19, 56, 89]
        }

        if (provinsi == 2) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 90, 12, 3, 34]
            data2 = [50, 90, 82, 96, 89]
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
            type: 'line',
            data: {
                labels: label,
                datasets: [{
                    label: "Kerja Sama Yang Belum Terlaksana",
                    backgroundColor: 'rgba(255, 0, 26, 0.1)',
                    borderColor: 'rgba(255, 0, 26, 0.1)',
                    data: data1
                }, {
                    label: "Kerja Sama Yang Terlaksana",
                    backgroundColor: 'rgba(0,225, 51, 0.1)',
                    borderColor: 'rgba(0,225, 51, 0.1)',
                    data: data2
                }],



            },
            options: {
                responsive: true,
                fill: false,
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

    function drawChartBalai(provinsi) {
        if (provinsi == 0) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 60, 12, 23, 34]
            data2 = [50, 90, 12, 56, 89]
        }

        if (provinsi == 1) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [48, 60, 62, 23, 34]
            data2 = [58, 90, 19, 56, 89]
        }

        if (provinsi == 2) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 90, 12, 3, 34]
            data2 = [50, 90, 82, 96, 89]
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
        var ctx = document.getElementById('Balai').getContext('2d');
        Pendidikan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Kerja Sama Yang Belum Terlaksana",
                    backgroundColor: 'rgba(255, 0, 26, 0.1)',
                    borderColor: 'rgba(255, 0, 26, 0.1)',
                    data: data1
                }, {
                    label: "Kerja Sama Yang Terlaksana",
                    backgroundColor: 'rgba(0,225, 51, 0.1)',
                    borderColor: 'rgba(0,225, 51, 0.1)',
                    data: data2
                }],



            },
            options: {
                responsive: true,
                fill: false,
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
    drawChartBalai(0);
    $('#chart-filter-provinsi-balai').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-balai').val()
        drawChartBalai(provinsi);
    })
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        $('#chart-filter-file-mitra').attr('href', provinsi);

    })

    function drawChartBalai1(provinsi) {
        if (provinsi == 0) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 60, 12, 23, 34]
            data2 = [50, 90, 12, 56, 89]
        }

        if (provinsi == 1) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [48, 60, 62, 23, 34]
            data2 = [58, 90, 19, 56, 89]
        }

        if (provinsi == 2) {
            label = ["Smk", "Politeknik", "Perguruan Tinggi", "Balai Sektoral PUPR", "Asosiasi Profesi"]
            data1 = [40, 90, 12, 3, 34]
            data2 = [50, 90, 82, 96, 89]
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
        var ctx = document.getElementById('Balai1').getContext('2d');
        Pendidikan = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: label,
                datasets: [{
                    label: "Kerja Sama Yang Belum Terlaksana",
                    backgroundColor: 'rgba(255, 0, 26, 0.1)',
                    borderColor: 'rgba(255, 0, 26, 0.1)',
                    data: data1
                }, {
                    label: "Kerja Sama Yang Terlaksana",
                    backgroundColor: 'rgba(0,225, 51, 0.1)',
                    borderColor: 'rgba(0,225, 51, 0.1)',
                    data: data2
                }],



            },
            options: {
                responsive: true,
                fill: false,
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
    drawChartBalai1(0);
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        drawChartBalai1(provinsi);
    })
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        $('#chart-filter-file-mitra').attr('href', provinsi);

    })
});