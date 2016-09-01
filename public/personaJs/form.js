$(document).ready(function(){
    alertify.logPosition("bottom right");
    $('.form-list').hide();
   
    $('.form-registrar').click(function(){
      $('.form-cont').slideDown(500);
      $('.form-list').slideUp();
    });
    
    $('.form-listado').click(function(){
      $('.form-cont').slideUp();
      $('.form-list').slideDown(500);
    });
    
        
    $('#llamar-modal').click(function(){
       $('#form-Modal').modal('show');
    });
    
    $('#registrar').click(function(){
      alert('Registro');
    });

        
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

    
