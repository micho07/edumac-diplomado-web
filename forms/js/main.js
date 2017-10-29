// Comentarios de una sola línea

/*
 Comentarios de bloque
*/

/* 
 Función "ready" esta función se encarga de ejecutar el código Java Script (JS) 
 cuando el arbol DOM (Document Objects Model) se ha renderizado.

 Sintaxis es: 
    $();
    Adentro del paréntesis se escribe una función anónima.
    La sintaxis de la función anónima en JS es:
        función() {}

    La sintaxis completa es:
        $(function() {...code})
        
    Adentro de las llaves se escribe el código que se va
    a ejecutar. 
    
    Variables en JS: Se utiliza la palabra reservada "var" para
    creae variables.

    Los tipos de datos que se pueden guardar en una variable son:
        - STRING (Cadenas de texto y seimpre van entre comillas)
        -NUMBER (Números naturales y nunca van entre comillas)
        -BOOLEAN (Valores lógicos binarios: TRUE O FALSE)
        -ARRAY (Conocidos como arreglos, matrices o vectores), se pueden
        guardar multiples valores.
        -FUNCTION (Funciones anónimas).


    $(function() {
    var texto = 'Hola';
    var texto2 = 'Mundo';
    var numero1 = 10;
    var numero2 = 20;

    var resultado = numero1 + numero2;

    console.log(resultado);
});  


    Selectores en JS: Sirve para decirle al navegador a cual elemento 
        vamos a afectar.

    Sintaxis de un selector con jQuery:
        $('selector tipo CSS').
        
    Objetos (OBJECT): Pueden terner "Propiedades" y/o "Métodos":
        -Propiedades: STRING, NUMBER, BOOLEAN, ARRAY, OBJECT
        -Métodos: FUCTION.   
        
        -Éstas propiedades y métodos van separados por comas.

 ------------------------------------------------------------------------------------


        var yo = {
        nombre: 'Michelle', 
        apellidoPaterno: 'Villavicencio',
        apellidoMaterno: 'Barrón',
        edad : 24, 
        esMexicano: true,
        pasatiempos: ['Nadar', 'Correr', 'Leer'],
        mascotas: {
            perro: {
                nombre: 'Bruno',
                edad: 1
            },
            gato: {
                nombre: 'Pepe',
                edad: 11,
            }
        },
        imprimirNombreCompleto:function() {
            console.log (
                this.nombre
                +''
                +this.apellidoPaterno
                +''
                +this.apellidoMaterno
            );
        }

    };

    var imprimirNombrePerro = function() {
        console.log(yo.mascotas.perro.nombre);
    };

    imprimirNombrePerro();

    yo.imprimirNombreCompleto();  /* Da la orden para ejecutar la acción 
    
    -------------------------------------------------------------------------------------

    /* $.extend({}, {}); 
    var animal1 = {
        nombre: 'animal1', 
        edad: 10
    };

    var aminal2 = {
        nombre: 'animal2',
        tipo: 'perro'
    };

    var animalCombinado = $.extend(animal1, animal2);
        console.log(animalCombinado)
    
    
    
    */


 


    

$(function() {
   
    //Variables
    var form = $('#formContact');

    // Set messages values

    $.extend(
        $.validator.messages,
        {
            required: 'Este campo es obligatorio',
            email: 'Ingresa un correo electronico válido',
            url: 'Ingresa una URL válida',
            rangelength: 'Ingresa entre {0} y {1} caracteres',
            number: 'Ingresa únicamente valores numéricos',
            minlength: ' Debes escribir al menos {0} caracteres',
            maxlength: 'No debes exceder {0} caracteres'
        }
    )

    //Apply validation plugin
    form.validate({
        rules: {
            formTel: {
                number: true,
                rangelength: [8, 10]
            },
            formMessage: {
                minlength: 50,
                maxlength: 100
            }
        },


        /*
        messages: {
            formTel: {
                number: 'Tiene que ser un número válido'
            }
        }
    });
    */
    });
    
    /* $.extend({}, {}); */
    

    

});