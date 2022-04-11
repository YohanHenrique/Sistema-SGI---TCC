
        (function(){
          var regex = new RegExp('[^ a-zA-Zàèìòùáéíóúâêîôûãõ\b]', 'g');
          // repare a flag "g" de global, para substituir todas as ocorrências
          $('input').on('input', function(){
            $(this).val($(this).val().replace(regex, ''));
          });
        })

        function funcao1()
{
alert("Eu sou um alert!");
}

console.log("jsnormal");
  