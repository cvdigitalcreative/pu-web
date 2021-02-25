$(document).ready(function () {

    // chart peserta
    var stringlabel = "";
    var stringcolor = "#4e73df";
    var chartP, chartTA, chartTT, chartK, chartKS, chartKBS, chartKBJ;

    var d = new Date();
    var n = d.getFullYear();
    
    stringlabel = "Chart Data";
    document.getElementById("labelChart").innerHTML = stringlabel;
    drawChart($('#chart-filter-data').val(), n);
    drawChartKegiatanStatus(n);
    drawChartKegiatanJenis(n);
    drawChartKegiatanProvinsi(n);

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
                console.log(data);
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

    $('#chart-filter-tahun-kegiatan-status').on('change', function () {
        var filter = $('#chart-filter-tahun-kegiatan-status').val()
        chartKBS.destroy()
        drawChartKegiatanStatus(filter);
    })


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

    $('#chart-filter-tahun-kegiatan-jenis').on('change', function () {
        var filter = $('#chart-filter-tahun-kegiatan-jenis').val()
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