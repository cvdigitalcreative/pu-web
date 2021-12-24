$(document).ready(function() {

    let backgrundcolor_1 = ['rgb(255, 35, 139, 0.1)', 'rgb(255, 225, 19, 0.1)',
        'rgb(25, 150, 39, 0.1)', 'rgb(024, 50, 173, 0.1)', 'rgb(25, 34, 90, 0.1)', 'rgb(255, 220, 175, 0.1)', 'rgb(120, 250, 36, 0.1)'
    ];
    let backgrundcolor_2 = ['rgb(167, 90, 199, 0.1)', 'rgb(255, 25, 19, 0.1)',
        'rgb(25, 105, 39, 0.1)', 'rgb(24, 150, 13, 0.1)', 'rgb(27, 241, 90, 0.1)', 'rgb(55, 220, 17, 0.1)', 'rgb(120, 25, 136, 0.1)'
    ];
    let backgrundcolor_3 = ['rgb(255, 35, 139, 0.1)', 'rgb(255, 225, 19, 0.1)',
        'rgb(25, 15, 39, 0.1)', 'rgb(24, 50, 173, 0.1)', 'rgb(257, 41, 90, 0.1)', 'rgb(55, 220, 175, 0.1)', 'rgb(12, 25, 136, 0.1)'
    ];
    let backgrundcolor_4 = ['rgb(255, 35, 139, 0.1)', 'rgb(255, 225, 19, 0.1)',
        'rgb(25, 15, 39, 0.1)', 'rgb(24, 50, 173, 0.1)', 'rgb(257, 41, 90, 0.1)', 'rgb(55, 220, 175, 0.1)', 'rgb(12, 25, 136, 0.1)'
    ];
    let backgrundcolor_5 = ['rgb(255, 35, 139, 0.1)', 'rgb(255, 225, 19, 0.1)',
        'rgb(25, 15, 39, 0.1)', 'rgb(24, 50, 173, 0.1)', 'rgb(257, 41, 90, 0.1)', 'rgb(55, 220, 175, 0.1)', 'rgb(12, 25, 136, 0.1)'
    ];

    let bordercolor_1 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.8)',
        'rgb(25, 15, 39, 0.8)', 'rgb(83, 255, 139, 0.8)', 'rgb(24, 50, 173, 0.8)', 'rgb(257, 41, 90, 0.8)', 'rgb(55, 220, 175, 0.8)'
    ];
    let bordercolor_2 = ['rgb(167, 90, 199, 0.8)', 'rgb(255, 25, 19, 0.8)',
        'rgb(25, 105, 39, 0.8)', 'rgb(24, 150, 13, 0.8)', 'rgb(27, 241, 90, 0.8)', 'rgb(55, 220, 17, 0.8)', 'rgb(120, 25, 136, 0.8)'
    ];
    let bordercolor_3 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.8)',
        'rgb(25, 15, 39, 0.8)', 'rgb(83, 255, 139, 0.8)', 'rgb(24, 50, 173, 0.8)', 'rgb(257, 41, 90, 0.8)', 'rgb(55, 220, 175, 0.8)'
    ];
    let bordercolor_4 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.8)',
        'rgb(25, 15, 39, 0.8)', 'rgb(83, 255, 139, 0.8)', 'rgb(24, 50, 173, 0.8)', 'rgb(257, 41, 90, 0.8)', 'rgb(55, 220, 175, 0.8)'
    ];
    let bordercolor_5 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.8)',
        'rgb(25, 15, 39, 0.8)', 'rgb(83, 255, 139, 0.8)', 'rgb(24, 50, 173, 0.8)', 'rgb(257, 41, 90, 0.8)', 'rgb(55, 220, 175, 0.8)'
    ];

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
                    type: document.getElementById("chartType").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Balai Sektoral Kementerian PUPR",
                            backgroundColor: backgrundcolor_1,
                            borderColor: bordercolor_1,
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


    $('#chartType').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-balai-sektoral").value
        Mitra.destroy();
        drawChartBalaiSektoral(provinsi1, 1);
    })

    document.getElementById("download-chart-balai-sektoral").addEventListener('click', function() {
        var image = document.getElementById("Balai_Sektoral").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-balai-sektoral");
        a.href = image;
    });

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
                    type: document.getElementById("chartTypeOPD").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Balai Sektoral Kementerian PUPR",
                            backgroundColor: backgrundcolor_2,
                            borderColor: bordercolor_2,
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


    $('#chartTypeOPD').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-opd").value
        Opd.destroy();
        drawChartOPD(provinsi1, 2);
    })

    document.getElementById("download-chart-opd").addEventListener('click', function() {
        var image = document.getElementById("OPD").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-opd");
        a.href = image;
    });




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
                    type: document.getElementById("chartTypeSekolah").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Sekolah",
                            backgroundColor: backgrundcolor_2,
                            borderColor: bordercolor_2,
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
    drawChartSekolah(0, 3);

    $('#chart-filter-provinsi-sekolah').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-sekolah').val()
        Sekolah.destroy();
        drawChartSekolah(provinsi, 3);
    })


    $('#chartTypeSekolah').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-sekolah").value
        Sekolah.destroy();
        drawChartSekolah(provinsi1, 3);
    })

    document.getElementById("download-chart-sekolah").addEventListener('click', function() {
        var image = document.getElementById("Sekolah").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-sekolah");
        a.href = image;
    });

    function drawChartAsosiasiProfesi(id_provinsi, kategori) {
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
                var ctx = document.getElementById('Asosiasi_Profesi').getContext('2d');
                Sekolah = new Chart(ctx, {
                    type: document.getElementById("chartTypeAsosiasiProfesi").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Asosiasi_Profesi",
                            backgroundColor: backgrundcolor_3,
                            borderColor: bordercolor_3,
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
                $('#chart-filter-file-asosiasi-profesi').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartAsosiasiProfesi(0, 4);

    $('#chart-filter-provinsi-asosiasi-profesi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-asosiasi-profesi').val()
        Sekolah.destroy();
        drawChartAsosiasiProfesi(provinsi, 4);
    })


    $('#chartTypeAsosiasiProfesi').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-asosiasi-profesi").value
        Sekolah.destroy();
        drawChartAsosiasiProfesi(provinsi1, 4);
    })

    document.getElementById("download-chart-asosiasi-profesi").addEventListener('click', function() {
        var image = document.getElementById("Asosiasi_Profesi").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-asosiasi-profesi");
        a.href = image;
    });

    function drawChartABUJK(id_provinsi, kategori) {
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
                var ctx = document.getElementById('ABUJK').getContext('2d');
                Abujk = new Chart(ctx, {
                    type: document.getElementById("chartTypeABUJK").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Asosiasi Badan Usaha Jasa Konstruksi",
                            backgroundColor: backgrundcolor_4,
                            borderColor: bordercolor_4,
                            data: value,
                        }],
                    },
                    options: {
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
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
                $('#chart-filter-file-ABUJK').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartABUJK(0, 5);

    $('#chart-filter-provinsi-ABUJK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-ABUJK').val()
        Abujk.destroy();
        drawChartABUJK(provinsi, 5);
    })


    $('#chartTypeABUJK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-ABUJK").value
        Abujk.destroy();
        drawChartABUJK(provinsi1, 5);
    })

    document.getElementById("download-chart-ABUJK").addEventListener('click', function() {
        var image = document.getElementById("ABUJK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-ABUJK");
        a.href = image;
    });


    function drawChartSertifikasi(id_provinsi, kategori) {
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
                var ctx = document.getElementById('Sertifikasi').getContext('2d');
                Sertifikasi = new Chart(ctx, {
                    type: document.getElementById("chartTypeSertifikasi").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Kewajiban Penggunaan Tenaga Kerja Konstruksi yang Bersertifikat Kompetensi",
                            backgroundColor: backgrundcolor_4,
                            borderColor: bordercolor_4,
                            data: value,
                        }],
                    },
                    options: {
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
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
                $('#chart-filter-file-Sertifikasi').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartSertifikasi(0, 6);

    $('#chart-filter-provinsi-Sertifikasi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Sertifikasi').val()
        Sertifikasi.destroy();
        drawChartSertifikasi(provinsi, 6);
    })


    $('#chartTypeSertifikasi').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-Sertifikasi").value
        Sertifikasi.destroy();
        drawChartSertifikasi(provinsi1, 6);
    })

    document.getElementById("download-chart-Sertifikasi").addEventListener('click', function() {
        var image = document.getElementById("Sertifikasi").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-Sertifikasi");
        a.href = image;
    });

    function drawChartAKTK(id_provinsi, kategori) {
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
                var ctx = document.getElementById('AKTK').getContext('2d');
                Aktk = new Chart(ctx, {
                    type: document.getElementById("chartTypeAKTK").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Kewajiban Penggunaan Tenaga Kerja Konstruksi yang Bersertifikat Kompetensi",
                            backgroundColor: backgrundcolor_4,
                            borderColor: bordercolor_4,
                            data: value,
                        }],
                    },
                    options: {
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
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
                $('#chart-filter-file-AKTK').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartAKTK(0, 6);

    $('#chart-filter-provinsi-AKTK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-AKTK').val()
        Aktk.destroy();
        drawChartAKTK(provinsi, 6);
    })


    $('#chartTypeAKTK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-AKTK").value
        Aktk.destroy();
        drawChartAKTK(provinsi1, 6);
    })

    document.getElementById("download-chart-AKTK").addEventListener('click', function() {
        var image = document.getElementById("AKTK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-AKTK");
        a.href = image;
    });











});