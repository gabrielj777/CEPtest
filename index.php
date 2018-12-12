<html>
    <head>
        <title>Busca de endereços por CEP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script language="JavaScript">
            function validaCEP() {
                var val = document.getElementById("cep").value;
                if (val == "") {
                    alert("Preencher o CEP");
                    return;                    
                }

                var isnum = /^\d+$/.test(val);

                if (!isnum) {
                    alert("Utilizar apenas números");
                    return;
                }

                var form = document.getElementById("formCEP");
                form.action = "src/buscaCEP.php";
                form.submit();
                

            }
        </script>
    </head>

    <body>
        <form method="get" id="formCEP" name="formCEP">
            <label>CEP:
            <input name="cep" type="text" id="cep" value="" size="10" maxlength="8"/></label>
            <br/>
            <br/>
            <input type="submit" OnClick="validaCEP()" value="Pesquisar">
        </form>
    </body>
</html>