 // mudar o icone 
 $(document).ready(function () {

     $('button#VerMais').click(function () {

         var idcheck = $("button#VerMais img").attr('id');

         if (idcheck == "IconeAtivo") {
             $('button#VerMais img').attr('id', 'IconeDesativado');
             $('button#VerMais img').attr('src', 'img/svgIcon/menos.png')
         } else if (idcheck == "IconeDesativado") {
             $('button#VerMais img').attr('id', 'IconeAtivo');
             $('button#VerMais img').attr('src', 'img/svgIcon/mais.png')
         }

     })
 });