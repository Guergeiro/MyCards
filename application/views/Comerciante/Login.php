<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <!-- MetaDados -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titulo -->
    <title>Login</title>


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('Web-Pint\assets\css\Login\Login.css'); ?>">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">

        <div class="row full-width-row">

            <div class="col-md-8 d-flex justify-content-center">
                <div id="div-text" class="d-flex justify-content-center">
                    <div class="flex-column text-justify">
                        <h2 class="text-center mb-3">Bem vindo ao MyCards!</h2>
                        <h5 class="text-center">A plataforma que o representara a si, <br> como posição liderante nas escolhas do cliente!</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5 position-relative">
                <div class="card shadow bg-light ml-4">
                    <form action="" class="ml-2 mr-2">
                        <h2 class="text-center mt-5">Entre no MyCards!</h2>
                        <div class="input-group mb-3 mt-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-user" id="basic-addon1"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-key" id="basic-addon1"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Manter Sessão Inicada</label>
                            </div>
                        </div>

                        <div class="input-group mb-3 mt-4">
                            <input type="submit" class="form-control btn-success" placeholder="ButtonLogin" aria-label="ButtonLogin" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3 mt-4  justify-content-center">
                            <a id="recoverPass" href="#" class="btn btn-link font-weight-light">Ainda não tem conta? Registe-se!</a>
                            <a id="recoverPass" href="#" class="btn btn-link font-weight-light">Esqueceu-se da password?</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

    <!-- Boostrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>