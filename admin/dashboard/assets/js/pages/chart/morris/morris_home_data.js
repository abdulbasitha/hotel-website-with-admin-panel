jQuery(document).ready(function() {
	'use strict';

	Morris.Area({
		element: "area_line_chart",
		behaveLikeLine: true,
		data: [
		       {w: '2011 Q1', x: 2, y: 0, z: 0},
		       {w: '2011 Q2', x: 50, y: 15, z: 5},
		       {w: '2011 Q3', x: 15, y: 50, z: 23},
		       {w: '2011 Q4', x: 45, y: 12, z: 7},
		       {w: '2011 Q5', x: 20, y: 32, z: 55},
		       {w: '2011 Q6', x: 39, y: 67, z: 20},
		       {w: '2011 Q7', x: 20, y: 9, z: 5}
		       ],
		       xkey: 'w',
		       ykeys: ['x', 'y', 'z'],
		       labels: ['X', 'Y', 'Z'],
		       pointSize: 0,
		       lineWidth: 0,
		       resize: true,
		       fillOpacity: 0.8,
		       behaveLikeLine: true,
		       gridLineColor: '#e0e0e0',
		       hideHover: 'auto',
		       lineColors: ['rgb(97, 97, 97)', 'rgb(0, 206, 209)', 'rgb(255, 117, 142)']
	}),
	
	Morris.Donut({
		element: "donut_chart",
		data: [{
			label: 'Today',
			value: 20
		}, {
			label: 'This Week',
			value: 25
		}, {
			label: 'This Month',
			value: 55
		}],
		colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)'],
		formatter: function (y) {
			return y + '%'
		}
	});
});


