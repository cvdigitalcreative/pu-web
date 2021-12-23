$(document).ready(function() {
    function drawChartBalaiSektoral(id_provinsi, kategori) {
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
                var ctx = document.getElementById('Balai_Sektoral').getContext('2d');
                Mitra = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Balai Sektoral Kementerian PUPR",
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
        $.ajax({
            url: `${BASE_URL}Infografis/infografis_file/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                $('#chart-filter-file-balai-sektoral').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartBalaiSektoral(0, 1);
    $('#chart-filter-provinsi-balai-sektoral').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-balai-sektoral').val()
        Mitra.destroy();
        drawChartBalaiSektoral(provinsi, 1);
    })



    function drawChartOPD(id_provinsi, kategori) {


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
                var ctx = document.getElementById('OPD').getContext('2d');
                Opd = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Organisasi Perangkat Daerah Suburusan Jasa Konstruksi",
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
        $.ajax({
            url: `${BASE_URL}Infografis/infografis_file/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                $('#chart-filter-file-opd').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartOPD(0, 2);
    $('#chart-filter-provinsi-opd').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-opd').val()
        Opd.destroy();
        drawChartOPD(provinsi, 2);
    })


    function drawChartSekolah(id_provinsi, kategori) {


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
                var ctx = document.getElementById('Sekolah').getContext('2d');
                Sekolah = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Sekolah",
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
        $.ajax({
            url: `${BASE_URL}Infografis/infografis_file/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                $('#chart-filter-file-sekolah').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartSekolah(0, 2);
    $('#chart-filter-provinsi-sekolah').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-sekolah').val()
        Sekolah.destroy();
        drawChartSekolah(provinsi, 2);
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
                    backgroundColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
                    borderColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
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

    function drawChartKegiatanJabker2(provinsi) {
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
        var ctx = document.getElementById('Mitra4').getContext('2d');
        Peserta_Jabker = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Peserta Jabatan Kerja",
                    backgroundColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
                    borderColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
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

    drawChartKegiatanJabker2(0);
    $('#chart-filter-provinsi-mitra3').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra3').val()
        drawChartKegiatanJabker2(provinsi);
    })

    function drawChartKegiatanJabker3(provinsi) {
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
        var ctx = document.getElementById('Mitra5').getContext('2d');
        Peserta_Jabker = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Peserta Jabatan Kerja",
                    backgroundColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
                    borderColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
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

    drawChartKegiatanJabker3(0);
    $('#chart-filter-provinsi-mitra3').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra3').val()
        drawChartKegiatanJabker3(provinsi);
    })

    function drawChartKegiatanJabker4(provinsi) {
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
        var ctx = document.getElementById('Mitra6').getContext('2d');
        Peserta_Jabker = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Peserta Jabatan Kerja",
                    backgroundColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
                    borderColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
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

    drawChartKegiatanJabker4(0);
    $('#chart-filter-provinsi-mitra3').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra3').val()
        drawChartKegiatanJabker4(provinsi);
    })

    function drawChartKegiatanJabker5(provinsi) {
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
        var ctx = document.getElementById('Mitra7').getContext('2d');
        Peserta_Jabker = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: label,
                datasets: [{
                    label: "Data Peserta Jabatan Kerja",
                    backgroundColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
                    borderColor: ["rgba(255, 0, 26, 0.1)", "rgba(0,225, 51, 0.1)"],
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

    drawChartKegiatanJabker5(0);
    $('#chart-filter-provinsi-mitra3').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra3').val()
        drawChartKegiatanJabker5(provinsi);
    })
});