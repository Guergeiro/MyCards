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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('PINT-Web/assets/css/Login/RegistarConta.css'); ?>">

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">

        <div class="row full-width-row">

            <div class="col-md-12 d-flex flex justify-content-center mt-5">

                <div class="card mt-5">
                    <div class="card-header">
                        <label for="Tab">Ativar Conta:</label>
                    </div>

                    <div class="card-body">

                        <ul class="nav nav-tabs d-flex flex justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link fa fa-file-signature fa-lg" href="#" data-toggle="tooltip" data-placement="top" title="Preencha os dados"></a>
                            </li>
                            <li class="nav-item ">
                                <a id="envelopeFa" class="nav-link fa fa-envelope-open-text fa-lg " href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a id="userFa" class="nav-link fa fa-user fa-lg disabled mb-2" href="#"></a>
                            </li>                          
                        </ul>
                        <div class="mt-4">
                            <h4 for="loginMsg">Email de confirmação enviado para a sua caixa de Email!</h4>
                            <h6 for="loginLabel" class="text-center">Foi enviado um email para a sua caixa de correio.<br></h6>
                            <h6 for="loginLabel" class="text-center">Siga o Link para ativar a sua conta!</h6>
                        </div>
                    </div>

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