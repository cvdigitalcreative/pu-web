$(document).ready(function () {

    // chart peserta
    var stringlabel = "";
    var chartP, chartTA, chartTT, chartK, chartKS;

    var d = new Date();
    var n = d.getFullYear();
    
    drawChart(n);

    function drawChart(tahun) {
        $.ajax({
            url: `${BASE_URL}Dashboard/dataPeserta/${tahun}`,
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
                $('#tab-link-peserta').on('click', function () {
                    stringlabel = globallabel + " tahun " + tahun;
                    document.getElementById("labelChart").innerHTML = stringlabel;
                })
                var ctx = document.getElementById('chartPeserta').getContext('2d');
                chartP = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
                            backgroundColor: '#4e73df',
                            borderColor: '#4e73df',
                            data: value
                        }]
                    },
                    options: {}
                });
            }
        });
    
    
        //chart Tenaga Ahli
        $.ajax({
            url: `${BASE_URL}Dashboard/dataTenagaAhli/${tahun}`,
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
                $('#tab-link-tenaga-ahli').on('click', function () {
                    stringlabel = globallabel + " tahun " + tahun;
                    document.getElementById("labelChart").innerHTML = stringlabel;
                })
                var ctx = document.getElementById('chartTenagaAhli').getContext('2d');
                chartTA = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
                            backgroundColor: '#f6c23e',
                            borderColor: '#f6c23e',
                            data: value
                        }]
                    },
                    options: {}
                });
            }
        });

        //chart Tenaga Terampil
        $.ajax({
            url: `${BASE_URL}Dashboard/dataTenagaTerampil/${tahun}`,
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
                $('#tab-link-tenaga-terampil').on('click', function () {
                    stringlabel = globallabel + " tahun " + tahun;
                    document.getElementById("labelChart").innerHTML = stringlabel;
                })
                var ctx = document.getElementById('chartTenagaTerampil').getContext('2d');
                chartTT = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
                            backgroundColor: '#f6c23e',
                            borderColor: '#f6c23e',
                            data: value
                        }]
                    },
                    options: {}
                });
            }
        });

        //chart Kegiatan
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatan/${tahun}`,
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
                $('#tab-link-kegiatan').on('click', function () {
                    stringlabel = globallabel + " tahun " + tahun;
                    document.getElementById("labelChart").innerHTML = stringlabel;
                })
                var ctx = document.getElementById('chartKegiatan').getContext('2d');
                chartK = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
                            backgroundColor: '#36b9cc',
                            borderColor: '#36b9cc',
                            data: value
                        }]
                    },
                    options: {}
                });
            }
        });

        //chart Kegiatan Selesai
        $.ajax({
            url: `${BASE_URL}Dashboard/dataKegiatanSelesai/${tahun}`,
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
                $('#tab-link-kegiatan-selesai').on('click', function () {
                    stringlabel = globallabel + " tahun " + tahun;
                    document.getElementById("labelChart").innerHTML = stringlabel;
                })
                var ctx = document.getElementById('chartKegiatanSelesai').getContext('2d');
                chartKS = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: globallabel,
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


    $('#chart-filter-tahun').on('change', function () {
        var filter = $('#chart-filter-tahun').val()
        chartP.destroy();
        chartTA.destroy();
        chartTT.destroy();
        chartK.destroy();
        chartKS.destroy();
        drawChart(filter);
    })
});