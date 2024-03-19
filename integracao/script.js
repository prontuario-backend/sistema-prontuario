'use strict'
/*
    <!--importando o ajax-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
    crossorigin="anonymous"></script>
    <script src="./script.js" defer></script>

    
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$crmOuCoren = $_POST["crmOuCoren"];

$arr =['nome'=> $nome,
'senha'=> $senha,
'crmOuCoren'=> $crmOuCoren];
fff




echo json_encode($arr);
*/    





class Request{
    url;
    metodoEnvio;
    dados;
    resposta;

    constructor(url, metodoEnvio, dados){

        if(this.validarRequest(url, metodoEnvio, dados) === true){

             this.url = url;
            this.metodoEnvio = metodoEnvio;
            this.dados = appendFormData(dados);//retorna um objeto formData
             this.resposta = '';
             this.fazerRequisicao(this.url, this.metodoEnvio, this.dados);
            
         }

    }
    appendFormData(dados){//ok
if(typeof dados == Object){
    let formData = new FormData();
    Object.keys(dados).forEach(chave=>{
            formData.append(chave, dados[chave]);
        }
    );
return formData;    
}else{
    throw new Error('Erro, o parametro passado deve ser um objeto.');
}
    }

    validarMetodoEnvio(metodoEnvio){//ok
        if(typeof metodoEnvio != null  && typeof metodoEnvio != undefined && typeof metodoEnvio != Number && typeof metodoEnvio != Boolean){
            let metodoEnvio2 = metodoEnvio.toLowerCase();
            let metodos = ['get',  'put', 'post', 'patch', 'delete'];
            let valido = false;
            for(let a=0; a< metodos.length; a++){
                    if(metodoEnvio2.localeCompare(metodos[a]) === 0){
                        //log(`metodo: ${metodoEnvio2} valido, indice ${a}: `);
                        valido = true;
                    break;
                    }          
            }
            if(valido == false){
                throw new Error('Erro, o parametro fornecido não é um metodo http valido');
            }
        }else{
            throw new Error('Erro, o parametro fornecido deve ser do tipo string');
        }
        }


    validarRequest(url, metodoEnvio, dados){




            if(this.validarMetodoEnvio(metodoEnvio) == true){

                if(typeof dados == String  && typeof dados != null  && typeof dados != undefined && typeof dados != Number 
                    && typeof dados != Boolean){
                    return true;
                }else{
                    throw new Error('Erro, o tipo de dados passados devem ser um objeto, não pode ser do tipo null ou undefined ou de outros tipos.');
                }

                
            }    
                  
            
        

    }


    fazerRequisicao(url, metodoEnvio, dados){

        $.ajax({
            url: url,
            method: metodoEnvio,
            data: dados,
            processData: false,
            contentType: false
        }).done(function(res){ 
            console.log(res)
             this.resposta = res;
             return this.getResposta(); 
        });



    }

    getResposta(){
        if(typeof this.resposta != null && typeof this.resposta != undefined){
            return this.getResposta;
        }else{
            //throw new Error('Erro, não foi possivel retornar uma resposta pois uma requisição ainda não foi feita.');
        }
    }

}
function log(str){
    console.log(str);
}
let dados  = {
    nome: 'eduardo',
    senha: '1234567890',
    crmOuCoren: 'corenmg12345enf'
}



let req = new Request('http://localhost/sistema-prontuario/integracao/integracao.php', 'post', dados);

