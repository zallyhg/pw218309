<script>
	var operando1=document.getElementById('operando1')
	var operando2=document.getElementById('operando2')

	operando1.addEventListener("focus",colorAmarillo);
	operando1.addEventListener("focus",colorBlanco); 

	var colorAmarillo = function(){
		this.style.background = "yellow";
	}
	var colorBlanco = function(){
		this.style.background = "white";
	}


	var operador='';
	var numeros = function(){
		var valor=this.value;
		if (operador=="" ){
			var valorInput = document.getElementById("operando1").value;
			if (valorInput==0) {
				document.getElementById("operando1").value="";

			}
			document.getElementById("operando1")/value+=valor;
		}else{
			//operando2 a;adir
		}
	}

	var uno=document.getElementById("uno");
	uno.addEventListener("click",numeros);
	
</script>