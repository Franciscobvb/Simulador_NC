var showLinea1 = 0;

$().ready(function(){
    showLinea1 = 0;

    $('#nivel1linea1').hide();
    $('#nivel1linea2').hide();
    $('#nivel1linea3').hide();
    $('#nivel2linea1').hide();
    $('#nivel2linea2').hide();
    $('#nivel2linea3').hide();

    $("#gralForm").trigger("reset");

    //////// nivel 0 //////////
    var rango = $("#lvl0rango option:selected").text();
    $("#lvl0rangoText").text(rango);
    //////// Linea 1 nivel 1 //////////
    var rango = $("#lvl1l1rango option:selected").text();
    $("#lvl1l1rangoText").text(rango);
    //////// Linea 1 nivel 2 //////////
    var rango = $("#lvl1l1rango option:selected").text();
    $("#lvl2l1rangoText").text(rango);
    //////// Linea 2 nivel 1 //////////
    var rango = $("#lvl1l2rango option:selected").text();
    $("#lvl1l2rangoText").text(rango);
    //////// Linea 2 nivel 2 //////////
    var rango = $("#lvl2l2rango option:selected").text();
    $("#lvl2l2rangoText").text(rango);
    //////// Linea 3 nivel 1 //////////
    var rango = $("#lvl1l3rango option:selected").text();
    $("#lvl1l3rangoText").text(rango);
    //////// Linea 3 nivel 2 //////////
    var rango = $("#lvl2l3rango option:selected").text();
    $("#lvl2l3rangoText").text(rango);
});

function addNodeLinea1(){
    showLinea1++;
    switch (showLinea1) {
        case 1:
            $('#nivel1linea1').show(1000); 
            break;
        case 2:
            $('#nivel1linea2').show(1000); 
            break;
        case 3:
            $('#nivel1linea3').show(1000); 
            break;
    }
}

function addLinea3(nodo){
    $('#' + nodo).show(1000);
}

$(function(){
    $('#gralForm').submit(function(e){
        $('#sendForm').text('Recalcular');
        var route = $('#gralForm').data('route');
        var form_data = $(this);

        if (pzvendidasnivel1l1 < 3 && pzvendidasnivel2l1 >= 3) {
            var rangolinea1 = $("#lvl1l1rangoText").text();
            $("#lvl1l1rangoText").text($("#lvl2l1rangoText").text());
            $("#lvl2l1rangoText").text(rangolinea1);

            var selectRangolinea1 = $("#lvl1l1rango").prop('selectedIndex');
            $("select#lvl1l1rango")[0].selectedIndex = $("#lvl2l1rango").prop('selectedIndex');
            $("select#lvl2l1rango")[0].selectedIndex = selectRangolinea1;
            $("#lvl2l1rangoText").text($("#lvl2l1rango option:selected").text());

            var selectPaislinea1 = $("#lvl1l1pais").prop('selectedIndex');
            $("select#lvl1l1pais")[0].selectedIndex = $("#lvl2l1pais").prop('selectedIndex');
            $("select#lvl2l1pais")[0].selectedIndex = selectPaislinea1;

            var piwLinea1 = $('#lvl1l1pzpiw').val();
            $("#lvl1l1pzpiw").val($('#lvl2l1pzpiw').val());
            $('#lvl2l1pzpiw').val(piwLinea1);

            var waLinea1 = $('#lvl1l1pzwa').val();
            $("#lvl1l1pzwa").val($('#lvl2l1pzwa').val());
            $('#lvl2l1pzwa').val(waLinea1);

            var aqpLinea1 = $('#lvl1l1pzaqp').val();
            $("#lvl1l1pzaqp").val($('#lvl2l1pzaqp').val());
            $('#lvl2l1pzaqp').val(aqpLinea1);

            var opLinea1 = $('#lvl1l1pzop').val();
            $("#lvl1l1pzop").val($('#lvl2l1pzop').val());
            $('#lvl2l1pzop').val(opLinea1);

            var pzVenta = pzvendidasnivel2l1;
            $('#lvl1l1pz_vendidas').text( $('#lvl2l1pz_vendidas').text());
            $('#lvl2l1pz_vendidas').text(opLinea1);
            
            pzvendidasnivel1l1 = pzvendidasnivel2l1;
            pzvendidasnivel2l1 = pzVenta;
            if(pzvendidasnivel1l1 >= 3){
                $("#lvl1l1Avatar").attr("src","SimuladorNC/img/ninja.png");
                if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3){
                    $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
                }
            }

            $("#lvl2l1Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        }

        if (pzvendidasnivel1l2 < 3 && pzvendidasnivel2l2 >= 3) {
            var rangolinea2 = $("#lvl2l2rangoText").text();
            $("#lvl1l2rangoText").text($("#lvl2l2rangoText").text());
            $("#lvl2l2rangoText").text(rangolinea2)

            var selectRangoLinea2 = $("#lvl1l2rango").prop('selectedIndex');
            $("select#lvl1l2rango")[0].selectedIndex = $("#lvl2l2rango").prop('selectedIndex');
            $("select#lvl2l2rango")[0].selectedIndex = selectRangoLinea2;
            $("#lvl2l2rangoText").text($("#lvl2l2rango option:selected").text());

            var selectPaislinea2 = $("#lvl1l2pais").prop('selectedIndex');
            $("select#lvl1l2pais")[0].selectedIndex = $("#lvl2l2pais").prop('selectedIndex');
            $("select#lvl2l2pais")[0].selectedIndex = selectPaislinea2;

            var piwLinea2 = $("#lvl1l2pzpiw").val();
            $("#lvl1l2pzpiw").val($('#lvl2l2pzpiw').val());
            $('#lvl2l2pzpiw').val(piwLinea2);

            var waLinea2 = $("#lvl1l2pzwa").val();
            $("#lvl1l2pzwa").val($('#lvl2l2pzwa').val());
            $('#lvl2l2pzwa').val(waLinea2);

            var aqpLinea2 = $("#lvl1l2pzaqp").val();
            $("#lvl1l2pzaqp").val($('#lvl2l2pzaqp').val());
            $('#lvl2l2pzaqp').val(aqpLinea2);

            var opLinea2 = $("#lvl1l2pzop").val();
            $("#lvl1l2pzop").val($('#lvl2l2pzop').val());
            $('#lvl2l2pzop').val(opLinea2opLinea2);

            var pzVenta = pzvendidasnivel2l2;
            $('#lvl1l2pz_vendidas').text( $('#lvl2l2pz_vendidas').text());
            $('#lvl2l2pz_vendidas').text(pzVenta);

            $('#lvl2l2retail').text('$0.00');

            pzvendidasnivel1l2 = pzvendidasnivel2l2;
            pzvendidasnivel2l2 = pzVenta;
            if(pzvendidasnivel1l2 >= 3){
                $("#lvl1l2Avatar").attr("src","SimuladorNC/img/ninja.png");
                if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l2 >= 3){
                    $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
                }
            }

            $("#lvl2l2Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        }

        if (pzvendidasnivel1l3 < 3) {
            var rangoLinea3 = $("#lvl1l3rangoText").text();
            $("#lvl1l3rangoText").text($("#lvl2l3rangoText").text());
            $("#lvl2l3rangoText").text(rangoLinea3);

            var selectRangoLinea3 = $("#lvl1l3rango").prop('selectedIndex');
            $("select#lvl1l3rango")[0].selectedIndex = $("#lvl2l3rango").prop('selectedIndex');
            $("select#lvl2l3rango")[0].selectedIndex = selectRangoLinea3;
            $("#lvl2l3rangoText").text($("#lvl2l3rango option:selected").text());

            var selectPaislinea3 = $("#lvl1l3pais").prop('selectedIndex')
            $("select#lvl1l3pais")[0].selectedIndex = $("#lvl2l3pais").prop('selectedIndex');
            $("select#lvl2l3pais")[0].selectedIndex = 0;

            var piwLinea3 = $("#lvl1l3pzpiw").val();
            $("#lvl1l3pzpiw").val($('#lvl2l3pzpiw').val());
            $('#lvl2l3pzpiw').val(piwLinea3);

            var waLinea3 = $("#lvl1l3pzwa").val();
            $("#lvl1l3pzwa").val($('#lvl2l3pzwa').val());
            $('#lvl2l3pzwa').val(waLinea3);

            var aqpLinea3 = $("#lvl1l3pzaqp").val();
            $("#lvl1l3pzaqp").val($('#lvl2l3pzaqp').val());
            $('#lvl2l3pzaqp').val(aqpLinea3);
 
            var opLinea3 = $("#lvl1l3pzop").val();     
            $("#lvl1l3pzop").val($('#lvl2l3pzop').val());
            $('#lvl2l3pzop').val(opLinea3); 

            var pzVenta = pzvendidasnivel2l3;
            $('#lvl1l3pz_vendidas').text( $('#lvl2l3pz_vendidas').text());
            $('#lvl2l3pz_vendidas').text(pzVenta); 

            $('#lvl2l3retail').text('$0.00');

            pzvendidasnivel1l3 = pzvendidasnivel2l3;
            pzvendidasnivel2l3 = pzVenta;
            if(pzvendidasnivel1l3 >= 3){
                $("#lvl1l3Avatar").attr("src","SimuladorNC/img/ninja.png");
                if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l3 >= 3){
                    $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
                }
            }

            $("#lvl2l3Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        }

        $.ajax({
            type: 'POST',
            url: route,
            data:form_data.serialize(),
            success: function(Response){
                // Linea 0 - Nivel 0
                if (Response[0].TotalAmount != '.00') {
                    if (pzvendidasnivel0 > 0) {
                        var totalfinal = (parseFloat(Response[0].Ganancias_Sugerido) + parseFloat(Response[0].Ganancias_Compras) + parseFloat(Response[0].TotalAmount) + parseFloat((Response[0].VGP > 1500 ? Response[0].Total_Adicional : 0)));
                        $('#lvl0retail').text(formatCurrency(totalfinal));
                        (Response[0].VC != '.00' ? $('#lvl0vc').text(Response[0].VGP) : null);
                        (Response[0].Puntos != '.00' ? (Response[0].Puntos > 100 ? $('#lvl0puntaje').text(Response[0].Puntos) : 0) : 0);
                        (Response[0].Kinya != '.00' ? $('#lvl0kinya').text(formatCurrency(Response[0].Kinya)) : $('#lvl0kinya').text(formatCurrency(0)));
                        (Response[0].KinyaL1 != '.00' ? $('#lvl0kinyal1').text(formatCurrency(Response[0].KinyaL1)) : $('#lvl0kinyal1').text(formatCurrency(0)));
                        (Response[0].KinyaL2 != '.00' ? $('#lvl0kinyal2').text(formatCurrency(Response[0].KinyaL2)) : $('#lvl0kinyal2').text(formatCurrency(0)));
                        (Response[0].Kintai != '.00' ? $('#lvl0kintai').text(formatCurrency(Response[0].Kintai)) : $('#lvl0kintai').text(formatCurrency(0)));
                        (Response[0].TotalAmount != '.00' ? $('#lvl0NCHtotal').text(formatCurrency(Response[0].TotalAmount)) : null);
                        $('#lvl0bonoGP').text(formatCurrency(Response[0].Total_Adicional));
                        $('#lvl0bonificaciones').text(formatCurrency(Response[0].Ganancias_Sugerido));
                        $('#lvl0venta').text(formatCurrency(Response[0].Ganancias_Compras));
                    }
                }

                // Linea 1 - Nivel 1
                if (Response[1].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[1].Ganancias_Sugerido) + parseFloat(Response[1].Ganancias_Compras) + parseFloat(Response[1].TotalAmount) + parseFloat((Response[1].VGP > 1500 ? Response[1].Total_Adicional : 0)));
                    $('#lvl1l1retail').text(formatCurrency(totalfinal));
                }
                (Response[1].VC != '.00' ? $('#lvl1l1vc').text(Response[1].VGP) : null);
                (Response[1].Puntos != '.00' ? $('#lvl1l1puntaje').text(Response[1].Puntos) : null);
                (Response[1].Kinya != '.00' ? $('#lvl1l1kinya').text(formatCurrency(Response[1].Kinya)) : null);
                (Response[1].KinyaL1 != '.00' ? $('#lvl1l1kinyal1').text(formatCurrency(Response[1].KinyaL1)) : null);
                (Response[1].KinyaL2 != '.00' ? $('#lvl1l1kinyal2').text(formatCurrency(Response[1].KinyaL2)) : null);
                (Response[1].Kintai != '.00' ? $('#lvl1l1kintai').text(formatCurrency(Response[1].Kintai)) : null);
                (Response[1].TotalAmount != '.00' ? $('#lvl1l1NCHtotal').text(formatCurrency(Response[1].TotalAmount)) : null);
                $('#lvl1l1bonoGP').text(formatCurrency(Response[1].Total_Adicional));
                $('#lvl1l1bonificaciones').text(formatCurrency(Response[1].Ganancias_Sugerido));
                $('#lvl1l1venta').text(formatCurrency(Response[1].Ganancias_Compras));

                // Linea 1 - Nivel 2
                if (Response[2].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[2].Ganancias_Sugerido) + parseFloat(Response[2].Ganancias_Compras) + parseFloat(Response[2].TotalAmount) + parseFloat((Response[2].VGP > 1500 ? Response[2].Total_Adicional : 0)));
                    $('#lvl2l1retail').text(formatCurrency(totalfinal));
                }
                (Response[2].VC != '.00' ? $('#lvl2l1vc').text(Response[2].VGP) : null);
                (Response[2].Puntos != '.00' ? $('#lvl2l1puntaje').text(Response[2].Puntos) : null);
                (Response[2].Kinya != '.00' ? $('#lvl2l1kinya').text(formatCurrency(Response[2].Kinya)) : null);
                (Response[2].KinyaL1 != '.00' ? $('#lvl2l1kinyal1').text(formatCurrency(Response[2].KinyaL1)) : null);
                (Response[2].KinyaL2 != '.00' ? $('#lvl2l1kinyal2').text(formatCurrency(Response[2].KinyaL2)) : null);
                (Response[2].Kintai != '.00' ? $('#lvl2l1kintai').text(formatCurrency(Response[2].Kintai)) : null);
                (Response[2].TotalAmount != '.00' ? $('#lvl2l1NCHtotal').text(formatCurrency(Response[2].TotalAmount)) : null);
                $('#lvl2l1bonoGP').text(formatCurrency(Response[2].Total_Adicional));
                $('#lvl2l1bonificaciones').text(formatCurrency(Response[2].Ganancias_Sugerido));
                $('#lvl2l1venta').text(formatCurrency(Response[2].Ganancias_Compras));

                // Linea 2 - Nivel 1
                if (Response[3].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[3].Ganancias_Sugerido) + parseFloat(Response[3].Ganancias_Compras) + parseFloat(Response[3].TotalAmount) + parseFloat((Response[3].VGP > 1500 ? Response[3].Total_Adicional : 0)));
                    $('#lvl1l2retail').text(formatCurrency(totalfinal));
                }
                console.log(Response[3].Puntos);
                (Response[3].VC != '.00' ? $('#lvl1l2vc').text(Response[3].VGP) : null);
                (Response[3].Puntos != '.00' ? $('#lvl1l2puntaje').text(Response[3].Puntos) : null);
                (Response[3].Kinya != '.00' ? $('#lvl1l2kinya').text(formatCurrency(Response[3].Kinya)) : null);
                (Response[3].KinyaL1 != '.00' ? $('#lvl1l2kinyal1').text(formatCurrency(Response[3].KinyaL1)) : null);
                (Response[3].KinyaL2 != '.00' ? $('#lvl1l2kinyal2').text(formatCurrency(Response[3].KinyaL2)) : null);
                (Response[3].Kintai != '.00' ? $('#lvl1l2kintai').text(formatCurrency(Response[3].Kintai)) : null);
                (Response[3].TotalAmount != '.00' ? $('#lvl1l2NCHtotal').text(formatCurrency(Response[3].TotalAmount)) : null);
                $('#lvl1l2bonoGP').text(formatCurrency(Response[3].Total_Adicional));
                $('#lvl1l2bonificaciones').text(formatCurrency(Response[3].Ganancias_Sugerido));
                $('#lvl1l2venta').text(formatCurrency(Response[3].Ganancias_Compras));

                // Linea 2 - Nivel 2
                if (Response[4].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[4].Ganancias_Sugerido) + parseFloat(Response[4].Ganancias_Compras) + parseFloat(Response[4].TotalAmount) + parseFloat((Response[4].VGP > 1500 ? Response[4].Total_Adicional : 0)));
                    $('#lvl2l2retail').text(formatCurrency(totalfinal));
                }
                (Response[4].VC != '.00' ? $('#lvl2l2vc').text(Response[4].VGP) : null);
                (Response[4].Puntos != '.00' ? $('#lvl2l2puntaje').text(Response[4].Puntos) : null);
                (Response[4].Kinya != '.00' ? $('#lvl2l2kinya').text(formatCurrency(Response[4].Kinya)) : null);
                (Response[4].KinyaL1 != '.00' ? $('#lvl2l2kinyal1').text(formatCurrency(Response[4].KinyaL1)) : null);
                (Response[4].KinyaL2 != '.00' ? $('#lvl2l2kinyal2').text(formatCurrency(Response[4].KinyaL2)) : null);
                (Response[4].Kintai != '.00' ? $('#lvl2l2kintai').text(formatCurrency(Response[4].Kintai)) : null);
                (Response[4].TotalAmount != '.00' ? $('#lvl2l2NCHtotal').text(formatCurrency(Response[4].TotalAmount)) : null);
                $('#lvl2l2bonoGP').text(formatCurrency(Response[4].Total_Adicional));
                $('#lvl2l2bonificaciones').text(formatCurrency(Response[4].Ganancias_Sugerido));
                $('#lvl2l2venta').text(formatCurrency(Response[4].Ganancias_Compras));

                // Linea 3 - Nivel 1
                if (Response[5].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[5].Ganancias_Sugerido) + parseFloat(Response[5].Ganancias_Compras) + parseFloat(Response[5].TotalAmount) + parseFloat((Response[5].VGP > 1500 ? Response[5].Total_Adicional : 0)));
                    $('#lvl1l3retail').text(formatCurrency(totalfinal));
                }
                (Response[5].VC != '.00' ? $('#lvl1l3vc').text(Response[5].VGP) : null);
                (Response[5].Puntos != '.00' ? $('#lvl1l3puntaje').text(Response[5].Puntos) : null);
                (Response[5].Kinya != '.00' ? $('#lvl1l3kinya').text(formatCurrency(Response[5].Kinya)) : null);
                (Response[5].KinyaL1 != '.00' ? $('#lvl1l3kinyal1').text(formatCurrency(Response[5].KinyaL1)) : null);
                (Response[5].KinyaL2 != '.00' ? $('#lvl1l3kinyal2').text(formatCurrency(Response[5].KinyaL2)) : null);
                (Response[5].Kintai != '.00' ? $('#lvl1l3kintai').text(formatCurrency(Response[5].Kintai)) : null);
                (Response[5].TotalAmount != '.00' ? $('#lvl1l3NCHtotal').text(formatCurrency(Response[5].TotalAmount)) : null);
                $('#lvl1l3bonoGP').text(formatCurrency(Response[5].Total_Adicional));
                $('#lvl1l3bonificaciones').text(formatCurrency(Response[5].Ganancias_Sugerido));
                $('#lvl1l3venta').text(formatCurrency(Response[5].Ganancias_Compras));

                // Linea 3 - Nivel 2
                if (Response[6].TotalAmount != '.00') {
                    var totalfinal = (parseFloat(Response[6].Ganancias_Sugerido) + parseFloat(Response[6].Ganancias_Compras) + parseFloat(Response[6].TotalAmount) + parseFloat((Response[6].VGP > 1500 ? Response[6].Total_Adicional : 0)));
                    $('#lvl2l3retail').text(formatCurrency(totalfinal));
                }
                (Response[6].VC != '.00' ? $('#lvl2l3vc').text(Response[6].VGP) : null);
                (Response[6].Puntos != '.00' ? $('#lvl2l3puntaje').text(Response[6].Puntos) : null);
                (Response[6].Kinya != '.00' ? $('#lvl2l3kinya').text(formatCurrency(Response[6].Kinya)) : null);
                (Response[6].KinyaL1 != '.00' ? $('#lvl2l3kinyal1').text(formatCurrency(Response[6].KinyaL1)) : null);
                (Response[6].KinyaL2 != '.00' ? $('#lvl2l3kinyal2').text(formatCurrency(Response[6].KinyaL2)) : null);
                (Response[6].Kintai != '.00' ? $('#lvl2l3kintai').text(formatCurrency(Response[6].Kintai)) : null);
                (Response[6].TotalAmount != '.00' ? $('#lvl2l3NCHtotal').text(formatCurrency(Response[6].TotalAmount)) : null);
                $('#lvl2l3bonoGP').text(formatCurrency(Response[6].Total_Adicional));
                $('#lvl2l3bonificaciones').text(formatCurrency(Response[6].Ganancias_Sugerido));
                $('#lvl2l3venta').text(formatCurrency(Response[6].Ganancias_Compras));
            }
        })
        e.preventDefault();
    });
})

function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    }
    return (neg ? "-$" : '$') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
}

//------------------------- NIVEL 0 ------------------------------------------------------------

var pzvendidasnivel0 = 0;
var lvl0pzpiw = 0;
var lvl0pzwa = 0;
var lvl0pzaqp = 0;
var lvl0pzop = 0;

$("#lvl0pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl0pzaqp").parent('div').hide();
        $("#lvl0pzop").parent('div').hide();
        $("#lvl0pzaqp").val(0);
        $("#lvl0pzop").val(0);
    }
    else{
        $("#lvl0pzaqp").parent('div').show();
        $("#lvl0pzop").parent('div').show();
    }
});

$("#lvl0rango").change(function(){
    $("#lvl0rangoText").text($("#lvl0rango option:selected").text());
});

$('#lvl0pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl0pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl0pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl0pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl0pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl0pzpiw = this.value;
        pzvendidasnivel0 = (parseInt(lvl0pzpiw) + parseInt(lvl0pzwa) + parseInt(lvl0pzaqp) + parseInt(lvl0pzop));
        setPiezasVendidas();
    }
});

$("#lvl0pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl0pzwa = this.value;
        pzvendidasnivel0 = (parseInt(lvl0pzpiw) + parseInt(lvl0pzwa) + parseInt(lvl0pzaqp) + parseInt(lvl0pzop));
        setPiezasVendidas();
    }
});

$("#lvl0pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl0pzaqp = this.value;
        pzvendidasnivel0 = (parseInt(lvl0pzpiw) + parseInt(lvl0pzwa) + parseInt(lvl0pzaqp) + parseInt(lvl0pzop));
        setPiezasVendidas(); 
    }
    
});

$("#lvl0pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl0pzop = this.value;
        pzvendidasnivel0 = (parseInt(lvl0pzpiw) + parseInt(lvl0pzwa) + parseInt(lvl0pzaqp) + parseInt(lvl0pzop));
            setPiezasVendidas();
    }
    
});

function setPiezasVendidas(){
    $('#lvl0pz_vendidas').text(pzvendidasnivel0);
    if(pzvendidasnivel0 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l2 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l3 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
    }
    else{
        $("#lvl0Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl0retail').text('$0.00');
        if(pzvendidasnivel1l1 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/ninja.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 1 LINEA 1 ------------------------------------------------------------

var pzvendidasnivel1l1 = 0;
var lvl1l1pzpiw = 0;
var lvl1l1pzwa = 0;
var lvl1l1pzaqp = 0;
var lvl1l1pzop = 0;

$("#lvl1l1pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl1l1pzaqp").parent('div').hide();
        $("#lvl1l1pzop").parent('div').hide();
        $("#lvl1l1pzaqp").val(0);
        $("#lvl1l1pzop").val(0);
    }
    else{
        $("#lvl1l1pzaqp").parent('div').show();
        $("#lvl1l1pzop").parent('div').show();
    }
});

$("#lvl1l1rango").change(function(){
    $("#lvl1l1rangoText").text($("#lvl1l1rango option:selected").text());
});

$('#lvl1l1pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l1pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l1pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l1pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl1l1pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l1pzpiw = this.value;
        pzvendidasnivel1l1 = (parseInt(lvl1l1pzpiw) + parseInt(lvl1l1pzwa) + parseInt(lvl1l1pzaqp) + parseInt(lvl1l1pzop));
        setPiezasVendidaslvl1l1();
    }
});

$("#lvl1l1pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l1pzwa = this.value;
        pzvendidasnivel1l1 = (parseInt(lvl1l1pzpiw) + parseInt(lvl1l1pzwa) + parseInt(lvl1l1pzaqp) + parseInt(lvl1l1pzop));
        setPiezasVendidaslvl1l1();
    }
});

$("#lvl1l1pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l1pzaqp = this.value;
        pzvendidasnivel1l1 = (parseInt(lvl1l1pzpiw) + parseInt(lvl1l1pzwa) + parseInt(lvl1l1pzaqp) + parseInt(lvl1l1pzop));
        setPiezasVendidaslvl1l1(); 
    }
    
});

$("#lvl1l1pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l1pzop = this.value;
        pzvendidasnivel1l1 = (parseInt(lvl1l1pzpiw) + parseInt(lvl1l1pzwa) + parseInt(lvl1l1pzaqp) + parseInt(lvl1l1pzop));
            setPiezasVendidaslvl1l1();
    }
    
});

function setPiezasVendidaslvl1l1(){
    $('#lvl1l1pz_vendidas').text(pzvendidasnivel1l1);
    if(pzvendidasnivel1l1 >= 3){
        $("#lvl1l1Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel2l1 >= 3 && pzvendidasnivel1l1 >= 3){
            $('#lvl1l1Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
    }
    else {
        $("#lvl1l1Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl1l1retail').text('$0.00');
        if(pzvendidasnivel1l1 < 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/ninja.png");
        }
        if(pzvendidasnivel1l2 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel1l3 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 1 LINEA 2 ------------------------------------------------------------

var pzvendidasnivel1l2 = 0;
var lvl1l2pzpiw = 0;
var lvl1l2pzwa = 0;
var lvl1l2pzaqp = 0;
var lvl1l2pzop = 0;

$("#lvl1l2pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl1l2pzaqp").parent('div').hide();
        $("#lvl1l2pzop").parent('div').hide();
        $("#lvl1l2pzaqp").val(0);
        $("#lvl1l2pzop").val(0);
    }
    else{
        $("#lvl1l2pzaqp").parent('div').show();
        $("#lvl1l2pzop").parent('div').show();
    }
});

$("#lvl1l2rango").change(function(){
    $("#lvl1l2rangoText").text($("#lvl1l2rango option:selected").text());
});

$('#lvl1l2pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l2pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l2pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l2pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl1l2pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l2pzpiw = this.value;
        pzvendidasnivel1l2 = (parseInt(lvl1l2pzpiw) + parseInt(lvl1l2pzwa) + parseInt(lvl1l2pzaqp) + parseInt(lvl1l2pzop));
        setPiezasVendidaslvl1l2();
    }
});

$("#lvl1l2pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l2pzwa = this.value;
        pzvendidasnivel1l2 = (parseInt(lvl1l2pzpiw) + parseInt(lvl1l2pzwa) + parseInt(lvl1l2pzaqp) + parseInt(lvl1l2pzop));
        setPiezasVendidaslvl1l2();
    }
});

$("#lvl1l2pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l2pzaqp = this.value;
        pzvendidasnivel1l2 = (parseInt(lvl1l2pzpiw) + parseInt(lvl1l2pzwa) + parseInt(lvl1l2pzaqp) + parseInt(lvl1l2pzop));
        setPiezasVendidaslvl1l2(); 
    }
    
});

$("#lvl1l2pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l2pzop = this.value;
        pzvendidasnivel1l2 = (parseInt(lvl1l2pzpiw) + parseInt(lvl1l2pzwa) + parseInt(lvl1l2pzaqp) + parseInt(lvl1l2pzop));
            setPiezasVendidaslvl1l2();
    }
    
});

function setPiezasVendidaslvl1l2(){
    $('#lvl1l2pz_vendidas').text(pzvendidasnivel1l2);
    if(pzvendidasnivel1l2 >= 3){
        $("#lvl1l2Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l2 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l3 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel2l2 >= 3 && pzvendidasnivel1l2 >= 3){
            $('#lvl1l2Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
    }
    else{
        $("#lvl1l2Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl1l2retail').text('$0.00');
        if(pzvendidasnivel1l1 < 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/ninja.png");
        }
        if(pzvendidasnivel1l2 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel1l3 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 1 LINEA 3 ------------------------------------------------------------

var pzvendidasnivel1l3 = 0;
var lvl1l3pzpiw = 0;
var lvl1l3pzwa = 0;
var lvl1l3pzaqp = 0;
var lvl1l3pzop = 0;

$("#lvl1l3pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl1l3pzaqp").parent('div').hide();
        $("#lvl1l3pzop").parent('div').hide();
        $("#lvl1l3pzaqp").val(0);
        $("#lvl1l3pzop").val(0);
    }
    else{
        $("#lvl1l3pzaqp").parent('div').show();
        $("#lvl1l3pzop").parent('div').show();
    }
});

$("#lvl1l3rango").change(function(){
    $("#lvl1l3rangoText").text($("#lvl1l3rango option:selected").text());
});

$('#lvl1l3pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l3pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l3pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl1l3pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl1l3pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l3pzpiw = this.value;
        pzvendidasnivel1l3 = (parseInt(lvl1l3pzpiw) + parseInt(lvl1l3pzwa) + parseInt(lvl1l3pzaqp) + parseInt(lvl1l3pzop));
        setPiezasVendidaslvl1l3();
    }
});

$("#lvl1l3pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l3pzwa = this.value;
        pzvendidasnivel1l3 = (parseInt(lvl1l3pzpiw) + parseInt(lvl1l3pzwa) + parseInt(lvl1l3pzaqp) + parseInt(lvl1l3pzop));
        setPiezasVendidaslvl1l3();
    }
});

$("#lvl1l3pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l3pzaqp = this.value;
        pzvendidasnivel1l3 = (parseInt(lvl1l3pzpiw) + parseInt(lvl1l3pzwa) + parseInt(lvl1l3pzaqp) + parseInt(lvl1l3pzop));
        setPiezasVendidaslvl1l3(); 
    }
    
});

$("#lvl1l3pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl1l3pzop = this.value;
        pzvendidasnivel1l3 = (parseInt(lvl1l3pzpiw) + parseInt(lvl1l3pzwa) + parseInt(lvl1l3pzaqp) + parseInt(lvl1l3pzop));
            setPiezasVendidaslvl1l3();
    }
    
});

function setPiezasVendidaslvl1l3(){
    $('#lvl1l3pz_vendidas').text(pzvendidasnivel1l3);
    if(pzvendidasnivel1l3 >= 3){
        $("#lvl1l3Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l2 >= 3 || pzvendidasnivel0 >= 3 && pzvendidasnivel1l3 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel2l3 >= 3 && pzvendidasnivel1l3 >= 3){
            $('#lvl1l3Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
    }
    else{
        $("#lvl1l3Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl1l3retail').text('$0.00');
        if(pzvendidasnivel1l1 < 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/ninja.png");
        }
        if(pzvendidasnivel1l2 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
        if(pzvendidasnivel1l3 >= 3 && pzvendidasnivel0 >= 3){
            $("#lvl0Avatar").attr("src","SimuladorNC/img/samurai.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 2 LINEA 1 ------------------------------------------------------------

var pzvendidasnivel2l1 = 0;
var lvl2l1pzpiw = 0;
var lvl2l1pzwa = 0;
var lvl2l1pzaqp = 0;
var lvl2l1pzop = 0;

$("#lvl2l1pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl2l1pzaqp").parent('div').hide();
        $("#lvl2l1pzop").parent('div').hide();
        $("#lvl2l1pzaqp").val(0);
        $("#lvl2l1pzop").val(0);
    }
    else{
        $("#lvl2l1pzaqp").parent('div').show();
        $("#lvl2l1pzop").parent('div').show();
    }
});

$("#lvl2l1rango").change(function(){
    $("#lvl2l1rangoText").text($("#lvl2l1rango option:selected").text());
});

$('#lvl2l1pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l1pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l1pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l1pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl2l1pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l1pzpiw = this.value;
        pzvendidasnivel2l1 = (parseInt(lvl2l1pzpiw) + parseInt(lvl2l1pzwa) + parseInt(lvl2l1pzaqp) + parseInt(lvl2l1pzop));
        setPiezasVendidaslvl2l1();
    }
});

$("#lvl2l1pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l1pzwa = this.value;
        pzvendidasnivel2l1 = (parseInt(lvl2l1pzpiw) + parseInt(lvl2l1pzwa) + parseInt(lvl2l1pzaqp) + parseInt(lvl2l1pzop));
        setPiezasVendidaslvl2l1();
    }
});

$("#lvl2l1pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l1pzaqp = this.value;
        pzvendidasnivel2l1 = (parseInt(lvl2l1pzpiw) + parseInt(lvl2l1pzwa) + parseInt(lvl2l1pzaqp) + parseInt(lvl2l1pzop));
        setPiezasVendidaslvl2l1(); 
    }
    
});

$("#lvl2l1pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l1pzop = this.value;
        pzvendidasnivel2l1 = (parseInt(lvl2l1pzpiw) + parseInt(lvl2l1pzwa) + parseInt(lvl2l1pzaqp) + parseInt(lvl2l1pzop));
            setPiezasVendidaslvl2l1();
    }
    
});

function setPiezasVendidaslvl2l1(){
    $('#lvl2l1pz_vendidas').text(pzvendidasnivel2l1);
    if(pzvendidasnivel2l1 >= 3){
        $("#lvl2l1Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel2l1 >= 3 && pzvendidasnivel1l1 >= 3){
            $('#lvl1l1Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
        
    }
    else{
        $("#lvl2l1Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl2l1retail').text('$0.00');
        if(pzvendidasnivel2l1 < 3 && pzvendidasnivel1l1 >= 3){
            $("#lvl1l1Avatar").attr("src","SimuladorNC/img/ninja.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 2 LINEA 2 ------------------------------------------------------------

var pzvendidasnivel2l2 = 0;
var lvl2l2pzpiw = 0;
var lvl2l2pzwa = 0;
var lvl2l2pzaqp = 0;
var lvl2l3pzop = 0;

$("#lvl2l2pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl2l2pzaqp").parent('div').hide();
        $("#lvl2l2pzop").parent('div').hide();
        $("#lvl2l2pzaqp").val(0);
        $("#lvl2l2pzop").val(0);
    }
    else{
        $("#lvl2l2pzaqp").parent('div').show();
        $("#lvl2l2pzop").parent('div').show();
    }
});

$("#lvl2l2rango").change(function(){
    $("#lvl2l2rangoText").text($("#lvl2l2rango option:selected").text());
});

$('#lvl2l2pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l2pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l2pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l2pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl2l2pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l2pzpiw = this.value;
        pzvendidasnivel2l2 = (parseInt(lvl2l2pzpiw) + parseInt(lvl2l2pzwa) + parseInt(lvl2l2pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l2();
    }
});

$("#lvl2l2pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l2pzwa = this.value;
        pzvendidasnivel2l2 = (parseInt(lvl2l2pzpiw) + parseInt(lvl2l2pzwa) + parseInt(lvl2l2pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l2();
    }
});

$("#lvl2l2pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l2pzaqp = this.value;
        pzvendidasnivel2l2 = (parseInt(lvl2l2pzpiw) + parseInt(lvl2l2pzwa) + parseInt(lvl2l2pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l2(); 
    }
    
});

$("#lvl2l2pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l3pzop = this.value;
        pzvendidasnivel2l2 = (parseInt(lvl2l2pzpiw) + parseInt(lvl2l2pzwa) + parseInt(lvl2l2pzaqp) + parseInt(lvl2l3pzop));
            setPiezasVendidaslvl2l2();
    }
    
});

function setPiezasVendidaslvl2l2(){
    $('#lvl2l2pz_vendidas').text(pzvendidasnivel2l2);
    if(pzvendidasnivel2l2 >= 3){
        $("#lvl2l2Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel2l2 >= 3 && pzvendidasnivel1l2 >= 3){
            $('#lvl1l2Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
    }
    else{
        $("#lvl2l2Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl2l2retail').text('$0.00');
        if(pzvendidasnivel2l2 < 3 && pzvendidasnivel1l2 >= 3){
            $('#lvl1l2Avatar').attr("src", "SimuladorNC/img/ninja.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}

//------------------------- NIVEL 2 LINEA 3 ------------------------------------------------------------

var pzvendidasnivel2l3 = 0;
var lvl2l3pzpiw = 0;
var lvl2l3pzwa = 0;
var lvl2l3pzaqp = 0;
var lvl2l3pzop = 0;

$("#lvl2l3pais").change(function(){
    if(this.value == 'Gtm' || this.value == 'Slv'){
        $("#lvl2l3pzaqp").parent('div').hide();
        $("#lvl2l3pzop").parent('div').hide();
        $("#lvl2l3pzaqp").val(0);
        $("#lvl2l3pzop").val(0);
    }
    else{
        $("#lvl2l3pzaqp").parent('div').show();
        $("#lvl2l3pzop").parent('div').show();
    }
});

$("#lvl2l3rango").change(function(){
    $("#lvl2l3rangoText").text($("#lvl2l3rango option:selected").text());
});

$('#lvl2l3pzpiw').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l3pzwa').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l3pzaqp').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#lvl2l3pzop').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
});

$("#lvl2l3pzpiw").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l3pzpiw = this.value;
        pzvendidasnivel2l3 = (parseInt(lvl2l3pzpiw) + parseInt(lvl2l3pzwa) + parseInt(lvl2l3pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l3();
    }
});

$("#lvl2l3pzwa").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l3pzwa = this.value;
        pzvendidasnivel2l3 = (parseInt(lvl2l3pzpiw) + parseInt(lvl2l3pzwa) + parseInt(lvl2l3pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l3();
    }
});

$("#lvl2l3pzaqp").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l3pzaqp = this.value;
        pzvendidasnivel2l3 = (parseInt(lvl2l3pzpiw) + parseInt(lvl2l3pzwa) + parseInt(lvl2l3pzaqp) + parseInt(lvl2l3pzop));
        setPiezasVendidaslvl2l3(); 
    }
    
});

$("#lvl2l3pzop").change(function(){
    var inputenter = this.value;
    if(inputenter == ''){
        this.value = 0;
    }
    else{
        lvl2l3pzop = this.value;
        pzvendidasnivel2l3 = (parseInt(lvl2l3pzpiw) + parseInt(lvl2l3pzwa) + parseInt(lvl2l3pzaqp) + parseInt(lvl2l3pzop));
            setPiezasVendidaslvl2l3();
    }
    
});

function setPiezasVendidaslvl2l3(){
    $('#lvl2l3pz_vendidas').text(pzvendidasnivel2l3);
    if(pzvendidasnivel2l3 >= 3){
        $("#lvl2l3Avatar").attr("src","SimuladorNC/img/ninja.png");
        if(pzvendidasnivel2l3 >= 3  && pzvendidasnivel1l3 >= 3){
            $('#lvl1l3Avatar').attr("src", "SimuladorNC/img/samurai.png");
        }
    }
    else{
        $("#lvl2l3Avatar").attr("src","https://nikkenlatam.com/oficina-virtual/assets/images/general/logo-abi.png");
        $('#lvl2l3retail').text('$0.00');
        if(pzvendidasnivel2l3 < 3 && pzvendidasnivel1l3 >= 3){
            $('#lvl1l3Avatar').attr("src", "SimuladorNC/img/ninja.png");
        }
    }

    if(pzvendidasnivel0 >= 3 && pzvendidasnivel1l1 >= 3 && pzvendidasnivel1l2 >= 3 && pzvendidasnivel1l3 >= 3 && pzvendidasnivel2l1 >= 3 && pzvendidasnivel2l2 >= 3 && pzvendidasnivel2l3 >= 3){
        $("#lvl0Avatar").attr("src","SimuladorNC/img/sensei.png");
    }
}