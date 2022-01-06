Chart.plugins.register({
    ChartDataLabels
});

$(document).ready(function() {



    let backgrundcolor_1 = ['rgb(253, 50, 139, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 150, 39, 0.3)', 'rgb(024, 50, 173, 0.3)', 'rgb(25, 34, 90, 0.3)', 'rgb(255, 220, 175, 0.3)', 'rgb(120, 250, 36, 0.3)', 'rgb(253, 50, 139, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 150, 39, 0.3)', 'rgb(024, 50, 173, 0.3)', 'rgb(25, 34, 90, 0.3)', 'rgb(255, 220, 175, 0.3)', 'rgb(120, 250, 36, 0.3)'
    ];
    let backgrundcolor_2 = ['rgb(167, 90, 199, 0.3)', 'rgb(255, 25, 19, 0.3)',
        'rgb(25, 105, 39, 0.3)', 'rgb(24, 150, 13, 0.3)', 'rgb(27, 241, 90, 0.3)', 'rgb(55, 220, 17, 0.3)', 'rgb(120, 25, 136, 0.3)', 'rgb(167, 90, 199, 0.3)', 'rgb(255, 25, 19, 0.3)',
        'rgb(25, 105, 39, 0.3)', 'rgb(24, 150, 13, 0.3)', 'rgb(27, 241, 90, 0.3)', 'rgb(55, 220, 17, 0.3)', 'rgb(120, 25, 136, 0.3)'
    ];
    let backgrundcolor_3 = ['rgb(0, 255, 0, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 15, 39, 0.3)', 'rgb(24, 50, 173, 0.3)', 'rgb(257, 41, 90, 0.3)', 'rgb(55, 220, 175, 0.3)', 'rgb(12, 25, 136, 0.3)', 'rgb(0, 255, 0, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 15, 39, 0.3)', 'rgb(24, 50, 173, 0.3)', 'rgb(257, 41, 90, 0.3)', 'rgb(55, 220, 175, 0.3)', 'rgb(12, 25, 136, 0.3)'
    ];
    let backgrundcolor_4 = ['rgb(0, 250, 0, 0.3)', 'rgb(17, 74, 232, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 15, 39, 0.3)', 'rgb(257, 41, 90, 0.3)', 'rgb(55, 220, 175, 0.3)', 'rgb(12, 25, 136, 0.3)'
    ];
    let backgrundcolor_5 = ['rgb(255, 35, 139, 0.3)',
        'rgb(25, 15, 39, 0.3)', 'rgb(24, 50, 173, 0.3)', 'rgb(0, 255, 0, 0.3)', 'rgb(55, 220, 175, 0.3)', 'rgb(255, 225, 19, 0.3)', 'rgb(12, 25, 136, 0.3)'
    ];
    let backgrundcolor_6 = ['rgb(44, 255, 65, 0.3)', 'rgb(55, 220, 175, 0.3)', 'rgb(255, 225, 19, 0.3)',
        'rgb(25, 15, 39, 0.3)', 'rgb(24, 50, 173, 0.3)', 'rgb(257, 41, 90, 0.3)', 'rgb(12, 25, 136, 0.3)'
    ];

    let bordercolor_1 = ['rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_2 = ['rgb(167, 90, 199, 0.2)', 'rgb(255, 25, 19, 0.2)',
        'rgb(25, 105, 39, 0.2)', 'rgb(24, 150, 13, 0.2)', 'rgb(27, 241, 90, 0.2)', 'rgb(55, 220, 17, 0.2)', 'rgb(120, 25, 136, 0.2)'
    ];
    let bordercolor_3 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_4 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_5 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_6 = ['rgb(44, 255, 65, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    Chart.defaults.global.defaultFontSize = 9;


    function drawChartMitra(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_mitra').show();
            },
            complete: function() {
                $('.loader_mitra').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_2[j] + "\", \"borderColor\": \"" + backgrundcolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Mitra Balai Jasa Konstruksi Wilayah II Palembang",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('mitra').getContext('2d');
                mitra = new Chart(ctx, {
                    type: document.getElementById("chartType").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-mitra').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-mitra').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartMitra(0, 1);

    $('#chart-filter-provinsi-mitra').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-mitra').val()
        mitra.destroy();
        drawChartMitra(provinsi, 1);
    })


    $('#chartType').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-mitra").value
        mitra.destroy();
        drawChartMitra(provinsi1, 1);
    })

    document.getElementById("download-chart-mitra").addEventListener('click', function() {
        var image = document.getElementById("mitra").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-mitra");
        a.href = image;
    });

    function drawChartBalai_Sektoral(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_Balai_Sektoral').show();
            },
            complete: function() {
                $('.loader_Balai_Sektoral').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_2[j] + "\", \"borderColor\": \"" + backgrundcolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Balai Sektoral Kementerian PUPR",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('Balai_Sektoral').getContext('2d');
                balai_sektoral = new Chart(ctx, {
                    type: document.getElementById("chartTypeBalai_Sektoral").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-Balai_Sektoral').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-Balai_Sektoral').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartBalai_Sektoral(0, 2);

    $('#chart-filter-provinsi-Balai_Sektoral').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Balai_Sektoral').val()
        balai_sektoral.destroy();
        drawChartBalai_Sektoral(provinsi, 2);
    })


    $('#chartTypeBalai_Sektoral').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-Balai_Sektoral").value
        balai_sektoral.destroy();
        drawChartBalai_Sektoral(provinsi1, 2);
    })

    document.getElementById("download-chart-Balai_Sektoral").addEventListener('click', function() {
        var image = document.getElementById("Balai_Sektoral").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-Balai_Sektoral");
        a.href = image;
    });




    function drawChartOPD(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_OPD').show();
            },
            complete: function() {
                $('.loader_OPD').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + backgrundcolor_1[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Organisasi Perangkat Daerah",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('OPD').getContext('2d');
                Opd = new Chart(ctx, {
                    type: document.getElementById("chartTypeOPD").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-opd').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-opd').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartOPD(0, 3);

    $('#chart-filter-provinsi-opd').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-opd').val()
        Opd.destroy();
        drawChartOPD(provinsi, 3);
    })


    $('#chartTypeOPD').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-opd").value
        Opd.destroy();
        drawChartOPD(provinsi1, 3);
    })

    document.getElementById("download-chart-opd").addEventListener('click', function() {
        var image = document.getElementById("OPD").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-opd");
        a.href = image;
    });


    function drawChartvokasi(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_vokasi').show();
            },
            complete: function() {
                $('.loader_vokasi').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + backgrundcolor_1[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('vokasi').getContext('2d');
                vokasi = new Chart(ctx, {
                    type: document.getElementById("chartTypevokasi").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-vokasi').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-vokasi').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartvokasi(0, 4);

    $('#chart-filter-provinsi-vokasi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-vokasi').val()
        vokasi.destroy();
        drawChartvokasi(provinsi, 4);
    })


    $('#chartTypevokasi').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-vokasi").value
        vokasi.destroy();
        drawChartvokasi(provinsi1, 4);
    })

    document.getElementById("download-chart-vokasi").addEventListener('click', function() {
        var image = document.getElementById("vokasi").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-vokasi");
        a.href = image;
    });


    function drawChartAsosiasi_Profesi(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_Asosiasi_Profesi').show();
            },
            complete: function() {
                $('.loader_Asosiasi_Profesi').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + backgrundcolor_1[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Asosiasi Profesi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('Asosiasi_Profesi').getContext('2d');
                Asosiasi_Profesi = new Chart(ctx, {
                    type: document.getElementById("chartTypeAsosiasi_Profesi").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-Asosiasi_Profesi').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-Asosiasi_Profesi').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartAsosiasi_Profesi(0, 5);

    $('#chart-filter-provinsi-Asosiasi_Profesi').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-Asosiasi_Profesi').val()
        Asosiasi_Profesi.destroy();
        drawChartAsosiasi_Profesi(provinsi, 5);
    })


    $('#chartTypeAsosiasi_Profesi').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-Asosiasi_Profesi").value
        Asosiasi_Profesi.destroy();
        drawChartAsosiasi_Profesi(provinsi1, 5);
    })

    document.getElementById("download-chart-Asosiasi_Profesi").addEventListener('click', function() {
        var image = document.getElementById("Asosiasi_Profesi").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-Asosiasi_Profesi");
        a.href = image;
    });

    function drawChartABUJK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_ABUJK').show();
            },
            complete: function() {
                $('.loader_ABUJK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_3[j] + "\", \"borderColor\": \"" + backgrundcolor_3[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Asosiasi Badan Usaha Jasa Konstruksi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('ABUJK').getContext('2d');
                ABUJK = new Chart(ctx, {
                    type: document.getElementById("chartTypeABUJK").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-ABUJK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-ABUJK').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartABUJK(0, 6);

    $('#chart-filter-provinsi-ABUJK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-ABUJK').val()
        ABUJK.destroy();
        drawChartABUJK(provinsi, 6);
    })


    $('#chartTypeABUJK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-ABUJK").value
        ABUJK.destroy();
        drawChartABUJK(provinsi1, 6);
    })

    document.getElementById("download-chart-ABUJK").addEventListener('click', function() {
        var image = document.getElementById("ABUJK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-ABUJK");
        a.href = image;
    });

    function drawChartlapas(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_lapas').show();
            },
            complete: function() {
                $('.loader_lapas').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_3[j] + "\", \"borderColor\": \"" + backgrundcolor_3[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Lapas",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('lapas').getContext('2d');
                lapas = new Chart(ctx, {
                    type: document.getElementById("chartTypelapas").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-lapas').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-lapas').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartlapas(0, 7);

    $('#chart-filter-provinsi-lapas').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-lapas').val()
        lapas.destroy();
        drawChartlapas(provinsi, 7);
    })


    $('#chartTypelapas').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-lapas").value
        lapas.destroy();
        drawChartlapas(provinsi1, 7);
    })

    document.getElementById("download-chart-lapas").addEventListener('click', function() {
        var image = document.getElementById("lapas").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-lapas");
        a.href = image;
    });

    function drawChartBUJK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_BUJK').show();
            },
            complete: function() {
                $('.loader_BUJK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_3[j] + "\", \"borderColor\": \"" + backgrundcolor_3[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Balai Usaha Jasa Konstruksi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('BUJK').getContext('2d');
                BUJK = new Chart(ctx, {
                    type: document.getElementById("chartTypeBUJK").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-BUJK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-BUJK').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartBUJK(0, 8);

    $('#chart-filter-provinsi-BUJK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-BUJK').val()
        BUJK.destroy();
        drawChartBUJK(provinsi, 8);
    })


    $('#chartTypeBUJK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-BUJK").value
        BUJK.destroy();
        drawChartBUJK(provinsi1, 8);
    })

    document.getElementById("download-chart-BUJK").addEventListener('click', function() {
        var image = document.getElementById("BUJK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-BUJK");
        a.href = image;
    });

    function drawChartDIV(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_DIV').show();
            },
            complete: function() {
                $('.loader_DIV').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_4[j] + "\", \"borderColor\": \"" + backgrundcolor_4[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Instruktur Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DIV').getContext('2d');
                DIV = new Chart(ctx, {
                    type: document.getElementById("chartTypeDIV").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-DIV').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-DIV').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartDIV(0, 13);

    $('#chart-filter-provinsi-DIV').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DIV').val()
        DIV.destroy();
        drawChartDIV(provinsi, 13);
    })


    $('#chartTypeDIV').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DIV").value
        DIV.destroy();
        drawChartDIV(provinsi1, 13);
    })

    document.getElementById("download-chart-DIV").addEventListener('click', function() {
        var image = document.getElementById("DIV").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DIV");
        a.href = image;
    });

    function drawChartDINV(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_DINV').show();
            },
            complete: function() {
                $('.loader_DINV').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_5[j] + "\", \"borderColor\": \"" + backgrundcolor_5[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Instruktur Non Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DINV').getContext('2d');
                DINV = new Chart(ctx, {
                    type: document.getElementById("chartTypeDINV").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-DINV').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-DINV').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartDINV(0, 12);

    $('#chart-filter-provinsi-DINV').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DINV').val()
        DINV.destroy();
        drawChartDINV(provinsi, 12);
    })


    $('#chartTypeDINV').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DINV").value
        DINV.destroy();
        drawChartDINV(provinsi1, 12);
    })

    document.getElementById("download-chart-DINV").addEventListener('click', function() {
        var image = document.getElementById("DINV").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DINV");
        a.href = image;
    });


    function drawChartAKTK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_AKTK').show();
            },
            complete: function() {
                $('.loader_AKTK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_5[j] + "\", \"borderColor\": \"" + backgrundcolor_5[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Asesor Kompetensi Tenaga Kerja ",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('AKTK').getContext('2d');
                AKTK = new Chart(ctx, {
                    type: document.getElementById("chartTypeAKTK").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-AKTK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-AKTK').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartAKTK(0, 10);

    $('#chart-filter-provinsi-AKTK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-AKTK').val()
        AKTK.destroy();
        drawChartAKTK(provinsi, 10);
    })


    $('#chartTypeAKTK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-AKTK").value
        AKTK.destroy();
        drawChartAKTK(provinsi1, 10);
    })

    document.getElementById("download-chart-AKTK").addEventListener('click', function() {
        var image = document.getElementById("AKTK").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-AKTK");
        a.href = image;
    });

    function drawChartDABU(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_DABU').show();
            },
            complete: function() {
                $('.loader_DABU').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];


                    var dataset = [];

                    i = 0;
                    do {
                        if (!labels.includes(data.data[i].nama)) {
                            labels.push(data.data[i].nama);
                        }

                        sets.add(data.data[i].nama_provinsi);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);

                    for (let j = 0; j < labels.length; j++) {
                        var jumlah_data = [];
                        i = 0;
                        do {
                            if (labels[j] == data.data[i].nama) {
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_5[j] + "\", \"borderColor\": \"" + backgrundcolor_5[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var dataset = [{
                        label: "Asesor Kompetensi Badan Usaha",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DABU').getContext('2d');
                DABU = new Chart(ctx, {
                    type: document.getElementById("chartTypeDABU").value,
                    data: {
                        labels: label,
                        datasets: dataset,
                    },
                    options: {
                        plugins: {
                            // Change options for ALL labels of THIS CHART
                            datalabels: {
                                color: 'rgb(25, 15, 39, 1)',
                                anchor: 'end',


                                font: {
                                    size: 14,
                                    style: 'italic',
                                    family: ["Open Sans", "sans-serif"]

                                }

                            }
                        },
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
                // console.log(data.data[0])
                if (data.data[0] == undefined) {
                    $('#chart-filter-file-DABU').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                } else {
                    $('#chart-filter-file-DABU').attr('href', data.data[0].pathfile);
                }
            }
        })

    }
    drawChartDABU(0, 11);

    $('#chart-filter-provinsi-DABU').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-DABU').val()
        DABU.destroy();
        drawChartDABU(provinsi, 11);
    })


    $('#chartTypeDABU').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-DABU").value
        DABU.destroy();
        drawChartDABU(provinsi1, 11);
    })

    document.getElementById("download-chart-DABU").addEventListener('click', function() {
        var image = document.getElementById("DABU").toDataURL("image/jpg");
        var a = document.getElementById("download-chart-DABU");
        a.href = image;
    });



    // function drawChartDABU(id_provinsi, kategori) {
    //     $.ajax({
    //         url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
    //         method: "GET",
    //         beforeSend: function() {
    //             $('.loader').show();
    //         },
    //         complete: function() {
    //             $('.loader').hide();
    //         },
    //         success: function(data) {
    //             var label = [];
    //             var value = [];
    //             i = 0;
    //             do {
    //                 label.push(data.data[i].nama);
    //                 value.push(data.data[i].jumlah);
    //                 i++;

    //             } while (i < data.data.length);
    //             var ctx = document.getElementById('DABU').getContext('2d');
    //             Dabu = new Chart(ctx, {
    //                 type: document.getElementById("chartTypeDABU").value,
    //                 data: {
    //                     labels: label,
    //                     datasets: [{
    //                         label: "Daftar Asesor Badan Usaha",
    //                         backgroundColor: backgrundcolor_4,
    //                         borderColor: bordercolor_4,
    //                         data: value,
    //                     }],
    //                 },
    //                 options: {
    //                     plugins: {
    //                         datalabels: {
    //                             color: 'rgb(25, 15, 39, 1)',
    //                             anchor: 'end',

    //                             font: {
    //                                 size: 14,
    //                                 style: 'italic',
    //                                 family: ["Open Sans", "sans-serif"]
    //                             }
    //                         }
    //                     },
    //                     responsive: true,
    //                     fill: false,
    //                     scales: {
    //                         yAxes: [{
    //                             ticks: {
    //                                 beginAtZero: true,
    //                             }
    //                         }]
    //                     }
    //                 }
    //             });
    //         }
    //     });
    //     $.ajax({
    //         url: `${BASE_URL}Infografis/infografis_file/${id_provinsi}/${kategori}`,
    //         method: "GET",
    //         success: function(data) {
    //             if (data.data[0] == undefined) {
    //                 $('#chart-filter-file-DABU').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
    //             } else {
    //                 $('#chart-filter-file-DABU').attr('href', data.data[0].pathfile);
    //             }
    //         }
    //     })

    // }
    // drawChartDABU(0, 8);

    // $('#chart-filter-provinsi-DABU').on('change', function() {
    //     var provinsi = $('#chart-filter-provinsi-DABU').val()
    //     Dabu.destroy();
    //     drawChartDABU(provinsi, 8);
    // })


    // $('#chartTypeDABU').on('change', function() {
    //     var provinsi1 = document.getElementById("chart-filter-provinsi-DABU").value
    //     Dabu.destroy();
    //     drawChartDABU(provinsi1, 8);
    // })

    // document.getElementById("download-chart-DABU").addEventListener('click', function() {
    //     var image = document.getElementById("DABU").toDataURL("image/jpg");
    //     var a = document.getElementById("download-chart-DABU");
    //     a.href = image;
    // });







});