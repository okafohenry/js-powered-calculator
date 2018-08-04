//console.log("hello world");
//using JQuery


$(document).ready(function(){	
			let num1 = "";
			let num2 = "";
			let operator = "";
			let total = "";

			let dispExp = document.getElementById("disp-arith-exp");
			let dispRes = document.getElementById("disp-result");

			//operands button 
			$("button").click(function(){ 
				let btn = $(this).val();
				if(btn === '0' || btn === '1' || btn === '2' || btn === '3' || btn === '4' || btn === '5' || btn === '6' || btn === '7' || btn === '8' || btn === '9'){
					if (dispRes.value === '' || total !== '') {
						dispRes.value = btn;
					}else {
						dispRes.value += btn;
					}
					dispExp.value += btn;

				}

				else if(btn === 'C'){
					handleClear();
				}

				else if(btn === '.'){
					handleDecimal(btn);
				}
				else if(btn === '='){
					handleTotal();
				}
				else{
					handleOperation(btn);

				}
				
				
			});
	

			//function to handle numeric inputs/store inputs in variables for operation
			function handleNum(num){
				if (num1 === '') {
					num1 = num;
				}else{
					num2 = num;
				}

				
			};

			//function to handle when an operation is clicked
			function handleOperation(opr){
				if (operator === '') {
				//when the first operator is clicked,the value in the dispRes textbox is
				//parsed to the handleNum function and is stored in any of the empty variables	
					handleNum(dispRes.value); 
					operator = opr;
					dispExp.value += operator;
					dispRes.value = '';
				}else{				
					handleTotal();	
					operator = opr;
					dispExp.value += operator;
				}
			};

			//function to handle the clear button
			function handleClear(){
				dispExp.value = '';
				dispRes.value = '';
				num1 = '';
				num2 = '';
				operator = '';
				total = '';
			};

			//function to handle the decimal button
			function handleDecimal(){
				for (var i = 0; i < dispRes.value.length; i++) {
					if(dispRes.value.charAt(i) === '.'){
						return;
					}else{
						 dispExp.value += '.';
						 dispRes.value += '.';
						 return;
					}
				}
			};

			//function to handle all calculations
			function handleTotal(){
			//when a second operator or the eql btn is clicked,before an operation is performed,
			// the value is parsed into handleNum function. 
				handleNum(dispRes.value);
				switch (operator){
					case '+':
					total = parseFloat(num1) + parseFloat(num2);
					dispRes.value = total;
					break;

					case '-':
					total = parseFloat(num1) - parseFloat(num2);
					dispRes.value = total;
					break;

					case 'x':
					total = parseFloat(num1) * parseFloat(num2);
					dispRes.value = total;
					break;

					case '/':
					total = parseFloat(num1) / parseFloat(num2);
					dispRes.value = total;
					break;

					case '%':
					total = parseFloat(num1) % parseFloat(num2);
					dispRes.value = total;
					break;
				}
				updateVariable();
				
			};
			function updateVariable(){	
				if(total !== ''){
					num1 = total;
					num2 = '';
				}			
				
			}

			

});












				
			

