    var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
      "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

$.ajax(
    {
      beforeSend: function()
      {
        //Aviso espera
//          $.mobile.showPageLoadingMsg();
      },
      type: "POST",
      async: true,
      dataType: 'jsonp',
      contentType: 'application/json; utf-8',
      url:"http://192.168.35.244/WebService/graage.ws",//? + cFiltro + "age=" + plAgeGra  + "&mes=" + plMes + "&anio=" + plAnio,
      data: "{}",
      success: function(data)
      {
        //Valor de Actualización
          xLabAct();
        //Revisa
          $.each( data, function( key, val)
          {
            //Valida
              if ( val.numage >= 81 || val.numage ==19 )
              {
                //Revisa
                  var nEstima = val.estima;
                  var nPorGra = val.porgra;
                  var nCuvGra = parseFloat(val.cuvgra / 1000);
                  var nAveGra = parseFloat(val.avegra / 1000);
                //Arma
                  var cLetra = '';
                //Valida
                  if (val.numage < 86 || val.numage ==19){
                    //Arma
                    //  cLetra = String.fromCharCode(parseInt(64 + (val.numage-80)));
                      cLetra = val.numage;
                  }

                //Arma Xml
                  lcGrafica = xArmaXml(nEstima , nPorGra , cLetra, val.papage);

                  if(val.numage < 86 && val.numage>80){
                      cLetra = String.fromCharCode(parseInt(64 + (cLetra-80)));
                  }
                //Grafica
                  xGraEq(lcGrafica , 'chart-container' + cLetra);
                //Valor
                  xLabelCuo(nCuvGra,cLetra);
                //Valor
                  xLabelVta(nAveGra,cLetra);
                  
                //Valor
                  xLabelPor(nPorGra,cLetra);
              }
          });
        //Aviso espera
          //$.mobile.hidePageLoadingMsg();
      },
      error:function()
      {
        //Aviso espera
          //$.mobile.hidePageLoadingMsg();
        //Mensaje
         // alert('ERROR GENERAL DEL SISTEMA, INTENTE MAS TARDE');
      },
      complete: function() {
        //Aviso espera
          //$.mobile.hidePageLoadingMsg();
      },
    });


//Arma Xml
  function xArmaXml(pnEstima , pnPorGra , pTipGra,papage)
  {
    //Valida
      if (pnPorGra > 100)
      {
        pnPorGra = 100;
      }
      lDisplay = ' ';
      if ( (pnEstima % 10) > 0)
      {
        lDisplay = pnEstima + ' %';
      }
    //Valida
      if (pTipGra != ''){
        //pTipGra = 'EQUIPO ' + pTipGra;
        if (pTipGra>=81)//Es un equipo
          pTipGra = 'EQUIPO '+String.fromCharCode(parseInt(64 + (pTipGra-80)));
        else
          pTipGra = papage;
                    
      }
      else{
        pTipGra = 'GENERAL';
      }
    //Arma
      lcGraficaAux = '<chart caption="' + pTipGra + '" manageresize="1" bgColor="FFFFFF" theme="fint" showhovereffect="1" majortmnumber="10" minortmnumber="10" palette="1" numbersuffix="%" showvalue="1" gaugeinnerradius="25%" valueBelowPivot="1">';
      lcGraficaAux = lcGraficaAux + '<colorrange>';
      if (pnEstima >= 95)
      {
        lcGraficaAux = lcGraficaAux + '<color minvalue="0"  maxvalue="90"  code="B41527" />';
        lcGraficaAux = lcGraficaAux + '<color minvalue="90" maxvalue="95"  code="E48739" />';
        lcGraficaAux = lcGraficaAux + '<color minvalue="95" maxvalue="100" code="399E38" />';
      }
      else if (pnEstima < 10)
      {
        lcGraficaAux = lcGraficaAux + '<color minvalue="0" maxvalue="5"   code="E48739" />';
        lcGraficaAux = lcGraficaAux + '<color minvalue="5" maxvalue="100" code="399E38" />';
      }
      else
      {
        lcGraficaAux = lcGraficaAux + '<color minvalue="0"                               maxvalue="' + parseInt(pnEstima - 5) + '"  code="B41527" />';
        lcGraficaAux = lcGraficaAux + '<color minvalue="' + parseInt(pnEstima - 5) + '"  maxvalue="' + pnEstima + '"                code="E48739" />';
        lcGraficaAux = lcGraficaAux + '<color minvalue="' + pnEstima + '"                maxvalue="100"                             code="399E38" />';
      }
      lcGraficaAux = lcGraficaAux + '</colorrange>';
      lcGraficaAux = lcGraficaAux + '<dials>';
      lcGraficaAux = lcGraficaAux + '<dial showvalue="1" value="' + pnPorGra + '" tooltext="' + pnPorGra + '%" topwidth="1" borderthickness="1"  bgcolor="333333" bordercolor="333333" basewidth="8" />';
      lcGraficaAux = lcGraficaAux + '</dials>';
      lcGraficaAux = lcGraficaAux + '</chart>';
    return(lcGraficaAux);
  }

//Arma Xml - Grafica
  function xGraEq(plcGrafica , pTipGra)
  {
    //Abre grafica
      FusionCharts.ready(function ()
      {
        //Arma
          cXml = plcGrafica;
          var revenueChart = new FusionCharts(
          {
            type       : 'angulargauge',
            renderAt   : pTipGra,
            width      : '90%',
            height     : '250',
            bgColor    : 'FFFFFF',
            dataFormat : 'xml',
            "dataSource": cXml
          })
          .render();
      });
  }

//Arma Label
function xLabAct(){
    var d = new Date();

    var date = d.getDate() + ' de ' + monthNames[d.getMonth()] + ' del ' + d.getFullYear() + ' a las '  + ("0" + d.getHours()).slice(-2) + ':' + ("0" + d.getMinutes()).slice(-2) + ':' + ("0" + d.getSeconds()).slice(-2);
    $("#dateAct").text("\u00daltima actualizaci\u00f3n " + date  );
  }
//Arma Label
  function xLabelCuo(plnCuvGra , plLetra){
    var str = plnCuvGra.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    str = str.substring(0,str.length-3);
    $("#LabCuo" + plLetra).text(str);
  }

//Arma Label
  function xLabelVta(plnAveGra , plLetra){
    var str = plnAveGra.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
    str = str.substring(0,str.length-3);
    $("#LabVta" + plLetra).text(str);  }

//Arma Label
  function xLabelPor(plnPorGra , plLetra){
    $("#LabPor" + plLetra).text(plnPorGra + '  ' + "%");
  }
