<!DOCTYPE html>
<html>
<head>
	<title>Basic Web Calculator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="calc.js"></script>
	<style type="text/css">
		.main-content{
			background:silver;
			height: 500px;width: 22%; border:1px solid #999;
			margin-left:40%;
			border-radius:10px;
			box-shadow:0px 10px 27px #555;
			/*box-shadow:1px 5px 25px  #999;*/
		}
		#title{			
			color:red;			
			font-family:classic robot;
		}
		.disp-arith-exp{
			font-family: calculator;
			color:#000;
			height: 25px; width:99.2%;
			border-top:none;
			border-left:none;
			border-right:none;
			border-bottom: none;
		}
		.disp-result{
			font-family: calculator;
			color: black;
			height: 60px; width:99.2%;
			margin-top: -2px;
			text-align:right;
			font-size: 25px;
			border-top:none;
			border-left:none;
			border-right:none;
		}


		.operands-container{
			height: 350px; width:78%; /*border:1px solid red;*/
			margin-top: 7px;
			margin-left: 3px;
		}
		
		button{			
			font-family:classic robot;
			color: #555;
			font-size: 17px;
		}
		.operands-container button{
			height:87.5px;
			width:31.5%;
		}
		#eight,#five,#two{
			margin-right:-4px;
			margin-left:-4px; 
		}
		#dec{
			margin-left: -4px;
		}
		#zero{
			width: 63.5%;
		}

		.operations-container{
			height: 350px; width:23%; /*border:1px solid yellow;*/ 
			float:right; margin-top: -350px;
			margin-right: 3px;
		}
		.operations-container button{
			height:40px;
			width:100%;
		}
		#eql-btn, #cls-btn{
			height:75px;
			width:100%;
		}
		/*
		 #cls-btn{
			background: red;
			border-color: red;
		}*/
	</style>

		
	
</head>
<body>
	<div class="main-content" >
		<center><span id="title">BASICALC</span></center>
		<input type="textbox" name="dispExp" class="disp-arith-exp" id="disp-arith-exp" readonly="true">

		<input type="textbox" name="dispRes" class="disp-result" id="disp-result" readonly="true" placeholder="0 ">

		<div class="operands-container" >
			<button id="seven" class="button" value="7" > 7 </button>
			<button id="eight" class="button" value="8" > 8 </button>
			<button id="nine"  class="button" value="9" > 9 </button>
			<br>
			<button id="four"  class="button" value="4" > 4 </button>
			<button id="five"  class="button" value="5" > 5 </button>
			<button id="six"   class="button" value="6" > 6 </button>
			<br>
			<button id="one"   class="button" value="1" > 1 </button>
			<button id="two"   class="button" value="2" > 2 </button>
			<button id="three" class="button" value="3" > 3 </button>
			<br>
			<button id="zero"  value="0" > 0 </button>
			<button id="dec"   value="." > . </button>
		</div>

		<div class="operations-container" >
			<button id="cls-btn" value="C">C</button><br>
			<button id="mult"   class="operation" 	value="x" > x </button><br>
			<button id="divide" class="operation" 	value="/" > / </button><br>
			<button id="subt"   class="operation" 	value="-" > - </button><br>
			<button id="add"    class="operation" 	value="+" > + </button><br>
			<button id="mod"    class="operation" 	value="%" > % </button><br>
			<button id="eql-btn" 	value="=" > = </button>
		</div>
	</div>

</body>
</html>