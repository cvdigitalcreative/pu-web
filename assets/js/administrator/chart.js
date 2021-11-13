$(document).ready(function() {

    // chart peserta
    var stringlabel = "";
    var stringcolor = "#4e73df";
    var chartP, chartKBS, ChartKBSExpand, chartKBJ, ChartKBJExpand, chartKBP, ChartKBPExpand, BalaiJasa;

    var d = new Date();
    var n = d.getFullYear();

    stringlabel = "Chart Data";
    document.getElementById("labelChart").innerHTML = stringlabel;
    drawChart($('#chart-filter-data').val(), n);
    drawChartKegiatanStatus(n);
    drawChartKegiatanJenis(n);
    drawChartKegiatanProvinsi(n);

    var x = document.getElementById("expand-provinsi-status");
    x.style.display = "none";

    var y = document.getElementById("expand-provinsi-jenis");
    y.style.display = "none";

    var z = document.getElementById("expand-kota-provinsi");
    z.style.display = "none";

    function drawChartBalaiJasa(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["Balai Jasa 1", "Balai Jasa 2", "Balai Jasa 3", "Balai Jasa 4", "Balai Jasa 5"]
            data = [60, 50, 90, 10, 10]
        }

        if (provinsi == 2) {
            label = ["Balai Jasa 1", "Balai Jasa 2", "Balai Jasa 3", "Balai Jasa 4", "Balai Jasa 5"]
            data = [18, 10, 80, 20, 30]
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
        var ctx = document.getElementById('BalaiJasa').getContext('2d');
        BalaiJasa = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Balai Jasa",
                    backgroundColor: stringcolor,
                    borderColor: stringcolor,
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

    drawChartBalaiJasa(0);
    $('#chart-filter-provinsi-balai-jasa').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-balai-jasa').val()
        drawChartBalaiJasa(provinsi);
    })






    function drawChart(id_jenis, tahun) {
        if (id_jenis == 1) {
            stringcolor = "#4e73df"
        }
        if (id_jenis == 2 || id_jenis == 3) {
            stringcolor = "#f6c23e"
        } else if (id_jenis == 4 || id_jenis == 5) {
            stringcolor = "#36b9cc"
        }
        $.ajax({
            url: `${BASE_URL}Dashboard/dataChart/${id_jenis}/${tahun}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].bulan);
                    value.push(data.data.grafik[i].jumlah);
                    i++;

                } while (i < data.data.grafik.length);
                var globallabel = data.data.keterangan;
                var tahun = data.data.tahun;
                stringlabel = globallabel + " tahun " + tahun;
                document.getElementById("labelChart").innerHTML = stringlabel;

                var ctx = document.getElementById('chartData').getContext('2d');
                chartP = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
                            backgroundColor: stringcolor,
                            borderColor: stringcolor,
                            data: value
                        }]
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
            }
        });
    }


    $('#chart-filter-tahun').on('change', function() {
        var filterJenis = $('#chart-filter-data').val()
        var filterTahun = $('#chart-filter-tahun').val()
        chartP.destroy();
        drawChart(filterJenis, filterTahun);
    })
    $('#chart-filter-data').on('change', function() {
        var filterJenis = $('#chart-filter-data').val()
        var filterTahun = $('#chart-filter-tahun').val()
        chartP.destroy();
        drawChart(filterJenis, filterTahun);
    })

    var tahunStatus = 0;

    function drawChartKegiatanStatus(tahun) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyStatus/${tahun}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].status_kegiatan);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                tahunStatus = tahun;
                document.getElementById("labelChartKegiatanStatus").innerHTML = "Data kegiatan berdasarkan Status (" + tahun + ")";
                var ctx = document.getElementById('chartKegiatanStatus').getContext('2d');
                chartKBS = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Total Kegiatan",
                            backgroundColor: '#36b9cc',
                            borderColor: '#36b9cc',
                            data: value
                        }]
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
            }
        });
    }

    document.getElementById("chartKegiatanStatus").onclick = function(evt) {
        var activePoints = chartKBS.getElementsAtEventForMode(evt, 'point', chartKBS.options);
        var firstPoint = activePoints[0];
        var label = chartKBS.data.labels[firstPoint._index];
        var x = document.getElementById("expand-provinsi-status");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        if (ChartKBSExpand != undefined) {
            ChartKBSExpand.destroy();
        }

        drawChartKegiatanStatusProvinsi(tahunStatus, label)
        $('#btn-close-expand-status').on('click', function() {
            x.style.display = "none";
        })
    };

    function drawChartKegiatanStatusProvinsi(tahun, status) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyStatusprovinsi/${tahun}/${status}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].kabupaten_kota);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                document.getElementById("labelexpandkegiatanbystatus").innerHTML = "Detail data kegiatan untuk status " + status + " (" + tahun + ")";
                var ctx = document.getElementById('chartExpandStatusProvinsi').getContext('2d');
                ChartKBSExpand = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Total Kegiatan",
                            backgroundColor: '#36b9cc',
                            borderColor: '#36b9cc',
                            data: value
                        }]
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
            }
        });
    }

    $('#chart-filter-tahun-kegiatan-status').on('change', function() {
        var filter = $('#chart-filter-tahun-kegiatan-status').val()
        chartKBS.destroy()
        tahunStatus = filter;
        var x = document.getElementById("expand-provinsi-status");
        if (x.style.display === "block") {
            x.style.display = "none";
        }
        drawChartKegiatanStatus(filter);
    })


    var tahunJenis = 0;

    function drawChartKegiatanJenis(tahun) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyJenis/${tahun}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].jenis_kegiatan);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                tahunJenis = tahun;
                document.getElementById("labelChartKegiatanJenis").innerHTML = "Data kegiatan berdasarkan Jenis (" + tahun + ")";
                var ctx = document.getElementById('chartKegiatanJenis').getContext('2d');
                chartKBJ = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Total Kegiatan",
                            backgroundColor: '#36b9cc',
                            borderColor: '#36b9cc',
                            data: value
                        }]
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
            }
        });
    }

    document.getElementById("chartKegiatanJenis").onclick = function(evt) {
        var activePoints = chartKBJ.getElementsAtEventForMode(evt, 'point', chartKBJ.options);
        var firstPoint = activePoints[0];
        var label = chartKBJ.data.labels[firstPoint._index];
        var y = document.getElementById("expand-provinsi-jenis");
        if (y.style.display === "none") {
            y.style.display = "block";
        }
        if (ChartKBJExpand != undefined) {
            ChartKBJExpand.destroy();
        }

        drawChartKegiatanJenisProvinsi(tahunJenis, label)
        $('#btn-close-expand-jenis').on('click', function() {
            y.style.display = "none";
        })
    };

    function drawChartKegiatanJenisProvinsi(tahun, jenis) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyJenisprovinsi/${tahun}/${jenis}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].kabupaten_kota);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                document.getElementById("labelexpandkegiatanbyjenis").innerHTML = "Detail data kegiatan untuk jenis " + jenis + " (" + tahun + ")";
                var ctx = document.getElementById('chartExpandJenisProvinsi').getContext('2d');
                ChartKBJExpand = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Total Kegiatan",
                            backgroundColor: '#36b9cc',
                            borderColor: '#36b9cc',
                            data: value
                        }]
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
            }
        });
    }

    $('#chart-filter-tahun-kegiatan-jenis').on('change', function() {
        var filter = $('#chart-filter-tahun-kegiatan-jenis').val()
        tahunJenis = filter;
        var y = document.getElementById("expand-provinsi-jenis");
        if (y.style.display === "block") {
            y.style.display = "none";
        }
        chartKBJ.destroy()
        drawChartKegiatanJenis(filter);
    })

    var tahunKota;

    function drawChartKegiatanProvinsi(tahun) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyProvinsi/${tahun}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                var value2 = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].provinsi);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    value2.push(data.data.grafik[i].total_peserta);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                tahunKota = tahun;
                document.getElementById("labelChartKegiatanProvinsi").innerHTML = "Data kegiatan berdasarkan Provinsi (" + tahun + ")";
                var ctx = document.getElementById('chartKegiatanProvinsi').getContext('2d');
                chartKBP = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                                label: "Total Kegiatan",
                                backgroundColor: '#36b9cc',
                                borderColor: '#36b9cc',
                                data: value
                            },
                            {
                                label: "Total Peserta",
                                backgroundColor: '#4e73df',
                                borderColor: '#4e73df',
                                data: value2
                            }
                        ]
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
            }
        });
    }

    document.getElementById("chartKegiatanProvinsi").onclick = function(evt) {
        var activePoints = chartKBP.getElementsAtEventForMode(evt, 'point', chartKBP.options);
        var firstPoint = activePoints[0];
        var label = chartKBP.data.labels[firstPoint._index];
        var z = document.getElementById("expand-kota-provinsi");
        if (z.style.display === "none") {
            z.style.display = "block";
        }
        if (ChartKBPExpand != undefined) {
            ChartKBPExpand.destroy();
        }

        drawChartKegiatanKotaProvinsi(tahunJenis, label)
        $('#btn-close-expand-kota').on('click', function() {
            z.style.display = "none";
        })
    };

    function drawChartKegiatanKotaProvinsi(tahun, provinsi) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyProvinsiKota/${tahun}/${provinsi}`,
            method: "GET",
            success: function(data) {
                var label = [];
                var value = [];
                var value2 = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].kabupaten_kota);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    value2.push(data.data.grafik[i].total_peserta);
                    i++;

                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                document.getElementById("labelexpandkegiatanbykota").innerHTML = "Detail data kegiatan untuk provinsi " + provinsi + " (" + tahun + ")";
                var ctx = document.getElementById('chartExpandKotaProvinsi').getContext('2d');
                ChartKBPExpand = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                                label: "Total Kegiatan",
                                backgroundColor: '#36b9cc',
                                borderColor: '#36b9cc',
                                data: value
                            },
                            {
                                label: "Total Peserta",
                                backgroundColor: '#4e73df',
                                borderColor: '#4e73df',
                                data: value2
                            }
                        ]
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
            }
        });
    }

    $('#chart-filter-tahun-kegiatan-provinsi').on('change', function() {
        var filter = $('#chart-filter-tahun-kegiatan-provinsi').val()
        tahunKota = filter;
        var z = document.getElementById("expand-kota-provinsi");
        if (z.style.display === "block") {
            z.style.display = "none";
        }
        chartKBP.destroy()
        drawChartKegiatanProvinsi(filter);
    })



});