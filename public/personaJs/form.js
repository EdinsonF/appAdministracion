$(document).ready(function(){
    

   //---Slides Personas
   alertify.logPosition("bottom right");
    $('.listaCont').hide();
    $('.form-registrar').click(function(){
      $('.formularioCont').slideDown(500);
      $('.listaCont').slideUp();
    });
    
    $('.form-listado').click(function(){
      $('.formularioCont').slideUp();
      $('.listaCont').slideDown(500);
    });
    //---Fin Slide Personas
    

    //---Slides usuarios
    alertify.logPosition("bottom right");
    $('.listContUser').hide();

    $('.form-listadoP').click(function(){
      $('.listContPers').slideDown(500);
      $('.listContUser').slideUp();
    });
    
    $('.form-listadoU').click(function(){
      $('.listContPers').slideUp();
      $('.listContUser').slideDown(500);
    });
    //---fin slides usuarios
        
    
    
   
        
    $('#cedula').bind({
        keypress: function(tecla) {
            if(tecla.keyCode < 48 || tecla.keyCode > 57) { 
                tecla.preventDefault();
            }else{
                return true;
            }
        },
        blur: function(e) {
            var Jced = $('#cedula').val();
            if (Jced==""){
                 alertify.error('La Cedula no debe estar vacío');
                 $('#cedula').focus();
            }else if(Jced<1000000){
                alertify.error('Este número Aún no es válido');
                 $('#cedula').focus();
            }else{
                return true;
            }
        }
    });
    
   $('#nombre').bind({
        keypress: function(tecla) {
             if((tecla.keyCode < 97 || tecla.keyCode > 122 && tecla.keyCode !=241) && (tecla.keyCode < 65 || tecla.keyCode > 90 && tecla.keyCode !=209) && (tecla.keyCode != 45)){ 
                tecla.preventDefault();
              }else{
                return true;
              }
        },
        blur: function(e) {
            var Jnom = $('#nombre').val();
            if (Jnom==""){
                alertify.error('El Nombre no debe estar vacío');
                $('#nombre').focus();
            }else{
                return true;
            }
        }
    });
    
       $('#apellido').bind({
        keypress: function(tecla) {
             if((tecla.keyCode < 97 || tecla.keyCode > 122 && tecla.keyCode !=241) && (tecla.keyCode < 65 || tecla.keyCode > 90 && tecla.keyCode !=209) && (tecla.keyCode != 45)){ 
                tecla.preventDefault();
              }else{
                return true;
              }
        },
        blur: function(e) {
            var Jape = $('#apellido').val();
            if (Jape==""){
                alertify.error('El Apellido no debe estar vacío');
                $('#apellido').focus();
            }else{
               return true; 
            }
        }
    });
        
    $('#telefono').bind({
        keypress: function(tecla) {
            if(tecla.keyCode < 48 || tecla.keyCode > 57) { 
                tecla.preventDefault();
            }else{
                return true;
            }
        },
        blur: function(e) {
            var Jtlf = $('#telefono').val();
            if (Jtlf==""){
                alertify.error('El Telefono no debe estar vacío');
                $('#telefono').focus();
            }else{
                return true;
            }
        }
    });
    
    
});

    
