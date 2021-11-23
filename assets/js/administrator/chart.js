$(document).ready(function() {

    // chart peserta
    var stringlabel = "";
    var stringcolor = "#4e73df";
    var chartP, chartKBS, ChartKBSExpand, chartKBJ, ChartKBJExpand, chartKBP, ChartKBPExpand, BalaiJasa, JasaKonstruksi, Pendidikan, BUJK, APBN_APBD, Asosiasi_Profesi, AKTK, Kegiatan_Pie;

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
                    backgroundColor: "#287674",
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


    function drawChartJasaKonstruksi(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["Jasa Konstruksi 1", "Jasa Konstruksi 2", "Jasa Konstruksi 3", "Jasa Konstruksi 4", "Jasa Konstruksi 5", "Jasa Konstruksi 6", "Jasa Konstruksi 7", "Jasa Konstruksi 8", "Jasa Konstruksi 9", "Jasa Konstruksi 10", "Jasa Konstruksi 11", "Jasa Konstruksi 12"]
            data = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
        }

        if (provinsi == 2) {
            label = ["Jasa Konstruksi 1", "Jasa Konstruksi 2", "Jasa Konstruksi 3", "Jasa Konstruksi 4", "Jasa Konstruksi 5", "Jasa Konstruksi 6", "Jasa Konstruksi 7", "Jasa Konstruksi 8", "Jasa Konstruksi 9", "Jasa Konstruksi 10", "Jasa Konstruksi 11", "Jasa Konstruksi 12"]
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
        var ctx = document.getElementById('JasaKonstruksi').getContext('2d');
        JasaKonstruksi = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Jasa Konstruksi",
                    backgroundColor: "#287674",
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

    drawChartJasaKonstruksi(0);
    $('#chart-filter-provinsi-jasa-konstruksi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-jasa-konstruksi').val()
        drawChartJasaKonstruksi(provinsi);
    })


    function drawChartPendidikan() {
        label = ["Sumatera Selatan", "Jambi", "Jakarta", "Medan", "Padang"]
        data1 = [40, 60, 12, 23, 34]
        data2 = [50, 90, 12, 56, 89]
        data3 = [80, 90, 45, 91, 76]


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
        var ctx = document.getElementById('Pendidikan').getContext('2d');
        Pendidikan = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Universitas",
                    backgroundColor: "#4e73df",
                    borderColor: "#4e73df",
                    data: data1
                }, {
                    label: "Politeknik",
                    backgroundColor: "#f6c23e",
                    borderColor: "#f6c23e",
                    data: data2
                }, {
                    label: "SMK",
                    backgroundColor: "#36b9cc",
                    borderColor: "#36b9cc",
                    data: data3
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

    drawChartPendidikan();

    function drawChartBUJK(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["BUJK 1", "BUJK 2", "BUJK 3", "BUJK 4", "BUJK 5"]
            data = [18, 18, 10, 76, 16]
        }

        if (provinsi == 2) {
            label = ["BUJK 1", "BUJK 2", "BUJK 3", "BUJK 4", "BUJK 5"]
            data = [18, 10, 90, 20, 30]
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
        var ctx = document.getElementById('BUJK').getContext('2d');
        BUJK = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "BUJK",
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

    drawChartBUJK(0);
    $('#chart-filter-provinsi-BUJK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-BUJK').val()
        drawChartBUJK(provinsi);
    })

    function drawChartAsosiasiProfesi(provinsi) {


        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["Asosiasi Profesi 1", "Asosiasi Profesi 2", "Asosiasi Profesi 3", "Asosiasi Profesi 4", "Asosiasi Profesi 5"]
            data = [12, 10, 67, 45, 30]
        }

        if (provinsi == 2) {
            label = ["Asosiasi Profesi 1", "Asosiasi Profesi 2", "Asosiasi Profesi 3", "Asosiasi Profesi 4", "Asosiasi Profesi 5"]
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
        var ctx = document.getElementById('Asosiasi_Profesi').getContext('2d');
        Asosiasi_Profesi = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Asosiasi Profesi",
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

    drawChartAsosiasiProfesi(0);
    $('#chart-filter-provinsi-asosiasi-profesi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-asosiasi-profesi').val()
        drawChartAsosiasiProfesi(provinsi);
    })

    function drawChartAKTK(provinsi) {


        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["AKTK 1", "AKTK 2", "AKTK 3", "AKTK 4", "AKTK 5"]
            data = [12, 10, 67, 45, 30]
        }

        if (provinsi == 2) {
            label = ["AKTK 1", "AKTK 2", "AKTK 3", "AKTK 4", "AKTK 5"]
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
        var ctx = document.getElementById('AKTK').getContext('2d');
        AKTK = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "AKTK",
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

    drawChartAKTK(0);
    $('#chart-filter-provinsi-aktk').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-aktk').val()
        drawChartAKTK(provinsi);
    })

    function drawChartAKBU() {

        label = ["Sumatera Selatan", "Jambi", "Jakarta"]
        data = [40, 60, 90]




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
        var ctx = document.getElementById('AKBU').getContext('2d');
        AKBU = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "AKBU",
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

    drawChartAKBU();

    function drawChartIALKI(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [40, 60]
        }
        if (provinsi == 1) {
            label = ["Instruktur 1", "Instruktur 2", "Instruktur 3", "Instruktur 4", "Instruktur 5", "Instruktur 6", "Instruktur 7", "Instruktur 8", "Instruktur 9", "Instruktur 10", "Instruktur 11", "Instruktur 12"]
            data = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
        }

        if (provinsi == 2) {
            label = ["Instruktur 1", "Instruktur 2", "Instruktur 3", "Instruktur 4", "Instruktur 5", "Instruktur 6", "Instruktur 7", "Instruktur 8", "Instruktur 9", "Instruktur 10", "Instruktur 11", "Instruktur 12"]
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
        var ctx = document.getElementById('IALKI').getContext('2d');
        IALKI = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Data IALKI",
                    backgroundColor: "#2813674",
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

    drawChartIALKI(0);
    $('#chart-filter-provinsi-ialki').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-ialki').val()
        drawChartIALKI(provinsi);
    })

    function drawChartPadatKarya(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data = [350, 612]
        }
        if (provinsi == 1) {
            label = ["Program 1", "Program 2", "Program 3", "Program 4", "Program 5", "Program 6", "Program 7", "Program 8", "Program 9", "Program 10", "Program 11", "Program 12"]
            data = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
        }

        if (provinsi == 2) {
            label = ["Program 1", "Program 2", "Program 3", "Program 4", "Program 5", "Program 6", "Program 7", "Program 8", "Program 9", "Program 10", "Program 11", "Program 12"]
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
        var ctx = document.getElementById('Padat_Karya').getContext('2d');
        JasaKonstruksi = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Program Padat Karya",
                    backgroundColor: "#007ea7",
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

    drawChartPadatKarya(0);
    $('#chart-filter-provinsi-padat-karya').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-padat-karya').val()
        drawChartPadatKarya(provinsi);
    })

    function drawChartAPBNAPBDByProvinsi(provinsi) {
        if (provinsi == 0) {
            label = ["Sumatera Selatan", "Jambi"]
            data1 = [40, 60]
            data2 = [45, 80]
            data3 = [47, 90]
        }

        if (provinsi == 1) {
            label = ["Kabupaten 1", "Kabupaten 2", "Kabupaten 3", "Kabupaten 4", "Kabupaten 5", "Kabupaten 6", "Kabupaten 7", "Kabupaten 8", "Kabupaten 9", "Kabupaten 10", "Kabupaten 11", "Kabupaten 12"]
            data1 = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
            data2 = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
            data3 = [60, 50, 90, 10, 10, 5, 10, 89, 90, 20, 12, 13]
        }

        if (provinsi == 2) {
            label = ["Kabupaten 1", "Kabupaten 2", "Kabupaten 3", "Kabupaten 4", "Kabupaten 5", "Kabupaten 6", "Kabupaten 7", "Kabupaten 8", "Kabupaten 9", "Kabupaten 10", "Kabupaten 11", "Kabupaten 12"]
            data1 = [18, 10, 80, 20, 30, 8, 12, 34, 12, 90, 12, 60]
            data2 = [18, 10, 80, 20, 30, 8, 12, 34, 12, 90, 12, 60]
            data3 = [18, 10, 80, 20, 30, 8, 12, 34, 12, 90, 12, 60]
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
        var ctx = document.getElementById('APBN_APBD').getContext('2d');
        APBN_APBD = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "APBN",
                    backgroundColor: "#007ea7",
                    borderColor: stringcolor,
                    data: data1
                }, {
                    label: "APBD",
                    backgroundColor: "#ff643f",
                    borderColor: stringcolor,
                    data: data2
                }, {
                    label: "Sharing",
                    backgroundColor: "#f2fc31",
                    borderColor: stringcolor,
                    data: data3
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
    drawChartAPBNAPBDByProvinsi(0);
    $('#chart-filter-provinsi-apbd-apbn').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-apbd-apbn').val()
        drawChartAPBNAPBDByProvinsi(provinsi);
    })

    function drawPieKegiatan(provinsi) {
        if (provinsi == 0) {
            label = ['Pelatihan', 'Pembekalan/Bimtek', 'Uji Sertifikasi', 'Vokasi']
            data1 = [1290, 1299, 1277, 1200]
        }

        if (provinsi == 1) {
            label = ['Pelatihan', 'Pembekalan/Bimtek', 'Uji Sertifikasi', 'Vokasi']
            data1 = [60, 50, 90, 10]
        }

        if (provinsi == 2) {
            label = ['Pelatihan', 'Pembekalan/Bimtek', 'Uji Sertifikasi', 'Vokasi']
            data1 = [18, 10, 80, 20]
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
        var ctx = document.getElementById('Kegiatan_Pie').getContext('2d');
        Kegiatan_Pie = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: data1,
                    backgroundColor: ["#ff643f", "#56a700", "#007ea7", "#a70008"]
                }],


                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: label

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
    drawPieKegiatan(0);
    $('#chart-filter-provinsi-kagiatan-pie1').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-kagiatan-pie1').val()
        drawPieKegiatan(provinsi);
    })

    function drawChartKegiatanPotensiMitra(provinsi) {
        if (provinsi == 0) {
            label = ["OPD", "IBM", "SMK", "Politeknik", "Universitas", "Lapas", "Asosiasi"]
            data1 = [61, 50, 70, 11, 20, 5]
            data2 = [68, 30, 10, 10, 1, 1]
            data3 = [60, 12, 78, 17, 21, 5]
        }

        if (provinsi == 1) {
            label = ["OPD", "IBM", "SMK", "Politeknik", "Universitas", "Lapas", "Asosiasi"]
            data1 = [60, 50, 90, 10, 10, 5]
            data2 = [62, 30, 70, 80, 0, 1]
            data3 = [61, 50, 98, 17, 11, 5]
        }

        if (provinsi == 2) {
            label = ["OPD", "IBM", "SMK", "Politeknik", "Universitas", "Lapas", "Asosiasi"]
            data1 = [18, 10, 80, 20, 30, 8]
            data2 = [11, 0, 10, 28, 31, 0]
            data3 = [10, 1, 83, 27, 17, 0]
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
        var ctx = document.getElementById('Kegiatan_Potensi_Mitra').getContext('2d');
        Kegiatan_Potensi_Mitra = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: "Pelatihan",
                    backgroundColor: "#007ea7",
                    borderColor: stringcolor,
                    data: data1
                }, {
                    label: "Pembekalan/Bimtek",
                    backgroundColor: "#ff643f",
                    borderColor: stringcolor,
                    data: data2
                }, {
                    label: "Uji Sertifikasi",
                    backgroundColor: "#f2fc31",
                    borderColor: stringcolor,
                    data: data3
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
    drawChartKegiatanPotensiMitra(0);
    $('#chart-filter-provinsi-kagiatan-potensi-mitra').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-kagiatan-potensi-mitra').val()
        drawChartKegiatanPotensiMitra(provinsi);
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