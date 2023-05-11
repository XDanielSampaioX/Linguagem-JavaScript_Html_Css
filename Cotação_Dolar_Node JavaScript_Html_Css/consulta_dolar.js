

const myInterval = window.setInterval(function(){
    $.ajax({
        url:"https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL",
        type:"GET",
        success: function(result){
            console.log(JSON.stringify(result))
            let qtd_dolar= parseFloat(document.getElementById('qtd_dolar').value)
            let valor_real= parseFloat(result.USDBRL.high)
            let resultado= qtd_dolar * valor_real;

            document.getElementById("nome").innerHTML = result.USDBRL.name 
            document.getElementById("alto").innerHTML = result.USDBRL.high 
         
            document.getElementById('resultado_conversao').innerHTML= resultado.toFixed(2) + " R$"
        },
        error:function(error){
            console.log(JSON.stringify(error))
        }
    })
}, 2000);
