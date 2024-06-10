// Texto a ser lido
const textoDicas = document.querySelector('.texto-dicas').textContent;

// Configurações de leitura
let velocidadeDicas = 1; // Velocidade inicial
let pausedDicas = true; // Inicialmente pausado
let utteranceDicas = null; // Instância de SpeechSynthesisUtterance

// Função para reproduzir o texto da seção 'dicas'
function playTextDicas() {
    utteranceDicas = new SpeechSynthesisUtterance(textoDicas);
    utteranceDicas.rate = velocidadeDicas; // Define a velocidade de leitura
    speechSynthesis.speak(utteranceDicas);
}

// Botão de pausar/continuar
const playPauseButtonDicas = document.getElementById('playPauseButton');
playPauseButtonDicas.addEventListener('click', () => {
    if (pausedDicas) {
        pausedDicas = false; // Se estiver pausado, continua
        playPauseButtonDicas.textContent = 'Pausar';
        if (!utteranceDicas) {
            playTextDicas(); // Inicia a leitura se não estiver falando
        } else {
            speechSynthesis.resume(); // Continua a leitura se já iniciada
        }
    } else {
        pausedDicas = true; // Se não estiver pausado, pausa
        playPauseButtonDicas.textContent = 'Continuar';
        speechSynthesis.pause(); // Pausa a leitura
    }
});

// Botão de controle de velocidade
const speedButtonDicas = document.getElementById('speedButton');
speedButtonDicas.addEventListener('click', () => {
    // Lista de velocidades disponíveis
    const speeds = [0.5, 1.0, 1.5, 2.0];
    // Encontra o índice da velocidade atual na lista
    const currentIndex = speeds.indexOf(velocidadeDicas);
    // Calcula o próximo índice (circular)
    const nextIndex = (currentIndex + 1) % speeds.length;
    // Atualiza a velocidade para a próxima velocidade na lista
    velocidadeDicas = speeds[nextIndex];
    updateSpeedIndicatorDicas(); // Atualiza o indicador de velocidade
    if (utteranceDicas) {
        utteranceDicas.rate = velocidadeDicas; // Atualiza a velocidade
        speechSynthesis.speak(utteranceDicas); // Reinicia a leitura com nova velocidade
    }
});

// Botão de reiniciar
const restartButtonDicas = document.getElementById('restartButton');
restartButtonDicas.addEventListener('click', () => {
    if (utteranceDicas) {
        speechSynthesis.cancel(); // Cancela a leitura atual
        playTextDicas(); // Inicia a leitura novamente
    }
});

// Função para atualizar o indicador de velocidade
function updateSpeedIndicatorDicas() {
    const speedIndicatorDicas = document.getElementById('speedIndicator');
    speedIndicatorDicas.textContent = `Velocidade: ${velocidadeDicas}x`;
}

// Inicializa o indicador de velocidade
updateSpeedIndicatorDicas();



// ACCORDION
class Accordion {
    constructor(accordionListQuestions) {
        this.accordionListQuestions = document.querySelectorAll(accordionListQuestions);
        this.activeItemClass = "active";
    }

    toggleAccordion(item) {
        item.classList.toggle(this.activeItemClass);
        item.nextElementSibling.classList.toggle(this.activeItemClass);
    }

    addAccordionEvent() {
        this.accordionListQuestions.forEach((question) => {
            question.addEventListener("click", () => this.toggleAccordion(question));
        })
    }

    init() {
        if (this.accordionListQuestions.length) {
            this.addAccordionEvent();
        }
        return this;
    }
}

const accordion = new Accordion(".faq-question");
accordion.init();
// ACCORDION