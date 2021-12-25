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
    Chart.defaults.global.defaultFontSize = 10;

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
                AKTK = new Chart(ctx, {
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
    drawChartAKTK(0, 7);

    $('#chart-filter-provinsi-AKTK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-AKTK').val()
        AKTK.destroy();
        drawChartAKTK(provinsi, 7);
    })


    $('#chartTypeAKTK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-AKTK").value
        AKTK.destroy();
        drawChartAKTK(provinsi1, 7);
    })

    document.getElementById("download-chart-AKTK").addEventListener('click', function() {
        var image = document.getElementById("AKTK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-AKTK");
        a.href = image;
    });


    function drawChartDABU(id_provinsi, kategori) {
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
                var ctx = document.getElementById('DABU').getContext('2d');
                Dabu = new Chart(ctx, {
                    type: document.getElementById("chartTypeDABU").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Daftar Asesor Badan Usaha",
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
                $('#chart-filter-file-DABU').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartDABU(0, 8);

    $('#chart-filter-provinsi-DABU').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DABU').val()
        Dabu.destroy();
        drawChartDABU(provinsi, 8);
    })


    $('#chartTypeDABU').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DABU").value
        Dabu.destroy();
        drawChartDABU(provinsi1, 8);
    })

    document.getElementById("download-chart-DABU").addEventListener('click', function() {
        var image = document.getElementById("DABU").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DABU");
        a.href = image;
    });

    function drawChartDINV(id_provinsi, kategori) {
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
                var ctx = document.getElementById('DINV').getContext('2d');
                Dinv = new Chart(ctx, {
                    type: document.getElementById("chartTypeDINV").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Instruktur Non Vokasi",
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
                $('#chart-filter-file-DINV').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartDINV(0, 9);

    $('#chart-filter-provinsi-DINV').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DINV').val()
        Dinv.destroy();
        drawChartDINV(provinsi, 9);
    })


    $('#chartTypeDINV').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DINV").value
        Dinv.destroy();
        drawChartDINV(provinsi1, 9);
    })

    document.getElementById("download-chart-DINV").addEventListener('click', function() {
        var image = document.getElementById("DINV").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DINV");
        a.href = image;
    });

    function drawChartDIV(id_provinsi, kategori) {
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
                var ctx = document.getElementById('DIV').getContext('2d');
                Div = new Chart(ctx, {
                    type: document.getElementById("chartTypeDIV").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Instruktur Vokasi",
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
                $('#chart-filter-file-DIV').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartDIV(0, 10);

    $('#chart-filter-provinsi-DIV').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DIV').val()
        Div.destroy();
        drawChartDIV(provinsi, 10);
    })


    $('#chartTypeDIV').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DIV").value
        Div.destroy();
        drawChartDIV(provinsi1, 10);
    })

    document.getElementById("download-chart-DIV").addEventListener('click', function() {
        var image = document.getElementById("DIV").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DIV");
        a.href = image;
    });

    function drawChartPPP(id_provinsi, kategori) {
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
                var ctx = document.getElementById('PPP').getContext('2d');
                Ppp = new Chart(ctx, {
                    type: document.getElementById("chartTypePPP").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Program Padat Karya",
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
                $('#chart-filter-file-PPP').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartPPP(0, 11);

    $('#chart-filter-provinsi-PPP').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-PPP').val()
        Ppp.destroy();
        drawChartPPP(provinsi, 11);
    })


    $('#chartTypePPP').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-PPP").value
        Ppp.destroy();
        drawChartPPP(provinsi1, 11);
    })

    document.getElementById("download-chart-PPP").addEventListener('click', function() {
        var image = document.getElementById("PPP").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-PPP");
        a.href = image;
    });

    function drawChartPMTU(id_provinsi, kategori) {
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
                var ctx = document.getElementById('PMTU').getContext('2d');
                Pmtu = new Chart(ctx, {
                    type: document.getElementById("chartTypePMTU").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Pemanfaatan Mobile Training Unit",
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
                $('#chart-filter-file-PMTU').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartPMTU(0, 12);

    $('#chart-filter-provinsi-PMTU').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-PMTU').val()
        Pmtu.destroy();
        drawChartPMTU(provinsi, 12);
    })


    $('#chartTypePMTU').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-PMTU").value
        Pmtu.destroy();
        drawChartPMTU(provinsi1, 12);
    })

    document.getElementById("download-chart-PMTU").addEventListener('click', function() {
        var image = document.getElementById("PMTU").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-PMTU");
        a.href = image;
    });

    function drawChartRPK(id_provinsi, kategori) {
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
                var ctx = document.getElementById('RPK').getContext('2d');
                RPK = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPK").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Rekap Pelaksanaan Kegiatan",
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
                $('#chart-filter-file-RPK').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartRPK(0, 13);

    $('#chart-filter-provinsi-RPK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPK').val()
        RPK.destroy();
        drawChartRPK(provinsi, 13);
    })


    $('#chartTypeRPK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPK").value
        RPK.destroy();
        drawChartRPK(provinsi1, 13);
    })

    document.getElementById("download-chart-RPK").addEventListener('click', function() {
        var image = document.getElementById("RPK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-RPK");
        a.href = image;
    });

    function drawChartRPKP(id_provinsi, kategori) {
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
                var ctx = document.getElementById('RPKP').getContext('2d');
                RPKP = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPKP").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Rekap Pelaksanaan Kegiatan Peserta",
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
                $('#chart-filter-file-RPKP').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartRPKP(0, 14);

    $('#chart-filter-provinsi-RPKP').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPKP').val()
        RPKP.destroy();
        drawChartRPKP(provinsi, 14);
    })


    $('#chartTypeRPKP').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPKP").value
        RPKP.destroy();
        drawChartRPKP(provinsi1, 14);
    })

    document.getElementById("download-chart-RPKP").addEventListener('click', function() {
        var image = document.getElementById("RPKP").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-RPKP");
        a.href = image;
    });

    function drawChartRPBWP(id_provinsi, kategori) {
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
                var ctx = document.getElementById('RPBWP').getContext('2d');
                RPBWP = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPBWP").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan",
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
                $('#chart-filter-file-RPBWP').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartRPBWP(0, 15);

    $('#chart-filter-provinsi-RPBWP').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPBWP').val()
        RPBWP.destroy();
        drawChartRPBWP(provinsi, 15);
    })


    $('#chartTypeRPBWP').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPBWP").value
        RPBWP.destroy();
        drawChartRPBWP(provinsi1, 15);
    })

    document.getElementById("download-chart-RPBWP").addEventListener('click', function() {
        var image = document.getElementById("RPBWP").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-RPBWP");
        a.href = image;
    });


    function drawChartRPBWP2(id_provinsi, kategori) {
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
                var ctx = document.getElementById('RPBWP2').getContext('2d');
                RPBWP2 = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPBWP2").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan",
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
                $('#chart-filter-file-RPBWP2').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartRPBWP2(0, 16);

    $('#chart-filter-provinsi-RPBWP2').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPBWP2').val()
        RPBWP2.destroy();
        drawChartRPBWP2(provinsi, 16);
    })


    $('#chartTypeRPBWP2').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPBWP2").value
        RPBWP2.destroy();
        drawChartRPBWP2(provinsi1, 16);
    })

    document.getElementById("download-chart-RPBWP2").addEventListener('click', function() {
        var image = document.getElementById("RPBWP2").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-RPBWP2");
        a.href = image;
    });

    function drawChartRPBU(id_provinsi, kategori) {
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
                var ctx = document.getElementById('RPBU').getContext('2d');
                RPBU = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPBU").value,
                    data: {
                        labels: label,
                        datasets: [{
                            label: "Realisasi Peserta Pembekalan/Bimtek dan Uji Sertifikasi Berdasarkan Berita Acara Hasil Penilaian",
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
                $('#chart-filter-file-RPBU').attr('href', data.data[0].pathfile);
            }
        })

    }
    drawChartRPBU(0, 17);

    $('#chart-filter-provinsi-RPBU').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPBU').val()
        RPBU.destroy();
        drawChartRPBU(provinsi, 17);
    })


    $('#chartTypeRPBU').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPBU").value
        RPBU.destroy();
        drawChartRPBU(provinsi1, 17);
    })

    document.getElementById("download-chart-RPBU").addEventListener('click', function() {
        var image = document.getElementById("RPBU").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-RPBU");
        a.href = image;
    });

});