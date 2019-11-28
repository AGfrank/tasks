function valida(e,s,i,l)
{ 	
	tecla = (document.all) ? e.keyCode : e.which; 
	
	if (tecla==8 || tecla==0 || tecla==13) return true;
	if (s.value.length>=l) return false;
		    
	if (i==1) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789()& .-/]/; // nombres, sucursales
	if (i==2) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // solo letras y espacios
	if (i==3) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // letras y espacios y numeros
	if (i==4) patron = /[-ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // letras y espacios y numeros y guion contratos
	if (i==5) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789@._-]/; // Formato Correo Electronico
	if (i==6) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz,(). ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789-]/; // alfanumericos y espacios y coma ().-,/
	if (i==7) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz, ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789]/; // alfanumericos, espacios y coma descripcion de contrato
	if (i==8) patron = /[01]/;
	if (i==9) patron = /[GJV0123456789]/; //Formato de RIF
	if (i==10) patron = /[0123456789+ ]/; // Numeros y espacio
	if (i==11) patron = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789. %()_-]/;	
	if (i==12) patron = /[gjveGJVE0123456789]/;	//RIF
	if (i==13) patron = /[0123456789.]/;	
	if (i==14) patron = /[0123456789/-]/; //fecha	
	if (i==15) patron = /[123456789/]/;
	if (i==16) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789@_-.]/;
	if (i==17) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú\s]/;	// Solo acepta letras y espacios
	if (i==18) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú1234567890 \s]/;
	if (i==19) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-]/; // codigos de contratos
	if (i==20) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789(), .-]/; // direcciones
	
	te = String.fromCharCode(tecla);
	return patron.test(te);
} 

function valida2(s,i,l)
{

	
    if (i==1) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789()& ._-]/; // nombres, sucursales
	if (i==2) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // solo letras y espacios
	if (i==3) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑ1234567890ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // letras y espacios y numeros
	if (i==4) patron = /[-ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑ1234567890ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú ]/; // letras y espacios y numeros y guion contratos
	if (i==5) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789@._-]/; // validar correos
	if (i==6) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑ, ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789]/; // alfanumericos y espacios
	if (i==7) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑ, ÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789]/; // alfanumericos, espacios y coma descripcion de contrato
	if (i==8) patron = /[01]/;
	if (i==9) patron = /[GJV0123456789]/;
	if (i==10) patron = /[0123456789+ ]/; // Numeros y espacio
	if (i==11) patron = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789. %()_-]/;		
	if (i==12) patron = /[gjveGJVE0123456789]/;	//RIF
	if (i==13) patron = /[0123456789.]/;	
	if (i==14) patron = /[0123456789/]/; //fecha
	if (i==15) patron = /[123456789/]/;	
	if (i==16) patron = /[¬ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789@_-.]/;
	if (i==17) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú\s]/;	// Solo acepta letras y espacios
	if (i==18) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú1234567890 \s]/;
	if (i==19) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-]/; // codigos de contratos
	if (i==20) patron = /[ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzñÑÇçÁáÀàÂâÃãÉéÊêÍíÓóÔôÕõÚú0123456789(), .-]/; // direcciones
	r="";
	ll=0;
	for (i=0;i<s.value.length;i++)
	{
		if (patron.test(s.value.charAt(i)))
		{
			r=r+s.value.charAt(i);
			ll++;
			if (ll==l) break;
		}
	}
	
	return s.value=r;
}
