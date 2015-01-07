$(document).ready(function(){

	var numstr = $('#numSet').val();	
	var numset = numstr.split(',');
	var step = $('#step').val();
	
	console.log(numset);
	
	var options = {
		
		seriesDefaults: {
            renderer:$.jqplot.BarRenderer,
            // Show point labels to the right ('e'ast) of each bar.
            // edgeTolerance of -15 allows labels flow outside the grid
            // up to 15 pixels.  If they flow out more than that, they 
            // will be hidden.
            pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
            // Rotate the bar shadow as if bar is lit from top right.
            shadowAngle: 135,
            // Here's where we tell the chart it is oriented horizontally.
            rendererOptions: {
                barDirection: 'horizontal'
            }
        },
        axes: {
            yaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                tickOptions: { showLabel: false }
     
            },
            xaxis: {
	            max: 100, 
	            min: 0,
	            pad: .2,
	            tickOptions: { showLabel: false }
            }
        }     
	};
	
	drawChart(numset,options);


	$('#btnStep').click(function(){

		var numstr = $('#numSet').val();	
		var numset = numstr.split(',');
		var step = $('#step').val();

		$.post('get.php',{
			'action': 'step',
			'step': step,
			'num_str': numstr 
			},function(data){
			
			
			console.log(data);
			
			
			
			$('#chartdiv').empty();
			$('#numSet').val(data.num_data);
			$('#numLabel').text(data.num_str);
			$('#step').val(data.step);
			
			var new_numstr = $('#numSet').val();	
			var new_numset = numstr.split(',');			
			
			drawChart(new_numset,options);
			
			if(data.sorted){
				
				alert('String sorted! Yay!');
				
			}
			
			
		},"json");
		
		
	});
	
	
});

function drawChart(dataset,options){
	
	$.jqplot('chartdiv',[dataset],options);
	
}