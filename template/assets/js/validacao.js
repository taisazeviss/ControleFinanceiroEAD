
        function ValidarMeusDados(){
            var nome = document.getElementById("nome").value;
            var email = $("#email").val();

            if(nome.trim() == ''){
                alert("Preencher o campo NOME");
                $("#nome").focus();
                return false;
            }
            if(email.trim() ==''){
                alert("Preencher o campo Email");
                return false;
            }
        }
function ValidarCategoria(){
if( $("#novacategoria").val().trim()=='' ){
    alert("Preencher o nome da categoria");
    $("#nomecategoria").focus();
    return false;
}

}

      