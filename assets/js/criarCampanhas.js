$(document).ready(function () {
    /*
     *@ Funções para esconder/mostrar os formularios e previews de campanha;
     */
    $('#cupaoCartao').on('click', function () {
        $(".carimboForm").addClass('d-none');
        $(".raspadinhaForm").addClass('d-none');
        $(".cupaoForm").removeClass('d-none');
        $(".previewCupao").removeClass('d-none');
        $(".previewRaspadinha").addClass('d-none');
        $(".previewCarimbo").addClass('d-none');

        $('#collapseTipoCampanha').hide('slow');
            $(this).val('1');
            $('.setaOrder').removeClass('fa-arrow-down');
            $('.setaOrder').addClass('fa-arrow-up');    
    })

    $('#carimboCartao').on('click', function () {
        $(".carimboForm").removeClass('d-none');
        $(".raspadinhaForm").addClass('d-none');
        $(".cupaoForm").addClass('d-none');
        $(".previewCupao").addClass('d-none');
        $(".previewRaspadinha").addClass('d-none');
        $(".previewCarimbo").removeClass('d-none');

        $('#collapseTipoCampanha').hide('slow');
            $(this).val('1');
            $('.setaOrder').removeClass('fa-arrow-down');
            $('.setaOrder').addClass('fa-arrow-up');    
    })

    $('#raspadinhaCartao').on('click', function () {
        $(".carimboForm").addClass('d-none');
        $(".raspadinhaForm").removeClass('d-none');
        $(".cupaoForm").addClass('d-none');
        $(".previewCupao").addClass('d-none');
        $(".previewRaspadinha").removeClass('d-none');
        $(".previewCarimbo").addClass('d-none');

        $('#collapseTipoCampanha').hide('slow');
            $(this).val('1');
            $('.setaOrder').removeClass('fa-arrow-down');
            $('.setaOrder').addClass('fa-arrow-up');    
    })
    /*Fim*/

    /*
    *@ Função dos filtros.
    *@ Apresenta o valor de idade que foi escolhido na progressbar;
    *@ Multiplica esse valor por 5, devido a idade ser designada de 5 em 5;
    */
    $("#customRange2").on("input", function () {
        ($(idadeGG).html($("#customRange2").val() * 5));
    });
    /*Fim*/

    /*
     *@ As função seguintes recebem o input do valor nas input_box's dos formularios de campanhas.
     *@ De seguida atribuem esses valores ao preview, criando assim o preview em live time. 
     */
    
     /*
      * Cupão
      */
        $("#cupaoDesignacao").on("input", function () {
            $("#previewDesignaçãoCampanhaCupao").html($(this).val());
        });

        $("#cupaoDescricao").on("input", function() {
            $("#previewDescriçãoCampanha").html($(this).val());
        });

        $("#cupaoDescontoValor").on("change", function() {
            $("#previewDescontoCampanha").html($(this).val());
        });

        $("#cupaoDataInicial").on("change", function() {
            $("#previewDataInicioCampanha").html($(this).val());
        });
        
        $("#cupaoDataFinal").on("change", function() {
            $('#previewDataCampanhaAte').removeClass('d-none');
            $("#previewDataFinalCampanha").html($(this).val());
        });
    /*Fim*/

     /*
      * Carimbo
      */
        $("#carimboDesignacao").on("input", function () {
            $("#previewDesignaçãoCampanhaCarimbo").html($(this).val());
        });

        $("#carimboPremio").on("input", function() {
            $("#previewPremioCampanha").html($(this).val());
        });

        $("#numberCarimbo").on("input", function() {
            $("#previewNumeroCampanha").html($(this).val());
        });

        $("#carimboDateInicio").on("change", function() {
            $("#previewDataInicioCampanhaCarimbo").html($(this).val());
        });
        
        $("#carimboDateFinal").on("change", function() {
            $('#previewDataCampanhaAteCarimbo').removeClass('d-none');
            $("#previewDataFinalCampanhaCarimbo").html($(this).val());
        });
    /*Fim*/

     /*
      * Raspadinha
      */
        $("#raspadinhaDesignacao").on("input", function () {
            $("#previewDesignaçãoCampanhaRaspadinha").html($(this).val());
        });

        $("#raspadinhaPremio").on("input", function() {
            $("#previewPremioCampanhaRaspadinha").html($(this).val());
        });

        $("#raspadinhaCondicao").on("input", function() {
            $("#previewCondiçãoCampanha").html($(this).val());
        });

        $("#raspadinhaDateInicial").on("change", function() {
            $("#previewDataInicioCampanhaRaspadinha").html($(this).val());
        });
        
        $("#raspadinhaDateFinal").on("change", function() {
            $('#previewDataCampanhaAteRaspadinha').removeClass('d-none');
            $("#previewDataFinalCampanhaRaspadinha").html($(this).val());
        });
    /*Fim*/

    /*
     *@ Faz o efeito de toggle a div Tipo de Campanhas 
     */
    $('.clickToggle').click(function(){
    
        if($(this).val() ==='1'){
            $('#collapseTipoCampanha').show('slow');
            $(this).val('2');
            $('.setaOrder').addClass('fa-arrow-down');
            $('.setaOrder').removeClass('fa-arrow-up');
        }else{
            $('#collapseTipoCampanha').hide('slow');
            $(this).val('1');
            $('.setaOrder').removeClass('fa-arrow-down');
            $('.setaOrder').addClass('fa-arrow-up');           
        }
       
    });

});