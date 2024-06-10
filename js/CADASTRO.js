var form1 = document.getElementById("etapa1");
var form2 = document.getElementById("etapa2");

var indicador1 = document.getElementById('indicador1');
var indicador2 = document.getElementById('indicador2');

var botaoProximaEtapa = document.getElementById('continuar');


function etapaChange1() {
        form2.style.display = 'none'
        form1.style.display = 'flex'

        indicador2.style.display = 'flex'
        indicador1.style.display = 'none'
}

function etapaChange2() {
        form1.style.display = 'none'
        form2.style.display = 'flex'

        indicador2.style.display = 'none'
        indicador1.style.display = 'flex'
}

var btn1 = document.getElementById("continuar1")
// var btn1 = document.getElementById("continuar1")

function submitForm() {
        // Aqui você pode fazer qualquer validação adicional antes de enviar o formulário
        document.getElementById('finalizar').submit();
    }

//     //       //      //      //              //      //

   // Texto a ser lido
   const texto = document.querySelector('.texto').textContent;

   // Configurações de leitura
   let velocidade = 1; // Velocidade inicial
   let paused = true; // Inicialmente pausado
   let utterance = null; // Instância de SpeechSynthesisUtterance

   // Função para reproduzir o texto
   function playText() {
       utterance = new SpeechSynthesisUtterance(texto);
       utterance.rate = velocidade; // Define a velocidade de leitura
       speechSynthesis.speak(utterance);
   }

   // Botão de pausar/continuar
   const playPauseButton = document.getElementById('playPauseButton');
   playPauseButton.addEventListener('click', () => {
       if (paused) {
           paused = false; // Se estiver pausado, continua
           playPauseButton.textContent = 'Pausar';
           if (!utterance) {
               playText(); // Inicia a leitura se não estiver falando
           } else {
               speechSynthesis.resume(); // Continua a leitura se já iniciada
           }
       } else {
           paused = true; // Se não estiver pausado, pausa
           playPauseButton.textContent = 'Continuar';
           speechSynthesis.pause(); // Pausa a leitura
       }
   });

   // Botão de controle de velocidade
   const speedButton = document.getElementById('speedButton');
   speedButton.addEventListener('click', () => {
       // Lista de velocidades disponíveis
       const speeds = [0.5, 1.0, 1.5, 2.0];
       // Encontra o índice da velocidade atual na lista
       const currentIndex = speeds.indexOf(velocidade);
       // Calcula o próximo índice (circular)
       const nextIndex = (currentIndex + 1) % speeds.length;
       // Atualiza a velocidade para a próxima velocidade na lista
       velocidade = speeds[nextIndex];
       updateSpeedIndicator(); // Atualiza o indicador de velocidade
       if (utterance) {
           utterance.rate = velocidade; // Atualiza a velocidade
           speechSynthesis.speak(utterance); // Reinicia a leitura com nova velocidade
       }
   });

   // Botão de reiniciar
   const restartButton = document.getElementById('restartButton');
   restartButton.addEventListener('click', () => {
       if (utterance) {
           speechSynthesis.cancel(); // Cancela a leitura atual
           playText(); // Inicia a leitura novamente
       }
   });

   // Função para atualizar o indicador de velocidade
   function updateSpeedIndicator() {
       const speedIndicator = document.getElementById('speedIndicator');
       speedIndicator.textContent = `Velocidade: ${velocidade}x`;
   }

   // Inicializa o indicador de velocidade
   updateSpeedIndicator();

//    //    //  //  //      //      //      //      //      /// /// /   /   /   /   /   

