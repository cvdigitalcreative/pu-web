Chart.plugins.register({
    ChartDataLabels
});

$(document).ready(function() {



    let backgrundcolor_1 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_2 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_3 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_4 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_5 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_6 = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_mitra = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)',
        'rgb(165, 165, 165, 1)', 'rgb(255, 192, 0, 1)', 'rgb(68, 114, 196, 1)', 'rgb(112, 173, 71, 1)', 'rgb(65, 151, 202, 1)', 'rgb(211, 121, 25, 1)', 'rgb(89, 91, 130, 1)', 'rgb(208, 175, 0, 1)', 'rgb(67, 115, 180, 1)', 'rgb(114, 163, 75, 1)', 'rgb(127, 192, 232, 1)', 'rgb(241, 151, 90, 1)'
    ];
    let backgrundcolor_RPKBMK = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)'

    ];
    let backgrundcolor_RPKBJK = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)'

    ];
    let backgrundcolor_TKK_AHLI = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)'

    ];
    let backgrundcolor_TKK_TERAMPIL = ['rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)', 'rgb(91, 155, 213, 1)', 'rgb(237, 125, 49, 1)'

    ];
    let bordercolor_1 = ['rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(167, 90, 199, 0.2)', 'rgb(255, 25, 19, 0.2)',
        'rgb(25, 105, 39, 0.2)', 'rgb(24, 150, 13, 0.2)', 'rgb(27, 241, 90, 0.2)', 'rgb(55, 220, 17, 0.2)', 'rgb(120, 25, 136, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_2 = ['rgb(167, 90, 199, 0.2)', 'rgb(255, 25, 19, 0.2)',
        'rgb(25, 105, 39, 0.2)', 'rgb(24, 150, 13, 0.2)', 'rgb(27, 241, 90, 0.2)', 'rgb(55, 220, 17, 0.2)', 'rgb(120, 25, 136, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(167, 90, 199, 0.2)', 'rgb(255, 25, 19, 0.2)',
        'rgb(25, 105, 39, 0.2)', 'rgb(24, 150, 13, 0.2)', 'rgb(27, 241, 90, 0.2)', 'rgb(55, 220, 17, 0.2)', 'rgb(120, 25, 136, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_3 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(44, 255, 65, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(44, 255, 65, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_4 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_5 = ['rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 35, 139, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 1)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    let bordercolor_6 = ['rgb(44, 255, 65, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)', 'rgb(255, 255, 255, 0.2)', 'rgb(255, 225, 19, 0.2)',
        'rgb(25, 15, 39, 0.2)', 'rgb(83, 255, 139, 0.2)', 'rgb(24, 50, 173, 0.2)', 'rgb(257, 41, 90, 0.2)', 'rgb(55, 220, 175, 0.2)'
    ];
    Chart.defaults.global.defaultFontSize = 10.5;
    Chart.defaults.global.defaultFontColor = "#000000"
    Chart.defaults.global.defaultFontFamily = "Century Gothic";





    function drawChartMitra(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_mitra').show();
                // $('#mitra').hide();
            },

            complete: function() {
                $('.loader_mitra').hide();
                // $('#mitra').show();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_mitra[j] + "\", \"borderColor\": \"" + bordercolor_3[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Mitra Balai Jasa Konstruksi Wilayah II Palembang",
                        backgroundColor: backgrundcolor_mitra,
                        borderColor: bordercolor_2,

                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('mitra').getContext('2d');

                if ($(window).width() > 1000) {
                    ctx.canvas.width = 100;
                    var font_Size = 11.5;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                    ctx.canvas.width = 100;

                }

                if ($(window).width() < 700) {

                    ctx.canvas.width = 100;
                    var font_Size = 7;

                }

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
                                align: 'end',
                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        maintainAspectRatio: false,
                        fill: false,
                        scales: {

                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 17 / 100),
                                    beginAtZero: true,
                                    display: false,


                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.5,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-mitra').attr('target', '');
                } else {
                    $('#chart-filter-file-mitra').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-mitra').attr('target', '_blank');
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
        var provinsi = document.getElementById("chart-filter-provinsi-mitra").value
        mitra.destroy();
        drawChartMitra(provinsi, 1);
    })



    document.getElementById("download-chart-mitra").addEventListener('click', function() {
        var image = document.getElementById("mitra").toDataURL('image/png');
        var a = document.getElementById("download-chart-mitra");
        a.href = image;
    });

    // if ($(window).width() != width) {
    var width = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width) {
            var provinsi = document.getElementById("chart-filter-provinsi-mitra").value
            mitra.destroy();
            drawChartMitra(provinsi, 1);
            width = $(document).width()
        }
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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_mitra[j] + "\", \"borderColor\": \"" + bordercolor_6[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Balai Sektoral Kementerian PUPR",
                        backgroundColor: backgrundcolor_mitra,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('Balai_Sektoral').getContext('2d');
                if ($(window).width() > 1000) {
                    ctx.canvas.width = 100;
                    var font_Size = 12;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                    ctx.canvas.width = 100;

                }

                if ($(window).width() < 700) {

                    ctx.canvas.width = 100;
                    var font_Size = 7;

                }
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
                                align: 'end',
                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false,


                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.8,

                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-Balai_Sektoral').attr('target', '');
                } else {
                    $('#chart-filter-file-Balai_Sektoral').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-Balai_Sektoral').attr('target', '_blank');
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
        var image = document.getElementById("Balai_Sektoral").toDataURL("image/png");
        var a = document.getElementById("download-chart-Balai_Sektoral");
        a.href = image;
    });

    var width_balai = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_balai) {
            var provinsi = document.getElementById("chart-filter-provinsi-Balai_Sektoral").value
            balai_sektoral.destroy();
            drawChartBalai_Sektoral(provinsi, 1);
            width_balai = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + bordercolor_3[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Organisasi Perangkat Daerah",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('OPD').getContext('2d');
                if ($(window).width() > 1000) {

                    var font_Size = 10.2;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;


                }

                if ($(window).width() < 700) {

                    var font_Size = 7;

                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-opd').attr('target', '');
                } else {
                    $('#chart-filter-file-opd').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-opd').attr('target', '_blank');
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
        var image = document.getElementById("OPD").toDataURL("image/png");
        var a = document.getElementById("download-chart-opd");
        a.href = image;
    });

    var width_opd = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_opd) {
            var provinsi = $('#chart-filter-provinsi-opd').val()
            Opd.destroy();
            drawChartOPD(provinsi, 3);
            width_opd = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + bordercolor_6[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('vokasi').getContext('2d');
                if ($(window).width() > 1000) {

                    var font_Size = 10.2;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;


                }

                if ($(window).width() < 700) {

                    var font_Size = 7;

                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-vokasi').attr('target', '');
                } else {
                    $('#chart-filter-file-vokasi').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-vokasi').attr('target', '_blank');
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
        var image = document.getElementById("vokasi").toDataURL("image/png");
        var a = document.getElementById("download-chart-vokasi");
        a.href = image;
    });

    var width_vokasi = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_vokasi) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-vokasi").value
            vokasi.destroy();
            drawChartvokasi(provinsi1, 4);
            width_vokasi = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);

                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_1[j] + "\", \"borderColor\": \"" + bordercolor_1[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Asosiasi Profesi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('Asosiasi_Profesi').getContext('2d');
                if ($(window).width() > 1000) {

                    var font_Size = 10.2;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;


                }

                if ($(window).width() < 700) {

                    var font_Size = 7;

                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-Asosiasi_Profesi').attr('target', '');
                } else {
                    $('#chart-filter-file-Asosiasi_Profesi').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-Asosiasi_Profesi').attr('target', '_blank');

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
        var image = document.getElementById("Asosiasi_Profesi").toDataURL("image/png");
        var a = document.getElementById("download-chart-Asosiasi_Profesi");
        a.href = image;
    });

    var width_asosiasi_profesi = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_asosiasi_profesi) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-Asosiasi_Profesi").value
            Asosiasi_Profesi.destroy();
            drawChartAsosiasi_Profesi(provinsi1, 5);
            width_asosiasi_profesi = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_3[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Asosiasi Badan Usaha Jasa Konstruksi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('ABUJK').getContext('2d');
                if ($(window).width() > 1000) {

                    var font_Size = 10.2;

                }
                if ($(window).width() < 900) {
                    var font_Size = 7;


                }

                if ($(window).width() < 700) {

                    var font_Size = 7;

                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-ABUJK').attr('target', '');
                } else {
                    $('#chart-filter-file-ABUJK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-ABUJK').attr('target', '_blank');
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
        var image = document.getElementById("ABUJK").toDataURL("image/png");
        var a = document.getElementById("download-chart-ABUJK");
        a.href = image;
    });

    var width_ABUJK = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_ABUJK) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-ABUJK").value
            ABUJK.destroy();
            drawChartABUJK(provinsi1, 6);
            width_ABUJK = $(document).width()
        }

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
                    var max_1 = 0;


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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "Lapas",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('lapas').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: { fontSize: font_Size },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-lapas').attr('target', '');
                } else {
                    $('#chart-filter-file-lapas').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-lapas').attr('target', '_blank');
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
        var image = document.getElementById("lapas").toDataURL("image/png");
        var a = document.getElementById("download-chart-lapas");
        a.href = image;
    });

    var width_lapas = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_lapas) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-lapas").value
            lapas.destroy();
            drawChartlapas(provinsi1, 7);
            width_lapas = $(document).width()
        }

    });


    function drawChartinstansi_lain(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_instansi_lain').show();
            },
            complete: function() {
                $('.loader_instansi_lain').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "Balai Usaha Jasa Konstruksi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('instansi_lain').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                instansi_lain = new Chart(ctx, {
                    type: document.getElementById("chartTypeinstansi_lain").value,
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
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: { fontSize: font_Size },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-instansi_lain').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-instansi_lain').attr('target', '');
                } else {
                    $('#chart-filter-file-instansi_lain').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-instansi_lain').attr('target', '_blank');
                }
            }
        })

    }
    drawChartinstansi_lain(0, 8);

    $('#chart-filter-provinsi-instansi_lain').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-instansi_lain').val()
        instansi_lain.destroy();
        drawChartinstansi_lain(provinsi, 8);
    })


    $('#chartTypeinstansi_lain').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-instansi_lain").value
        instansi_lain.destroy();
        drawChartinstansi_lain(provinsi1, 8);
    })

    document.getElementById("download-chart-instansi_lain").addEventListener('click', function() {
        var image = document.getElementById("instansi_lain").toDataURL("image/png");
        var a = document.getElementById("download-chart-instansi_lain");
        a.href = image;
    });

    var width_instansi_lain = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_instansi_lain) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-instansi_lain").value
            instansi_lain.destroy();
            drawChartinstansi_lain(provinsi1, 8);
            width_instansi_lain = $(document).width()
        }

    });



    function drawChartKSO(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_KSO').show();
            },
            complete: function() {
                $('.loader_KSO').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;

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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_6[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#KSO').attr('height', `500vh`);
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#KSO').attr('height', `100`);
                        var display_y_axis = false
                        var display_x_axis = true
                    }



                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "KSO",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    $('#KSO').attr('height', `100`);
                    if (chart_type == 'horizontalBar') {
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('KSO').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 12;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                KSO = new Chart(ctx, {
                    type: chart_type,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,

                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.8,
                                categoryPercentage: 0.7,

                            }],
                            xAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_x_axis,
                                    fontSize: font_Size

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.8,
                                categoryPercentage: 0.7,
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
                    $('#chart-filter-file-KSO').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-KSO').attr('target', '');
                } else {
                    $('#chart-filter-file-KSO').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-KSO').attr('target', '_blank');
                }
            }
        })

    }
    drawChartKSO(99, 27, 'bar');

    $('#chart-filter-provinsi-KSO').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-KSO').val()
        var chart_type = document.getElementById("chartTypeKSO").value
        KSO.destroy();
        drawChartKSO(provinsi, 27, chart_type);
    })


    $('#chartTypeKSO').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-KSO").value
        var chart_type = document.getElementById("chartTypeKSO").value
        KSO.destroy();
        drawChartKSO(provinsi1, 27, chart_type);
    })

    document.getElementById("download-chart-KSO").addEventListener('click', function() {
        var image = document.getElementById("KSO").toDataURL("image/png");
        var a = document.getElementById("download-chart-KSO");
        a.href = image;
    });


    var width_kso = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_kso) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-KSO").value
            var chart_type = document.getElementById("chartTypeKSO").value
            KSO.destroy();
            drawChartKSO(provinsi1, 27, chart_type);
            width_kso = $(document).width()
        }

    });



    function drawChartMTU(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_MTU').show();
            },
            complete: function() {
                $('.loader_MTU').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;

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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_6[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#MTU').attr('height', `300vh`);
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#MTU').attr('height', `100`);
                        var display_y_axis = false
                        var display_x_axis = true
                    }



                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "MTU",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    $('#MTU').attr('height', `100`);
                    if (chart_type == 'horizontalBar') {
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('MTU').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 12;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                MTU = new Chart(ctx, {
                    type: chart_type,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.7,

                            }],
                            xAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_x_axis,
                                    fontSize: font_Size

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.7,
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
                    $('#chart-filter-file-MTU').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-MTU').attr('target', '');
                } else {
                    $('#chart-filter-file-MTU').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-MTU').attr('target', '_blank');
                }
            }
        })

    }
    drawChartMTU(99, 28, 'bar');

    $('#chart-filter-provinsi-MTU').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-MTU').val()
        var chart_type = document.getElementById("chartTypeMTU").value
        MTU.destroy();
        drawChartMTU(provinsi, 28, chart_type);
    })


    $('#chartTypeMTU').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-MTU").value
        var chart_type = document.getElementById("chartTypeMTU").value
        MTU.destroy();
        drawChartMTU(provinsi1, 28, chart_type);
    })

    document.getElementById("download-chart-MTU").addEventListener('click', function() {
        var image = document.getElementById("MTU").toDataURL("image/png");
        var a = document.getElementById("download-chart-MTU");
        a.href = image;
    });

    var width_mtu = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_mtu) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-MTU").value
            var chart_type = document.getElementById("chartTypeMTU").value
            MTU.destroy();
            drawChartMTU(provinsi1, 28, chart_type);
            width_mtu = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "Instruktur Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DIV').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 25 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.9,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
        var image = document.getElementById("DIV").toDataURL("image/png");
        var a = document.getElementById("download-chart-DIV");
        a.href = image;
    });

    var width_div = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_div) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-DIV").value
            DIV.destroy();
            drawChartDIV(provinsi1, 13);
            width_div = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = [];
                    var dataset = [{
                        label: "Instruktur Non Vokasi",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DINV').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 1,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-DINV').attr('target', '');
                } else {
                    $('#chart-filter-file-DINV').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-DINV').attr('target', '_blank');
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
        var image = document.getElementById("DINV").toDataURL("image/png");
        var a = document.getElementById("download-chart-DINV");
        a.href = image;
    });

    var width_dinv = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_dinv) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-DINV").value
            DINV.destroy();
            drawChartDINV(provinsi1, 12);
            width_dinv = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "Asesor Kompetensi Tenaga Kerja ",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('AKTK').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 35 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-AKTK').attr('target', '');
                } else {
                    $('#chart-filter-file-AKTK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-AKTK').attr('target', '_blank');
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
        var image = document.getElementById("AKTK").toDataURL("image/png");
        var a = document.getElementById("download-chart-AKTK");
        a.href = image;
    });

    var width_aktk = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_aktk) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-AKTK").value
            AKTK.destroy();
            drawChartAKTK(provinsi1, 10);
            width_aktk = $(document).width()
        }

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
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "Asesor Kompetensi Badan Usaha",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('DABU').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 30 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-DABU').attr('target', '');
                } else {
                    $('#chart-filter-file-DABU').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-DABU').attr('target', '_blank');
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
        var image = document.getElementById("DABU").toDataURL("image/png");
        var a = document.getElementById("download-chart-DABU");
        a.href = image;
    });

    var width_dabu = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_dabu) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-DABU").value
            DABU.destroy();
            drawChartDABU(provinsi1, 11);
            width_dabu = $(document).width()
        }

    });


    function drawChartSE_Kepala_Daerah(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_SE_Kepala_Daerah').show();
            },
            complete: function() {
                $('.loader_SE_Kepala_Daerah').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
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
                    var max_1 = 0;
                    var dataset = [{
                        label: "SE Kepala Daerah",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('SE_Kepala_Daerah').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 12;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                SE_Kepala_Daerah = new Chart(ctx, {
                    type: document.getElementById("chartTypeSE_Kepala_Daerah").value,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 30 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-SE_Kepala_Daerah').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-SE_Kepala_Daerah').attr('target', '');
                } else {
                    $('#chart-filter-file-SE_Kepala_Daerah').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-SE_Kepala_Daerah').attr('target', '_blank');
                }
            }
        })

    }
    drawChartSE_Kepala_Daerah(0, 9);

    $('#chart-filter-provinsi-SE_Kepala_Daerah').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-SE_Kepala_Daerah').val()
        SE_Kepala_Daerah.destroy();
        drawChartSE_Kepala_Daerah(provinsi, 9);
    })


    $('#chartTypeSE_Kepala_Daerah').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-SE_Kepala_Daerah").value
        SE_Kepala_Daerah.destroy();
        drawChartSE_Kepala_Daerah(provinsi1, 9);
    })

    document.getElementById("download-chart-SE_Kepala_Daerah").addEventListener('click', function() {
        var image = document.getElementById("SE_Kepala_Daerah").toDataURL("image/png");
        var a = document.getElementById("download-chart-SE_Kepala_Daerah");
        a.href = image;
    });

    var width_se_kepala_daerah = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_se_kepala_daerah) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-SE_Kepala_Daerah").value
            SE_Kepala_Daerah.destroy();
            drawChartSE_Kepala_Daerah(provinsi1, 9);
            width_se_kepala_daerah = $(document).width()
        }

    });



    function drawChartRPK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_RPK').show();
            },
            complete: function() {
                $('.loader_RPK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var dataset = [];
                    var max_1 = 0;


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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_4[j] + "\", \"borderColor\": \"" + bordercolor_4[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Rekap Peserta dan Kegiatan",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('RPK').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                RPK = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPK").value,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: { fontSize: font_Size },
                                barPercentage: 0.8,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-RPK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-RPK').attr('target', '');
                } else {
                    $('#chart-filter-file-RPK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-RPK').attr('target', '_blank');
                }
            }
        })

    }
    drawChartRPK(0, 16);

    $('#chart-filter-provinsi-RPK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPK').val()
        RPK.destroy();
        drawChartRPK(provinsi, 16);
    })


    $('#chartTypeRPK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPK").value
        RPK.destroy();
        drawChartRPK(provinsi1, 16);
    })

    document.getElementById("download-chart-RPK").addEventListener('click', function() {
        var image = document.getElementById("RPK").toDataURL("image/png");
        var a = document.getElementById("download-chart-RPK");
        a.href = image;
    });

    var width_RPK = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_RPK) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-RPK").value
            RPK.destroy();
            drawChartRPK(provinsi1, 16);
            width_RPK = $(document).width()
        }

    });



    function drawChartRPBK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_RPBK').show();
            },
            complete: function() {
                $('.loader_RPBK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_5[j] + "\", \"borderColor\": \"" + bordercolor_5[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Rekap Peserta Berdasarkan Skema",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('RPBK').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                RPBK = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPBK").value,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 50 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: { fontSize: font_Size },
                                barPercentage: 0.5,
                                categoryPercentage: 0.9,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-RPBK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-RPBK').attr('target', '');
                } else {
                    $('#chart-filter-file-RPBK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-RPBK').attr('target', '_blank');
                }
            }
        })

    }
    drawChartRPBK(0, 20);

    $('#chart-filter-provinsi-RPBK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPBK').val()
        RPBK.destroy();
        drawChartRPBK(provinsi, 20);
    })


    $('#chartTypeRPBK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPBK").value
        RPBK.destroy();
        drawChartRPBK(provinsi1, 20);
    })

    document.getElementById("download-chart-RPBK").addEventListener('click', function() {
        var image = document.getElementById("RPBK").toDataURL("image/png");
        var a = document.getElementById("download-chart-RPBK");
        a.href = image;
    });

    var width_RPBK = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_RPBK) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-RPBK").value
            RPBK.destroy();
            drawChartRPBK(provinsi1, 20);
            width_RPBK = $(document).width()
        }

    });



    function drawChartRPKBS(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_RPKBS').show();
            },
            complete: function() {
                $('.loader_RPKBS').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_RPKBJK[j] + "\", \"borderColor\": \"" + bordercolor_6[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#RPKBS').attr('height', `800vh`);
                        var height_bar_mobile = 90
                        var height_bar = 90
                        var height_bar_mobile_400 = 300
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#RPKBS').attr('height', `150`);
                        var height_bar = 90
                        var height_bar_mobile = 90
                        var display_y_axis = false
                        var display_x_axis = true
                    }


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan",
                        backgroundColor: backgrundcolor_RPKBJK,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    if (chart_type == 'horizontalBar') {
                        $('#RPKBS').attr('height', `800vh`);
                        var height_bar = 30
                        var height_bar_mobile = 60
                        var height_bar_mobile_400 = 100
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#RPKBS').attr('height', `150`);
                        var height_bar = 30
                        var height_bar_mobile = 60
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('RPKBS').getContext('2d');
                if ($(window).width() > 1100) {
                    ctx.canvas.height = height_bar
                    ctx.canvas.width = 100;
                    var font_Size = 12;
                }
                if ($(window).width() < 1100) {
                    ctx.canvas.height = height_bar_mobile
                    ctx.canvas.width = 100;
                    var font_Size = 12;
                }
                if ($(window).width() < 900) {
                    ctx.canvas.height = height_bar_mobile;
                    ctx.canvas.width = 100;
                    var font_Size = 7;
                }

                if ($(window).width() < 800) {
                    ctx.canvas.height = height_bar_mobile;
                    ctx.canvas.width = 100;
                    var font_Size = 7;
                }

                if ($(window).width() < 600) {
                    ctx.canvas.height = height_bar_mobile_400;
                    ctx.canvas.width = 100;
                    var font_Size = 7;
                }

                if ($(window).width() < 400) {
                    ctx.canvas.height = height_bar_mobile_400;
                    ctx.canvas.width = 100;
                    var font_Size = 7;
                }


                RPKBS = new Chart(ctx, {
                    type: chart_type,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,

                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis,
                                    fontSize: font_Size
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: { fontSize: font_Size, display: display_x_axis },
                                barPercentage: 0.8,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-RPKBS').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-RPKBS').attr('target', '');
                } else {
                    $('#chart-filter-file-RPKBS').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-RPKBS').attr('target', '_blank');
                }
            }
        })

    }
    drawChartRPKBS(99, 17, 'horizontalBar');

    $('#chart-filter-provinsi-RPKBS').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPKBS').val()
        var chart_type = document.getElementById("chartTypeRPKBS").value
        RPKBS.destroy();
        drawChartRPKBS(provinsi, 17, chart_type);
    })


    $('#chartTypeRPKBS').on('change', function() {
        var provinsi = document.getElementById("chart-filter-provinsi-RPKBS").value
        var chart_type = document.getElementById("chartTypeRPKBS").value
        RPKBS.destroy();
        drawChartRPKBS(provinsi, 17, chart_type);
    })

    document.getElementById("download-chart-RPKBS").addEventListener('click', function() {
        var image = document.getElementById("RPKBS").toDataURL("image/png");
        var a = document.getElementById("download-chart-RPKBS");
        a.href = image;
    });

    var width_RPKBS = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_RPKBS) {
            var provinsi = document.getElementById("chart-filter-provinsi-RPKBS").value
            var chart_type = document.getElementById("chartTypeRPKBS").value
            RPKBS.destroy();
            drawChartRPKBS(provinsi, 17, chart_type);
            width_RPKBS = $(document).width()
        }

    });

    function drawChartRPBWP(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_RPBWP').show();
            },
            complete: function() {
                $('.loader_RPBWP').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_6[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{
                        label: "Rekap Peserta Berdasarkan Wilayah dan Pembiayaan",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('RPBWP').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                RPBWP = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPBWP").value,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.8,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-RPBWP').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-RPBWP').attr('target', '');
                } else {
                    $('#chart-filter-file-RPBWP').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-RPBWP').attr('target', '_blank');
                }
            }
        })

    }
    drawChartRPBWP(99, 18);

    $('#chart-filter-provinsi-RPBWP').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPBWP').val()
        RPBWP.destroy();
        drawChartRPBWP(provinsi, 18);
    })


    $('#chartTypeRPBWP').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPBWP").value
        RPBWP.destroy();
        drawChartRPBWP(provinsi1, 18);
    })

    document.getElementById("download-chart-RPBWP").addEventListener('click', function() {
        var image = document.getElementById("RPBWP").toDataURL("image/png");
        var a = document.getElementById("download-chart-RPBWP");
        a.href = image;
    });

    var width_RPBWP = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_RPBWP) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-RPBWP").value
            RPBWP.destroy();
            drawChartRPBWP(provinsi1, 18);
            width_RPBWP = $(document).width()
        }

    });



    function drawChartRPKBMK(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_RPKBMK').show();
            },
            complete: function() {
                $('.loader_RPKBMK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;

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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_RPKBMK[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#RPKBMK').attr('height', `500vh`);
                        var height_bar = 200
                        var height_bar_mobile = 350
                        var height_bar_mobile_300 = 800
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#RPKBMK').attr('height', `100`);
                        var height_bar_mobile = 200
                        var height_bar = 200
                        var display_y_axis = false
                        var display_x_axis = true
                    }



                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "Rekap Pelaksanaan Kegiatan Berdasarkan Mitra Kerja",
                        backgroundColor: backgrundcolor_RPKBMK,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    $('#RPKBMK').attr('height', `500vh`);
                    if (chart_type == 'horizontalBar') {
                        var height_bar_mobile = 60
                        var height_bar_mobile_300 = 160
                        var height_bar = 50
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('RPKBMK').getContext('2d');
                if ($(window).width() > 900) {
                    var font_Size = 11;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar;
                }
                if ($(window).width() < 900) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile
                }

                if ($(window).width() < 800) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile
                }

                if ($(window).width() < 600) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile_300
                }
                RPKBMK = new Chart(ctx, {
                    type: document.getElementById("chartTypeRPKBMK").value,
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
                                align: 'end',


                                font: {
                                    size: 12,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis,
                                    fontSize: font_Size
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.9,
                            }],
                            xAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_x_axis
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.7,
                                categoryPercentage: 0.9,
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
                    $('#chart-filter-file-RPKBMK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-RPKBMK').attr('target', '');
                } else {
                    $('#chart-filter-file-RPKBMK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-RPKBMK').attr('target', '_blank');
                }
            }
        })

    }
    drawChartRPKBMK(99, 21, 'horizontalBar');

    $('#chart-filter-provinsi-RPKBMK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-RPKBMK').val()
        var chart_type = document.getElementById("chartTypeRPKBMK").value
        RPKBMK.destroy();
        drawChartRPKBMK(provinsi, 21, chart_type);
    })


    $('#chartTypeRPKBMK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-RPKBMK").value
        var chart_type = document.getElementById("chartTypeRPKBMK").value
        RPKBMK.destroy();
        drawChartRPKBMK(provinsi1, 21, chart_type);
    })

    document.getElementById("download-chart-RPKBMK").addEventListener('click', function() {
        var image = document.getElementById("RPKBMK").toDataURL("image/png");
        var a = document.getElementById("download-chart-RPKBMK");
        a.href = image;
    });

    var width_RPKBMK = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_RPKBMK) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-RPKBMK").value
            var chart_type = document.getElementById("chartTypeRPKBMK").value
            RPKBMK.destroy();
            drawChartRPKBMK(provinsi1, 21, chart_type);
            width_RPKBMK = $(document).width()
        }

    });


    function drawChartPPK(id_provinsi, kategori) {

        $.ajax({
            beforeSend: function() {
                $('.loader_PPK').show();
            },
            complete: function() {
                $('.loader_PPK').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();
                    var max_1 = 0;
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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_6[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);


                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "Program Padat Karya",
                        backgroundColor: backgrundcolor_2,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                }

                var ctx = document.getElementById('PPK').getContext('2d');
                if ($(window).width() > 1000) {
                    var font_Size = 10.2;
                }
                if ($(window).width() < 900) {
                    var font_Size = 7;
                }

                if ($(window).width() < 700) {
                    var font_Size = 7;
                }
                PPK = new Chart(ctx, {
                    type: document.getElementById("chartTypePPK").value,
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
                                align: 'end',


                                font: {
                                    size: font_Size,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        maintainAspectRatio: false,
                        scales: {
                            yAxes: [{

                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: false
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }

                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: font_Size
                                },
                                barPercentage: 0.7,
                                categoryPercentage: 0.8,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
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
                    $('#chart-filter-file-PPK').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-PPK').attr('target', '');
                } else {
                    $('#chart-filter-file-PPK').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-PPK').attr('target', '_blank');
                }
            }
        })

    }
    drawChartPPK(0, 14);

    $('#chart-filter-provinsi-PPK').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-PPK').val()
        PPK.destroy();
        drawChartPPK(provinsi, 14);
    })


    $('#chartTypePPK').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-PPK").value
        PPK.destroy();
        drawChartPPK(provinsi1, 14);
    })

    document.getElementById("download-chart-PPK").addEventListener('click', function() {
        var image = document.getElementById("PPK").toDataURL("image/png");
        var a = document.getElementById("download-chart-PPK");
        a.href = image;
    });

    var width_PPK = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_PPK) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-PPK").value
            PPK.destroy();
            drawChartPPK(provinsi1, 14);
            width_PPK = $(document).width()
        }

    });


    function drawChartTKK_AHLI(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_TKK_AHLI').show();
            },
            complete: function() {
                $('.loader_TKK_AHLI').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;

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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_TKK_AHLI[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#TKK_AHLI').attr('height', `1200vh`);
                        var height_bar = 350
                        var height_bar_mobile = 1100
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#TKK_AHLI').attr('height', `100`);
                        var height_bar = 150
                        var height_bar_mobile = 150
                        var display_y_axis = false
                        var display_x_axis = true
                    }



                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "Jumlah TKK Ahli Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja",

                        backgroundColor: backgrundcolor_TKK_AHLI,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    $('#TKK_AHLI').attr('height', `500vh`);
                    var height_bar = 60
                    var height_bar_mobile = 250
                    if (chart_type == 'horizontalBar') {

                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#TKK_AHLI').attr('height', `200vh`);
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('TKK_AHLI').getContext('2d');
                if ($(window).width() > 900) {
                    var font_Size = 11;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar;
                }
                if ($(window).width() < 900) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile;
                }

                if ($(window).width() < 700) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile;
                }


                TKK_AHLI = new Chart(ctx, {
                    type: document.getElementById("chartTypeTKK_AHLI").value,
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
                                align: 'end',


                                font: {
                                    size: 12,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis,
                                    fontSize: font_Size
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.9,
                            }],
                            xAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_x_axis,

                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.7,
                                categoryPercentage: 0.9,
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
                    $('#chart-filter-file-TKK_AHLI').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-TKK_AHLI').attr('target', '');
                } else {
                    $('#chart-filter-file-TKK_AHLI').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-TKK_AHLI').attr('target', '_blank');
                }
            }
        })

    }
    drawChartTKK_AHLI(99, 25, 'horizontalBar');

    $('#chart-filter-provinsi-TKK_AHLI').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-TKK_AHLI').val()
        var chart_type = document.getElementById("chartTypeTKK_AHLI").value
        TKK_AHLI.destroy();
        drawChartTKK_AHLI(provinsi, 25, chart_type);
    })


    $('#chartTypeTKK_AHLI').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-TKK_AHLI").value
        var chart_type = document.getElementById("chartTypeTKK_AHLI").value
        TKK_AHLI.destroy();
        drawChartTKK_AHLI(provinsi1, 25, chart_type);
    })

    document.getElementById("download-chart-TKK_AHLI").addEventListener('click', function() {
        var image = document.getElementById("TKK_AHLI").toDataURL("image/png");
        var a = document.getElementById("download-chart-TKK_AHLI");
        a.href = image;
    });

    var width_TKK_AHLI = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_TKK_AHLI) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-TKK_AHLI").value
            var chart_type = document.getElementById("chartTypeTKK_AHLI").value
            TKK_AHLI.destroy();
            drawChartTKK_AHLI(provinsi1, 25, chart_type);
            width_TKK_AHLI = $(document).width()
        }

    });


    function drawChartTKK_TERAMPIL(id_provinsi, kategori, chart_type) {

        $.ajax({
            beforeSend: function() {
                $('.loader_TKK_TERAMPIL').show();
            },
            complete: function() {
                $('.loader_TKK_TERAMPIL').hide();
            },
            url: `${BASE_URL}Infografis/infografis/${id_provinsi}/${kategori}`,
            method: "GET",
            success: function(data) {
                if (id_provinsi == 0) {
                    var sets = new Set();

                    var value = [];
                    var labels = [];
                    var max_1 = 0;

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
                                if (data.data[i].jumlah > max_1) {
                                    max_1 = data.data[i].jumlah;
                                }
                                jumlah_data.push(data.data[i].jumlah);
                            }


                            i++;

                        } while (i < data.data.length);
                        var temp = "{\"label\": \"" + labels[j] + "\", \"backgroundColor\": \"" + backgrundcolor_TKK_TERAMPIL[j] + "\", \"borderColor\": \"" + bordercolor_2[j] + "\", \"data\": [" + jumlah_data + "]}"
                        dataset.push(JSON.parse(temp))

                    }

                    var label = Array.from(sets);
                    if (chart_type == 'horizontalBar') {
                        $('#TKK_TERAMPIL').attr('height', `3000vh`);
                        var height_bar = 1000
                        var height_bar_mobile = 4100
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#TKK_TERAMPIL').attr('height', `400`);
                        var height_bar = 150
                        var height_bar_mobile = 3500
                        var display_y_axis = false
                        var display_x_axis = true
                    }



                } else {
                    var label = [];
                    var value = [];
                    var max_1 = 0;
                    var dataset = [{

                        label: "Jumlah TKK Terampil Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja",
                        backgroundColor: backgrundcolor_TKK_TERAMPIL,
                        borderColor: bordercolor_2,
                        data: value
                    }];
                    i = 0;
                    do {

                        label.push(data.data[i].nama);
                        if (data.data[i].jumlah > max_1) {
                            max_1 = data.data[i].jumlah;
                        }
                        value.push(data.data[i].jumlah);
                        i++;

                    } while (i < data.data.length);
                    $('#TKK_TERAMPIL').attr('height', `2000vh`);

                    if (chart_type == 'horizontalBar') {
                        var height_bar = 250
                        var height_bar_mobile = 600
                        var display_y_axis = true
                        var display_x_axis = false
                    } else {
                        $('#TKK_TERAMPIL').attr('height', `200`);
                        var height_bar = 80
                        var height_bar_mobile = 600
                        var display_y_axis = false
                        var display_x_axis = true
                    }
                }

                var ctx = document.getElementById('TKK_TERAMPIL').getContext('2d');
                if ($(window).width() > 600) {
                    var font_Size = 11;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar;
                }
                if ($(window).width() > 950) {
                    var font_Size = 11;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar;
                }
                if ($(window).width() < 1100) {
                    var font_Size = 9;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar;
                }

                if ($(window).width() < 800) {
                    var font_Size = 5.5;
                    ctx.canvas.width = 100;
                    ctx.canvas.height = height_bar_mobile;
                }
                TKK_TERAMPIL = new Chart(ctx, {
                    type: document.getElementById("chartTypeTKK_TERAMPIL").value,
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
                                align: 'end',


                                font: {
                                    size: 12,
                                    style: 'italic',
                                    family: ["Century Gothic", "sans-serif"]

                                }

                            }
                        },
                        responsive: true,
                        fill: false,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    max: max_1 + (max_1 * 37 / 100),
                                    beginAtZero: true,
                                    display: display_y_axis,
                                    fontSize: font_Size,
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.6,
                                categoryPercentage: 0.9,
                            }],
                            xAxes: [{
                                ticks: {

                                    max: max_1 + (max_1 * 60 / 100),
                                    beginAtZero: true,
                                    display: display_x_axis
                                },
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                },
                                barPercentage: 0.7,
                                categoryPercentage: 0.9,
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
                    $('#chart-filter-file-TKK_TERAMPIL').attr('href', `${BASE_URL}Infografis/infografis_data_null`);
                    $('#chart-filter-file-TKK_TERAMPIL').attr('target', '');
                } else {
                    $('#chart-filter-file-TKK_TERAMPIL').attr('href', data.data[0].pathfile);
                    $('#chart-filter-file-TKK_TERAMPIL').attr('target', '_blank');
                }
            }
        })

    }
    drawChartTKK_TERAMPIL(99, 26, 'horizontalBar');

    $('#chart-filter-provinsi-TKK_TERAMPIL').on('change', function() {
        var provinsi = $('#chart-filter-provinsi-TKK_TERAMPIL').val()
        var chart_type = document.getElementById("chartTypeTKK_TERAMPIL").value
        TKK_TERAMPIL.destroy();
        drawChartTKK_TERAMPIL(provinsi, 26, chart_type);
    })


    $('#chartTypeTKK_TERAMPIL').on('change', function() {
        var provinsi1 = document.getElementById("chart-filter-provinsi-TKK_TERAMPIL").value
        var chart_type = document.getElementById("chartTypeTKK_TERAMPIL").value
        TKK_TERAMPIL.destroy();
        drawChartTKK_TERAMPIL(provinsi1, 26, chart_type);
    })

    document.getElementById("download-chart-TKK_TERAMPIL").addEventListener('click', function() {
        var image = document.getElementById("TKK_TERAMPIL").toDataURL("image/png");
        var a = document.getElementById("download-chart-TKK_TERAMPIL");
        a.href = image;
    });

    var width_TKK_TERAMPIL = $(document).width()
    $(window).resize(function() {
        if ($(document).width() != width_TKK_TERAMPIL) {
            var provinsi1 = document.getElementById("chart-filter-provinsi-TKK_TERAMPIL").value
            var chart_type = document.getElementById("chartTypeTKK_TERAMPIL").value
            TKK_TERAMPIL.destroy();
            drawChartTKK_TERAMPIL(provinsi1, 26, chart_type);
            width_TKK_TERAMPIL = $(document).width()
        }

    });


})