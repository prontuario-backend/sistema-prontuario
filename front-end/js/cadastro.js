
        document.addEventListener('DOMContentLoaded', function () {
            const nomeInput = document.getElementById('nome');
            const maeInput = document.getElementById('mae');
            const paiInput = document.getElementById('pai');
            const cpfInput = document.getElementById('cpf');
            const idadeInput = document.getElementById('idade');
            const dataNascimentoInput = document.getElementById('data-nascimento');
            const alturaInput = document.getElementById('altura');
            const pesoInput = document.getElementById('peso');
            const cepInput = document.getElementById('cep');
            const emailInput = document.getElementById('email');
            const celularInput = document.getElementById('celular');
            const sexoInput = document.getElementById('sexo');
            const racaInput = document.getElementById('raca');
            const enderecoInput = document.getElementById('endereco'); 


            nomeInput.addEventListener('input', function () {
                this.value = this.value.replace(/[0-9]/g, '');
            });

            maeInput.addEventListener('input', function () {
                this.value = this.value.replace(/[0-9]/g, '');
            });

            paiInput.addEventListener('input', function () {
                this.value = this.value.replace(/[0-9]/g, '');
            });

            cpfInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, ''); // Remove anything that is not a digit
                if (this.value.length > 11) {
                    this.value = this.value.slice(0, 11); // Limit to 11 characters
                }
                // Format CPF (###.###.###-##)
                this.value = this.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            });

            idadeInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, ''); // Remove anything that is not a digit
            });

            dataNascimentoInput.addEventListener('input', function () {
                this.value = this.value.replace(/[^\d\/]/g, ''); // Remove anything that is not a digit or '/'
                // Format date (##/##/####)
                if (this.value.length > 10) {
                    this.value = this.value.slice(0, 10); // Limit to 10 characters
                }
            });

            alturaInput.addEventListener('input', function () {
                this.value = this.value.replace(/[^\d.]/g, ''); // Remove anything that is not a digit or '.'
            });

            pesoInput.addEventListener('input', function () {
                this.value = this.value.replace(/[^\d.]/g, ''); // Remove anything that is not a digit or '.'
            });

            cepInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, ''); // Remove anything that is not a digit
                // Format CEP (#####-###)
                this.value = this.value.replace(/^(\d{5})(\d)/, "$1-$2");
            });

            emailInput.addEventListener('input', function () {
                const email = this.value.trim();
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email pattern
                const emailError = document.getElementById('error-email');
                if (!emailPattern.test(email)) {
                    emailError.textContent = "Por favor, insira um e-mail válido.";
                } else {
                    emailError.textContent = "";
                }
            });

            celularInput.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, ''); // Remove anything that is not a digit
                // Format celular (##) #####-####
                this.value = this.value.replace(/^(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
            });

            // Adicionar evento de clique para o botão cadastrar
            const btnCadastrar = document.getElementById('btnCadastrar');
            btnCadastrar.addEventListener('click', function () {
                // Verifica se todos os campos estão preenchidos corretamente
                const nome = nomeInput.value.trim();
                const mae = maeInput.value.trim();
                const pai = paiInput.value.trim();
                const cpf = cpfInput.value.trim();
                const idade = idadeInput.value.trim();
                const dataNascimento = dataNascimentoInput.value.trim();
                const altura = alturaInput.value.trim();
                const peso = pesoInput.value.trim();
                const cep = cepInput.value.trim();
                const email = emailInput.value.trim();
                const celular = celularInput.value.trim();

                // Validar os campos individualmente
                const nomeError = document.getElementById('error-nome');
                const maeError = document.getElementById('error-mae');
                const paiError = document.getElementById('error-pai');
                const cpfError = document.getElementById('error-cpf');
                const idadeError = document.getElementById('error-idade');
                const dataNascimentoError = document.getElementById('error-data-nascimento');
                const alturaError = document.getElementById('error-altura');
                const pesoError = document.getElementById('error-peso');
                const cepError = document.getElementById('error-cep');
                const emailError = document.getElementById('error-email');
                const celularError = document.getElementById('error-celular');

                // Resetar mensagens de erro
                nomeError.textContent = "";
                maeError.textContent = "";
                paiError.textContent = "";
                cpfError.textContent = "";
                idadeError.textContent = "";
                dataNascimentoError.textContent = "";
                alturaError.textContent = "";
                pesoError.textContent = "";
                cepError.textContent = "";
                emailError.textContent = "";
                celularError.textContent = "";
                sexoInput.value = '';
                racaInput.value = '';
                enderecoInput.value = '';
                // Validações
                if (nome === '') {
                    nomeError.textContent = "Por favor, insira um nome.";
                    return;
                }
                if (mae === '') {
                    maeError.textContent = "Por favor, insira o nome da mãe.";
                    return;
                }
                if (pai === '') {
                    paiError.textContent = "Por favor, insira o nome do pai.";
                    return;
                }
                if (cpf === '') {
                    cpfError.textContent = "Por favor, insira um CPF.";
                    return;
                }
                if (idade === '') {
                    idadeError.textContent = "Por favor, insira uma idade.";
                    return;
                }
                if (dataNascimento === '') {
                    dataNascimentoError.textContent = "Por favor, insira uma data de nascimento.";
                    return;
                }
                if (altura === '') {
                    alturaError.textContent = "Por favor, insira uma altura.";
                    return;
                }
                if (peso === '') {
                    pesoError.textContent = "Por favor, insira um peso.";
                    return;
                }
                if (cep === '') {
                    cepError.textContent = "Por favor, insira um CEP.";
                    return;
                }
                if (email === '') {
                    emailError.textContent = "Por favor, insira um e-mail.";
                    return;
                }
                if (celular === '') {
                    celularError.textContent = "Por favor, insira um número de celular.";
                    return;
                }

                // Processar os dados do formulário e realizar o cadastro (substitua por sua lógica de cadastro)
                alert('Cadastro realizado com sucesso!');

                // Limpar os campos após o cadastro
                nomeInput.value = '';
                maeInput.value = '';
                paiInput.value = '';
                cpfInput.value = '';
                idadeInput.value = '';
                dataNascimentoInput.value = '';
                alturaInput.value = '';
                pesoInput.value = '';            
                cepInput.value = '';
                emailInput.value = '';
                celularInput.value = '';

                // Adicionar outras operações após o cadastro, se necessário
            });
        });
 