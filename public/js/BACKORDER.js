FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "column2d",
        "renderAt": "chartContainer",
        "width": "90%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Monthly revenue for last year",
              "subCaption": "Harry's SuperMart",
              "xAxisName": "Month",
              "yAxisName": "Revenues (In USD)",
              "theme": "fint"
           },
          "data": [
              {
                 "label": "Jan",
                 "value": "420000"
              },
              {
                 "label": "Feb",
                 "value": "810000"
              },
              {
                 "label": "Mar",
                 "value": "720000"
              },
              {
                 "label": "Apr",
                 "value": "550000"
              },
              {
                 "label": "May",
                 "value": "910000"
              },
              {
                 "label": "Jun",
                 "value": "510000"
              },
              {
                 "label": "Jul",
                 "value": "680000"
              },
              {
                 "label": "Aug",
                 "value": "620000"
              },
              {
                 "label": "Sep",
                 "value": "610000"
              },
              {
                 "label": "Oct",
                 "value": "490000"
              },
              {
                 "label": "Nov",
                 "value": "900000"
              },
              {
                 "label": "Dec",
                 "value": "730000"
              }
           ]
        }
    });

    revenueChart.render();
     var fusioncharts = new FusionCharts({
        type: 'pie2d',
        renderAt: 'pieChart',
        width: "90%",
        height: "300",
        dataFormat: 'json',
        dataSource: {
            "chart": {
                "caption": "Split of revenue by product categories",
                "subCaption": "Last year",
                "numberPrefix": "$",
                "showPercentInTooltip": "0",
                "decimals": "1",
                "useDataPlotColorForLabels": "1",
                //Theme
                "theme": "fint"
            },
            "data": [{
                "label": "Food",
                "value": "285040"
            }, {
                "label": "Apparels",
                "value": "146330"
            }, {
                "label": "Electronics",
                "value": "105070"
            }, {
                "label": "Household",
                "value": "49100"
            }]
        }
    });
    fusioncharts.render();
})