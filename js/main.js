var playTimeout;

$(document).ready(function(){

	var numstr = $('#numSet').val();	
	var numset = numstr.split(',');
	var step = $('#step').val();	


	
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

		$.post('post.php',{
			'action': 'step',
			'step': step,
			'num_str': numstr 
			},function(data){
					
			$('#chartdiv').empty();
			$('#numSet').val(data.num_data);
			$('#numLabel').text(data.num_str);
			$('#step').val(data.step);
			
			var new_numset = data.num_data.split(',');			
			
			drawChart(new_numset,options);
			
			if(data.sorted){
				
				$('#btnShuffle').prop('disabled','');
				$('#btnStep').prop('disabled','disabled');
				$('#btnPlay').prop('disabled','disabled');				
				
				clearInterval(playTimeout);
			}
			
			
		},"json");
		
		
	});
	
	$('#btnPlay').click(function(){
		
		playTimeout = setInterval(function(){ $('#btnStep').trigger('click'); }, 100);			
		
	});
	
	$('#btnShuffle').click(function(){
		
		$.post('post.php',{'action': 'shuffle'},function(data){
			
			$('#btnShuffle').prop('disabled','disabled');
			$('#btnStep').prop('disabled','');
			$('#btnPlay').prop('disabled','');					
			
			$('#chartdiv').empty();
			$('#numSet').val(data.num_data);
			$('#numLabel').text(data.num_str);
			$('#step').val(0);
			
			var new_numset = data.num_data.split(',');			
			
			drawChart(new_numset,options);			
			
		});		
		
		
	});
	
	
});


function drawChart(dataset,options){
	
	$.jqplot('chartdiv',[dataset],options);
	
}