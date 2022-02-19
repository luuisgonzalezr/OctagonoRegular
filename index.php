<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de octagono</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Bienvenido al calculador de área de un octagono regular<h1>
        <br>
    <div class=nums>
                 <div >
                         <label>Lados (cm) :</label>
                         <input type="number" name="b" id="Lados" value=0>
                     </div>
                         <label>Apotema(cm):</label>
                         <input type="number" name="c" id="apotema" value=0>
                     </div>
                 </div>
                         <button  onclick="calculating($('#Lados').val(), $('#apotema').val())" class="btn waves-effect waveslight" type="submit" name="action">Calcular
                         </button>
                     </div>
        </div>
        <script>
        calculating = (L, ap) => {
            let parameters = {
                "Lados": L,
                "apotema": ap
            }
            $.ajax({
                url: "Calculo.php",
                type: "post",
                data: parameters,
                beforeSend: () => $("#result").html("Por favor espera.."),
                fail: () => {
                    $("#result").html("Error");
                },
                success: (response) => {
                    $("#result").html(response);
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.log(textStatus, errorThrown);
                }
            })
        };
    </script>
        <div id="result" class="col s6"></div>
    </div>



</body>

</html>