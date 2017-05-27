<!DOCTYPE html>
<html>


<title>Obsequio - Automatic Compliance Investigation System</title>


<link rel="stylesheet" href="./w3.css">
<script src="./jquery.min.js" </script>
<script src="./jquery-1.9.1.min.js"></script>
<script src= "./fusioncharts/fusioncharts.js"></script>

<script type="text/javascript">
        function summarize()
        {
			<?php echo"123";?>;
            <?php exec("java -jar test_php.jar");?>;
			<?php echo("java -jar test_php.jar");?>;
        }
</script>

<script>
	
	var calculate = function(){
		
		$( document ).ready(function() {
			
			document.getElementById("ResultTopic").innerHTML = "Result:";
			document.getElementById("Result").innerHTML = "According to our analysis, the result is: ";
			document.getElementById("Result_type").innerHTML = "Fail!";
			
			document.getElementById('refresh').innerHTML = 'Back';
			document.getElementById('send').style.display = 'none';
			document.getElementById('myform').style.display = 'none';
		});
	}

	var drawchart = function(){
		//alert("start draw")
		//alert("go cal")
		calculate();
		//alert("back to draw")
		
		var a ={
			'type': 'radar',
			'renderAt': 'chart-container',
			'width': '40%',
			'height': '400',
			'dataFormat': 'json',
			'dataSource': {
				"chart": {
					"caption": "Result",
					"subCaption": "for your reference",
					"numberPreffix": "$",
					'yAxisMaxValue' : '10',
					"canvasborderalpha": "0",
					 "anchoralpha": "50",
					"theme": "fint",
					"radarfillcolor": "#ffffff",
					"showborder": "0",
				},
				"categories": [
					{
						"category": [
							{"label": "ABC"}, 
							{"label": "Territories"},
							{"label": "AML"},
							{"label": "Fraud"},
							{"label": "FATCA"},
						]
					}
				],
				"dataset": [
				]
			}
		};
		
		a.dataSource.dataset =[
			{
				"seriesname": "Predicted Value",
				"data": [
					{"value": ""},
					{"value": ""},
					{"value": ""},
					{"value": ""},
					{"value": ""},
					],
				"color": "008ee4",
			},
		];
		
		
		//plot country value
		//a.dataSource.dataset[0].seriesname =;
		a.dataSource.dataset[0].data[0].value = 1;
		a.dataSource.dataset[0].data[1].value = 8.5;
		a.dataSource.dataset[0].data[2].value = 7.7;
		a.dataSource.dataset[0].data[3].value = 4.2;
		a.dataSource.dataset[0].data[4].value = 2.1;
		
		var chart1 = new FusionCharts(a).render();
		return false;
	};
	
	function refresh(){
		location.reload()
	}
	
</script>


<body>
	
	<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
		<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
	</div>
	
	<script>
		function w3_open() {
			document.getElementById("main").style.marginLeft = "20%";
			document.getElementById("mySidebar").style.width = "20%";
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("openNav").style.display = 'none';
		}
		function w3_close() {
			document.getElementById("main").style.marginLeft = "0%";
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("openNav").style.display = "inline-block";
		}
	</script>
	
	<div id="main">
		<div class="w3-container w3-blue">
			<h2>
				<button class="w3-button w3-blue w3-xlarge" onclick="w3_open()" id="openNav">&#9776;</button>
				Obsequio
				<h6 style="padding-left:100px">
					Automatic Compliance Investigation System
				</h6>
			</h2>
			
		</div>
		<div id="wholeForm" class= "w3-container w3-card-4 w3-row-padding">
			<form id="myform" class="w3-container w3-cell" >
				<h3><B><u>Client Information:</U></B></h3>
				
				<div style:"width:100px">Account number:</div>
					<input type="text" style="width: 400px;margin-left:20px" id="ac" name="ac" class="w3-select w3-border">
				</select>
				<br>
				
				<div style:"width:100px">Name:</div>
					<input type="text" style="width: 400px;margin-left:20px" id="cmname" name="cmname" class="w3-select w3-border">
				</select>
				<br>
				
				<div style:"width:100px">ID:</div>
					<input type="text" style="width: 400px;margin-left:20px" id="id" name="id" class="w3-select w3-border">
				</select>
				<br>
				
				<div style:"width:100px">Age:</div>
					<input type="text" style="width: 400px;margin-left:20px" id="age" name="age" class="w3-select w3-border">
				</select>
				<br>
				
				<div style:"width:100px">Gender: </div>
				<select class="w3-select w3-border" style="width:400px;margin-left:20px" id="gender" name="gender">
					<option value="0" selected="selected">Please select</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
				<br>
				
				<div style:"width:100px">Date of Birth:</div>
					<input type="date" id="dob" name="dob" style="width: 400px;margin-left:20px" class="w3-select w3-border"/>
				</select>
				<br>
				
				<br>
			</form>
			
			<div class="w3-container">
				<button type="button" class="w3-btn w3-blue" id="refresh" onclick="refresh()">Refresh</button>
				<input type="button" class="w3-btn  w3-blue" id="send" value="Submit" onclick="drawchart()"/>
				<input type="button" value="Open jar" onclick="summarize()" />
				<br>
			</div>
			<br>
		</div>
		<hr>
		<div class="w3-container w3-center">
			<h3 id="ResultTopic" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px"></h3>
			<p id="Result" class= "w3-padding-small" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px"></p>
			<p id="Result_type" class="w3-xlarge w3-serif w3-display-container" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px"></p>
			<div class="w3-container w3-center">
				<div class="w3-padding-small" id="chart-container"></div>
			</div>
			</div>
			<br>
		</div>
		
		
		<div class="w3-container w3-blue">
			<p>&copy; Copyright: Raspberry Blue </p>
		</div>
	</div>

</body>
</html>