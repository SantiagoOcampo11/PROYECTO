cuit= cuitvalido(document.getElementById("cuit").value);
function cuitvalido(cuit) {
    var vec= new Array(10);
    //convertir una cadena en varias subcadenas
    let digitos = cuit.split(' ');
    //substring usar
    // a su vez esas subcadenas las metemos en una lista
    let digito = parseInt(digitos.pop());
    if(cuit.length <11) {
        return false;
        alert('El cuit es invalido faltan caracteres');
    }
    else if(cuit.length>11){
        return false;
        alert('el cuit es invalido sobran caracteres');
    }
    else{
        x,i,division=0;
        //multiplicacion cada uno
        //de los digitos y los guardo en una posicion
       vec[0]= cuit(0)*5;
       vec[1]= cuit(1)*4;
       vec[2]= cuit(2)*3;
       vec[3]= cuit(3)*2;
       vec[4]= cuit(4)*7;
       vec[5]= cuit(5)*6;
       vec[6]= cuit(6)*5;
       vec[7]= cuit(7)*4;
       vec[8]= cuit(8)*3;
       vec[9]= cuit(9)*2;

        //esas posiciones se van a tener que sumar
        for(i= 0; i<=9; i++){
            x += vec[i];
        }

        division = 11 -(x % 11)
        //si es 11 ese resto
        if (division ===11){
            division=0;
        //si es 10 ese resto
        }else if (division ===10){
            division=9;
        }

    }

    return division;
    

};
