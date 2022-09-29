var validacion = {
	
	validaRut : function (rutCompleto) {
		rutCompleto = rutCompleto.replace("‐","-");
		if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
			return false;
		var tmp 	= rutCompleto.split('-');
		var digv	= tmp[1]; 
		var rut 	= tmp[0];
		if ( digv == 'K' ) digv = 'k' ;
		
		return (validacion.dv(rut) == digv );
	},
	dv : function(T){
		var M=0,S=1;
		for(;T;T=Math.floor(T/10))
			S=(S+T%10*(9-M++%6))%11;
		return S?S-1:'k';
	},

    validarEmail: function(valor) {
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
            return true;
        } else {
            return false
        }
    },

    validarNumero: function(valor) {
        return !isNaN(valor) && valor.length>=9
    }, 

    validarPersonasInvolucradas: function(valor) {
        return !isNaN(valor) && valor.length>=1
    }, 

	validarFecha: function(fecha) {


		Hoy = new Date();//Fecha actual del sistema
 
		var AnyoFecha = Fecha1.getFullYear();
		var MesFecha = Fecha1.getMonth();
		var DiaFecha = Fecha1.getDate();
		 
		var AnyoHoy = Hoy.getFullYear();
		var MesHoy = Hoy.getMonth();
		var DiaHoy = Hoy.getDate();
		 
		if (AnyoFecha < AnyoHoy){
			return fecha;
			alert ("La fecha introducida es anterior a Hoy");
		}
		else{
			if (AnyoFecha == AnyoHoy && MesFecha < MesHoy){
				return fecha;
				alert ("La fecha introducida es anterior a Hoy");			
			}
			else{
				if (AnyoFecha == AnyoHoy && MesFecha == MesHoy && DiaFecha < DiaHoy){
					return fecha;
					alert ("La fecha introducida es anterior a Hoy");
				}
				else{
					if (AnyoFecha == AnyoHoy && MesFecha == MesHoy && DiaFecha == DiaHoy){
						return fecha;
						 alert ("Has introducido la fecha de Hoy");
					}
					else{
						return fecha;
						alert ("La fecha introducida es posterior a Hoy");
					}
				}
			}
		}

    }
}



