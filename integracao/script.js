"use strict";
/*
    <!--importando o ajax-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
    crossorigin="anonymous"></script>
    <script src="./script.js" defer></script>
*/


var appendFormData = function(dados) {//ok
	if (
        typeof dados != String &&
        typeof dados != null &&
        typeof dados != undefined &&
        typeof dados != Number &&
        typeof dados != Boolean
    ) {
		let formData = new FormData();
		Object.keys(dados).forEach((chave) => {
			formData.append(chave, dados[chave]);
		});
		return formData;
	} else {
		throw new Error("Erro, o parametro passado deve ser um objeto.");
	}
}

var validarMetodoEnvio = function (metodoEnvio) {//ok
	if (
		typeof metodoEnvio != null &&
		typeof metodoEnvio != undefined &&
		typeof metodoEnvio != Number &&
		typeof metodoEnvio != Boolean
	) {
		let metodoEnvio2 = metodoEnvio.toLowerCase();
		let metodos = ["get", "put", "post", "patch", "delete"];
		let valido = false;
		for (let a = 0; a < metodos.length; a++) {
			if (metodoEnvio2.localeCompare(metodos[a]) === 0) {
				// log(`metodo: ${metodoEnvio2} valido, indice ${a}: `);
				valido = true;
                return metodoEnvio2;
			}
		}
		if (valido == false) {
			throw new Error(
				"Erro, o parametro fornecido não é um metodo http valido"
			);
		}
	} else {
		throw new Error("Erro, o parametro fornecido deve ser do tipo string");
	}
}

var validarRequest = function (url, metodoEnvio, dados) {//ok
    url = url.trim();
    metodoEnvio = metodoEnvio.trim();
    if(
        typeof url != Object &&
        typeof url != null &&
        typeof url != undefined &&
        typeof url != Number &&
        typeof url != Boolean
    ){
        if(url.includes('https://') || url.includes('http://')){


        if (validarMetodoEnvio(metodoEnvio) == metodoEnvio) {
            if (
                typeof dados != String &&
                typeof dados != null &&
                typeof dados != undefined &&
                typeof dados != Number &&
                typeof dados != Boolean
            ) {
                return true;
            } else {
                throw new Error(
                    "Erro, o tipo de dados passados devem ser um objeto, não pode ser do tipo null ou undefined ou de outros tipos."
                );
            }
        }
        }else{
            throw new Error('Erro, a url deve possuir o prefixo https:// ou htttp://');
        }




    }else{
        throw new Error('Erro, a url deve ser do tipo string');
    }

}

var fazerRequisicao = async function (url, metodoEnvio, dados) {
    if(validarRequest(url, metodoEnvio, dados)!= true){
        throw new Error('Erro, 1 ou mais parametros para requisicao são invalidos')
    }
	$.ajax({
		url: url,
		method: metodoEnvio,
		data: dados,
		processData: false,
		contentType: false,
	}).done(function (res) {
		res = JSON.parse(res);
        log(res);
	});
}


function log(str) {
	console.log(str);
}
//dados para teste
// let dados = {
// 	nome: "eduardo",
// 	senha: "1234567890",
// 	crmOuCoren: "corenmg12345enf",
// };

// let a = fazerRequisicao("http://localhost/php-poo/Nova%20pasta/sistema-prontuario/integracao/integracao.php",
// validarMetodoEnvio('post'),
// appendFormData(dados));