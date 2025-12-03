// Transition fluide vers la page suivante
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.enter-button');
  if (btn) {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.body.classList.add('fade-out');
      setTimeout(() => {
        window.location.href = btn.href;
      }, 1500);
    });
  }
});

const poeticPhrases = {
    star: [
        "Une étoile respire quelque part pour toi.",
        "La lumière écoute toujours avant de répondre.",
        "Le ciel se souvient de tout."
    ],
    door: [
        "Chaque seuil est un passage en toi.",
        "Rien ne s'ouvre sans t'écouter d'abord.",
        "La porte n’attend que ton souffle."
    ],
    mirror: [
        "Tu es le reflet de tes propres nuits.",
        "Le miroir te voit avant que tu n’arrives.",
        "Ce que tu cherches t'attend déjà."
    ]
};

function initPoeticElements() {
    const elements = document.querySelectorAll('.poetic-element');

    elements.forEach(el => {
        // Position aléatoire sur la page
        el.style.top = (Math.random() * 70 + 10) + "vh";
        el.style.left = (Math.random() * 80 + 10) + "vw";

        el.addEventListener("click", () => {
            const type = el.dataset.type;
            const list = poeticPhrases[type];
            const text = list[Math.floor(Math.random() * list.length)];
            showPoeticPhrase(text);
        });
    });
}

function showPoeticPhrase(text) {
    const box = document.getElementById("phraseBox");
    box.textContent = text;
    box.classList.add("show");

    clearTimeout(window._poeticTimeout);
    window._poeticTimeout = setTimeout(() => {
        box.classList.remove("show");
    }, 4000);
}

document.addEventListener("DOMContentLoaded", initPoeticElements);
