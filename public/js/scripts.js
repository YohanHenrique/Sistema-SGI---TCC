
       

        


 
  
  
   var input = document.querySelector('input');
   var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
   input.addEventListener('keydown', function (e) {
       var char = e.keyCode || e.which;
       var letra = String.fromCharCode(char).toLowerCase();
       if (regex.indexOf(letra) != -1) e.preventDefault();
   });




  //var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
  // repare a flag "g" de global, para substituir todas as ocorrências
  //$('input').on('input', function () {
  //console.log("test");
    //$(this).val($(this).val().replace(regex, ''));
  //});

  