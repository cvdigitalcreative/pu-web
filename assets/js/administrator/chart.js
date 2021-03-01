$(document).ready(function () {

    // chart peserta
    var stringlabel = "";
    var stringcolor = "#4e73df";
    var chartP, chartKBS, ChartKBSExpand, chartKBJ, ChartKBJExpand;

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

    function drawChart(id_jenis, tahun) {
        if (id_jenis == 1) {
            stringcolor = "#4e73df"
        }
        if (id_jenis == 2 || id_jenis == 3) {
            stringcolor = "#f6c23e"
        }
        else if (id_jenis == 4 || id_jenis == 5) {
            stringcolor = "#36b9cc"
        }
        $.ajax({
            url: `${BASE_URL}Dashboard/dataChart/${id_jenis}/${tahun}`,
            method: "GET",
            success: function (data) {
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
                    options: {}
                });
            }
        });
    }


    $('#chart-filter-tahun').on('change', function () {
        var filterJenis = $('#chart-filter-data').val()
        var filterTahun = $('#chart-filter-tahun').val()
        chartP.destroy();
        drawChart(filterJenis, filterTahun);
    })
    $('#chart-filter-data').on('change', function () {
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
            success: function (data) {
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
                    options: {}
                });
            }
        });
    }
    
    document.getElementById("chartKegiatanStatus").onclick = function (evt) {
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
        $('#btn-close-expand-status').on('click', function () {
            x.style.display = "none";
        })
    };
    
    function drawChartKegiatanStatusProvinsi(tahun, status) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyStatusprovinsi/${tahun}/${status}`,
            method: "GET",
            success: function (data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].kabupaten_kota);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;
                
                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                document.getElementById("labelexpandkegiatanbystatus").innerHTML = "Detail data kegiatan untuk status " + status + " (" + tahun + ")" ;                
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

    $('#chart-filter-tahun-kegiatan-status').on('change', function () {
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
            success: function (data) {
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
                document.getElementById("labelChartKegiatanJenis").innerHTML = "Data kegiatan berdasarkan Jenis (" + tahun +")";                
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
                    options: {}
                });
            }
        });
    }

    document.getElementById("chartKegiatanJenis").onclick = function (evt) {
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
        $('#btn-close-expand-jenis').on('click', function () {
            y.style.display = "none";
        })
    };

    function drawChartKegiatanJenisProvinsi(tahun, jenis) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyJenisprovinsi/${tahun}/${jenis}`,
            method: "GET",
            success: function (data) {
                var label = [];
                var value = [];
                i = 0;
                do {
                    label.push(data.data.grafik[i].kabupaten_kota);
                    value.push(data.data.grafik[i].jumlah_kegiatan);
                    i++;
                
                } while (i < data.data.grafik.length);
                var tahun = data.data.tahun;
                document.getElementById("labelexpandkegiatanbyjenis").innerHTML = "Detail data kegiatan untuk jenis " + jenis + " (" + tahun + ")" ;                
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

    $('#chart-filter-tahun-kegiatan-jenis').on('change', function () {
        var filter = $('#chart-filter-tahun-kegiatan-jenis').val()
        tahunJenis = filter;
        var y = document.getElementById("expand-provinsi-jenis");
        if (y.style.display === "block") {
            y.style.display = "none";
        }
        chartKBJ.destroy()
        drawChartKegiatanJenis(filter);
    })

    function drawChartKegiatanProvinsi(tahun) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanbyProvinsi/${tahun}`,
            method: "GET",
            success: function (data) {
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
                document.getElementById("labelChartKegiatanProvinsi").innerHTML = "Data kegiatan berdasarkan Provinsi (" + tahun +")";                
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
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            }
        });
    }

    $('#chart-filter-tahun-kegiatan-provinsi').on('change', function () {
        var filter = $('#chart-filter-tahun-kegiatan-provinsi').val()
        chartKBP.destroy()
        drawChartKegiatanProvinsi(filter);
    })

});