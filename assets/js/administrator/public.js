$(document).ready(function() {



    function drawChartPendidikan(id_provinsi, kategori) {
        $.ajax({
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data[i].nama);
                    value.push(data.data[i].jumlah);
                    i++;

                } while (i < data.data.length);
                var ctx = document.getElementById('Mitra').getContext('2d');
                Pendidikan = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Kerja Sama Yang Belum Terlaksana",
                            backgroundColor: 'rgba(255, 0, 26, 0.1)',
                            borderColor: 'rgba(255, 0, 26, 0.1)',
                            data: value
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
            }
        });

    }
    drawChartPendidikan(15, 1);
    $('#chart-filter-provinsi-Pendidikan').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Pendidikan').val()
        drawChartPendidikan(provinsi, 1);
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


    function drawChartKegiatanJabker(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [350, 612]
        }
        if (provinsi == 1) {
            label = ["Jabker 1", "Jabker 2", "Jabker 3", "Jabker 4", "Jabker 5", "Jabker 6", "Jabker 7", "Jabker 8", "Jabker 9", "Jabker 10", "Jabker 11", "Jabker 12"]
            data = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
        }

        if (provinsi == 2) {
            label = ["Jabker 1", "Jabker 2", "Jabker 3", "Jabker 4", "Jabker 5", "Jabker 6", "Jabker 7", "Jabker 8", "Jabker 9", "Jabker 10", "Jabker 11", "Jabker 12"]
            data = [18, 10, 80, 20, 30, 8, 12, 34, 12, 90, 12, 60]
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
        var ctx = document.getElementById('Mitra3').getContext('2d');
        Peserta_Jabker = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Peserta Jabatan Kerja",
                    backgroundColor: ["#ff643f", "#56a700", "#007ea7", "#a70008"],
                    borderColor: "#56540f",
                    data: data
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

    drawChartKegiatanJabker(0);
    $('#chart-filter-provinsi-mitra3').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra3').val()
        drawChartKegiatanJabker(provinsi);
    })
});