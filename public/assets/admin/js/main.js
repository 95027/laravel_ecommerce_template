
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19,
    46
];
var randomizeArray = function (arg) {
    var array = arg.slice();
    var currentIndex = array.length,
        temporaryValue, randomIndex;

    while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
};

// First Sparkline Chart (Sales)
var spark1 = {
    chart: {
        id: 'sparkline1',
        type: 'area',
        height: 160,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        curve: 'straight'
    },
    fill: {
        opacity: 1
    },
    series: [{
        name: 'Users',
        data: randomizeArray(sparklineData)
    }],
    labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
    yaxis: {
        min: 0
    },
    xaxis: {
        type: 'datetime'
    },
    colors: ['#008FFB'],
    title: {
        text: '$424,652',
        offsetX: 10,
        offsetY:5,
        style: {
            fontSize: '24px'
        }
    },
    subtitle: {
        text: 'Users',
        offsetX: 10,
        style: {
            fontSize: '14px'
        }
    }
};

// Second Sparkline Chart (Total Products)
var spark2 = {
    chart: {
        id: 'sparkline2',
        type: 'area',
        height: 160,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        curve: 'straight'
    },
    fill: {
        opacity: 1
    },
    series: [{
        name: 'Products',
        data: randomizeArray(sparklineData)
    }],
    labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
    yaxis: {
        min: 0
    },
    xaxis: {
        type: 'datetime'
    },
    colors: ['#FEB019'],
    title: {
        text: '12,234',
        offsetX: 10,
        offsetY:5,
        style: {
            fontSize: '24px'
        }
    },
    subtitle: {
        text: 'Products',
        offsetX: 10,
        style: {
            fontSize: '14px'
        }
    }
};

// Third Sparkline Chart (Total Revenue)
var spark3 = {
    chart: {
        id: 'sparkline3',
        type: 'area',
        height: 160,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        curve: 'straight'
    },
    fill: {
        opacity: 1
    },
    series: [{
        name: 'Revenue',
        data: randomizeArray(sparklineData)
    }],
    labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
    yaxis: {
        min: 0
    },
    xaxis: {
        type: 'datetime'
    },
    colors: ['#FF4560'],
    title: {
        text: '$932,150',
        offsetX: 10,
        offsetY:5,
        style: {
            fontSize: '24px'
        }
    },
    subtitle: {
        text: 'Revenue',
        offsetX: 10,
        style: {
            fontSize: '14px'
        }
    }
};

// Fourth Sparkline Chart (Total Orders)
var spark4 = {
    chart: {
        id: 'sparkline4',
        type: 'area',
        height: 160,
        sparkline: {
            enabled: true
        }
    },
    stroke: {
        curve: 'straight'
    },
    fill: {
        opacity: 1
    },
    series: [{
        name: 'Orders',
        data: randomizeArray(sparklineData)
    }],
    labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
    yaxis: {
        min: 0
    },
    xaxis: {
        type: 'datetime'
    },
    colors: ['#775DD0'],
    title: {
        text: '1,530',
        offsetX: 10,
        offsetY:5,
        style: {
            fontSize: '24px'
        }
    },
    subtitle: {
        text: 'Orders',
        offsetX: 10,
        style: {
            fontSize: '14px'
        }
    }
};

// Render the charts
new ApexCharts(document.querySelector("#spark1"), spark1).render();
new ApexCharts(document.querySelector("#spark2"), spark2).render();
new ApexCharts(document.querySelector("#spark3"), spark3).render();
new ApexCharts(document.querySelector("#spark4"), spark4).render();



// total Sale Charts
var options = {
    series: [{
        name: 'Profit',
        data: [28305, 55000, 57000, 56300, 61000, 58000, 63000, 60000, 66300] // Adjust profit data
    }, {
        name: 'Revenue',
        data: [37802, 85000, 101000, 98300, 87000, 105000, 91300, 114000, 94300] // Adjust revenue data
    }],
    chart: {
        type: 'bar',
        height: 350,
        toolbar:{
            show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '45%',
            endingShape: 'rounded'
        },
    },
    colors: ['#87CEFA', '#1E90FF'],
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
        title: {
            text: 'Amount (₹)'
        }
    },
    fill: {
        opacity: 1
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "₹ " + val.toLocaleString(); // Formats as currency
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#totalSale"), options);
chart.render();

