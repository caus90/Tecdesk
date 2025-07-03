var chart = echarts.init(document.getElementById('graficoPizza'));
var option = {
    tooltip: {
    trigger: 'item'
    },

    color: [
        "#19c97f", "#0d0210", "#c91933", "#c95919", "#c9a019","#536d88", "#19c933",
         "#1932c9", "#19c9c2", "#199fc9","#04394e", "#5719c9", "#a019c9", "#c91978"
    ],
    
    legend: {
        orient: 'horizontal',
        bottom: 30,
        left: 'center',
        itemGap: 20,
        padding: [10, 20, 10, 20],
        itemWidth: 12,
        itemHeight: 12,
        width: '90%',
        textStyle: {
            fontSize: 14,
            fontFamily: 'Arial'
        },
        formatter: function (name) {
            let item = option.series[0].data.find(i => i.name === name);
            return `${name} (${item.value})`;
        },
    },

    series: [{
        name: 'Departamento',
        type: 'pie',
        radius: '67%',
        center: ['50%', '40%'],
        label: {
            show: true,
            fontSize: 14,
            fontFamily: 'Arial',
        },
        data: [
            { value: 2, name: 'Portaria' },
            { value: 2, name: 'TI' },
            { value: 2, name: 'UniGazin' },
            { value: 2, name: 'DCC' },
            { value: 2, name: 'Assistência' },
            { value: 2, name: 'Depósito' },
            { value: 2, name: 'Almoxarifado Prod' },
            { value: 12, name: 'Matriz 3' },
            { value: 10, name: 'Matriz 2' },
            { value: 9, name: 'Matriz 1' },
            { value: 8, name: 'Atacado' },
            { value: 2, name: 'GazinBank' },
            { value: 2, name: 'Oficina' },
            { value: 2, name: 'Colchões' }
        ],

        emphasis: {
            itemStyle: {
            shadowBlur: 10,
            shadowOffsetX: 0,
            shadowColor: 'rgba(0, 0, 0, 0.5)'
            }
    }
    }]
};
chart.setOption(option);

function updateEnabledTotal(selectedMap) {
    let total = 0;

    option.series[0].data.forEach((item) => {
        if (selectedMap[item.name]) {
            total += item.value;
        }
    });

    document.getElementById('totalPizza').innerHTML = `TOTAL = ${total}`;
}

chart.on('legendselectchanged', function (params) {
    updateEnabledTotal(params.selected);
});

let allSelected = {};
option.series[0].data.forEach(item => allSelected[item.name] = true);
updateEnabledTotal(allSelected);
