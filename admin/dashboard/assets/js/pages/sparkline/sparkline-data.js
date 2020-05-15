$("#sparkline").sparkline([5,6,7,2,0,-4,-2,4], {
    type: 'bar'});
$("#sparkline1").sparkline([1,1,0,1,-1,-1,1,-1,0,0,1,1], {
    type: 'tristate'});
$("#sparkline2").sparkline([8,2,4,9,0,-4,-2,4], {
    type: 'bar'});
$("#sparkline3").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
    type: 'line'});
$("#sparkline4").sparkline([4,6,7,7,4,3,2,1,4,4], {
    type: 'discrete'});
$("#sparkline5").sparkline([1,1,2], {
    type: 'pie'});
$("#sparkline6").sparkline([5,6,2,8,9,4,7,10,11,12,10], {
    type: 'bar',
    height: '45',
    barWidth: 7,
    barSpacing: 4,
    barColor: '#99d683'
    
});
$('#sparkline7').sparkline([20, 40, 30], {
    type: 'pie',
    width: '50',
    height: '45',
    resize: true,
    sliceColors: ['#13dafe', '#6164c1', '#f1f2f7']
});


$('#sparkline8').sparkline([5, 6, 2, 9, 4, 7, 10, 12], {
    type: 'bar',
    height: '164',
    barWidth: '7',
    resize: true,
    barSpacing: '5',
    barColor: '#f96262'
});


$("#sparkline9").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
    type: 'line',
    width: '150',
    height: '45',
    lineColor: '#ffffff',
    fillColor: 'transparent',
    spotColor: '#fb6d9d',
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined
});  

$('#sparkline10').sparkline([15, 23, 55, 35, 54, 45, 66, 47, 30], {
    type: 'line',
    width: '100%',
    height: '160',
    chartRangeMax: 50,
    resize: true,
    lineColor: '#13dafe',
    fillColor: 'rgba(19, 218, 254, 0.3)',
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});

$('#sparkline11').sparkline([0, 13, 10, 14, 15, 10, 18, 20, 0], {
    type: 'line',
    width: '100%',
    height: '160',
    chartRangeMax: 40,
    lineColor: '#6164c1',
    fillColor: 'rgba(97, 100, 193, 0.3)',
    composite: true,
    resize: true,
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});
$('#sparkline12').sparkline([5, 6, 2, 8, 9, 4, 7, 10, 11, 12, 10, 5, 6, 2, 8, 9], {
    type: 'bar',
    width: '150',
    height: '45',
    barWidth: '7',
    barSpacing: '4',
    barColor: '#13dafe'
});
$("#sparkline13").sparkline([2,5,9,6,8,4,5,6,2,8,4,1 ], {
    type: 'line',
    width: '100%',
    height: '150',
    lineColor: '#f79304',
    fillColor: '#ff9c0f85',
    highlightLineColor: 'rgba(0, 0, 0, 0.2)',
    highlightSpotColor: '#4f4f4f'
});
$("#sparkline14").sparkline([1,4,8,3,9,5,2,4,5,8,5,2 ], {
    type: 'line',
    width: '100%',
    height: '150',
    lineColor: '#12cada',
    fillColor: '#36c6d354',
    maxSpotColor: '#f53408',
    highlightLineColor: 'rgba(0, 0, 0, 0.2)',
    highlightSpotColor: '#bf2f0e'
});
$("#sparkline15").sparkline([0,5,3,6,3,5,6,1,8,4,4,2 ], {
    type: 'line',
    width: '100%',
    height: '150',
    lineColor: '#5cb30c',
    fillColor: '#49fb0085',
    minSpotColor:'#ef0f62',
    maxSpotColor: '#13dafe',
    highlightLineColor: 'rgba(0, 0, 0, 0.2)',
    highlightSpotColor: '#ef0f62'
});
$("#sparkline16").sparkline([2,4,4,6,8,5,6,4,8,6,6,2,2,4,4,6,8,5,6,4,8,6,6,2], {
    type: 'line',
    width: '150',
    height: '50',
    lineColor: '#6164c1',
    fillColor: '#567cd08f',
    maxSpotColor: '#6164c1',
    highlightLineColor: 'rgba(0, 0, 0, 0.2)',
    highlightSpotColor: '#e91e63 '
});
$('#sparkline17').sparkline([20, 40, 30], {
    type: 'pie',
    height: '200',
    resize: true,
    sliceColors: ['#13dafe', '#6164c1', '#f1f2f7']
});

$("#sparkline18").sparkline([5,6,2,8,9,4,7,10,11,12,10,4,7,10], {
	type: 'bar',
	height: '200',
	barWidth: 10,
	barSpacing: 7,
	barColor: '#99d683'
});

 $('#sparkline19').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
    type: 'bar',
    height: '200',
    barWidth: '10',
    resize: true,
    barSpacing: '7',
    barColor: '#f96262'
});
 $('#sparkline20').sparkline([5, 6, 2, 9, 4, 7, 10, 12,4,7,10], {
    type: 'line',
    height: '200',
    lineColor: '#f96262',
    fillColor: 'transparent',
    composite: true,
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)'
});
 $("#sparkline21").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
    type: 'line',
    width: '100%',
    height: '200',
    lineColor: '#fff',
    fillColor: 'transparent',
    spotColor: '#fff',
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined
}); 
 $('#sparkline22').sparkline([5, 6, 2, 8, 9, 4, 7, 10, 11, 12, 10, 9, 4, 7], {
    type: 'bar',
    height: '200',
    barWidth: '10',
    barSpacing: '10',
    barColor: '#13dafe'
});
$('#sparkline23').sparkline([15, 23, 55, 35, 54, 45, 66, 47, 30], {
    type: 'line',
    width: '100%',
    height: '200',
    chartRangeMax: 50,
    resize: true,
    lineColor: '#13dafe',
    fillColor: 'rgba(19, 218, 254, 0.3)',
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});

$('#sparkline24').sparkline([0, 13, 10, 14, 15, 10, 18, 20, 0], {
    type: 'line',
    width: '100%',
    height: '200',
    chartRangeMax: 40,
    lineColor: '#6164c1',
    fillColor: 'rgba(97, 100, 193, 0.3)',
    composite: true,
    resize: true,
    highlightLineColor: 'rgba(0,0,0,.1)',
    highlightSpotColor: 'rgba(0,0,0,.2)',
});
$("#sparkline25").sparkline([2,2,2], {
    type: 'pie',
    width: '130',
    height: '130',
    resize: true,
    sliceColors: ['#FFFF4C','#dc3912','#ff9900','#109618','#66aa00','#dd4477','#0099c6','#990099 ']
});


$('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
    type: 'bar',
    height: '30',
    barWidth: '4',
    resize: true,
    barSpacing: '5',
    barColor: '#00c292'
});
 $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
    type: 'bar',
    height: '30',
    barWidth: '4',
    resize: true,
    barSpacing: '5',
    barColor: '#ab8ce4'
});
  $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
    type: 'bar',
    height: '30',
    barWidth: '4',
    resize: true,
    barSpacing: '5',
    barColor: '#03a9f3'
});
   $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
    type: 'bar',
    height: '30',
    barWidth: '4',
    resize: true,
    barSpacing: '5',
    barColor: '#fb9678'
});
   $("#sparkline26").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
	    type: 'line',
	    width: '100%',
	    height: '45',
	    lineColor: '#ffffff',
	    fillColor: 'transparent',
	    lineWidth: 1.5,
	    spotRadius: 4,
	    spotColor: '#ffffff',
	    minSpotColor: '#ffffff',
	    maxSpotColor: '#ffffff',
	    highlightSpotColor: '#ffffff',
	    highlightLineColor: '#ffffff'
	});
   $("#sparkline27").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
	    type: 'line',
	    width: '100%',
	    fillColor: '#5fc29d54',
	    lineColor: '#ffffff',
	    lineWidth: 1,
	    spotRadius: 2,
	    spotColor: '#ffffff',
	    minSpotColor: '#ffffff',
	    maxSpotColor: '#ffffff',
	    highlightSpotColor: '#ffffff',
	    highlightLineColor: '#ffffff',
	    height: '45',
   });
   $("#sparkline28").sparkline([5,6,7,9,9,5,3,5,8,7,6,7], {
	    type: 'line',
	    width: '100%',
	    fillColor: '#a4f3ec',
	    lineColor: '#f3a4bd',
	    lineWidth: 1.5,
	    spotRadius: 2,
	    spotColor: '#FF738B',
	    minSpotColor: '#FF738B',
	    maxSpotColor: '#FF738B',
	    highlightSpotColor: '#FF738B',
	    highlightLineColor: '#FF738B',
	    height: '45',
  });
   $("#sparkline29").sparkline([5,6,7,9,9,5,3,5,8,7,6,7], {
	    type: 'line',
	    width: '100%',
	    fillColor: '#aeeabc',
	    lineColor: '#f3a4bd',
	    lineWidth: 1.5,
	    spotRadius: 2,
	    spotColor: '#FF738B',
	    minSpotColor: '#FF738B',
	    maxSpotColor: '#FF738B',
	    highlightSpotColor: '#FF738B',
	    highlightLineColor: '#FF738B',
	    height: '45',
 });