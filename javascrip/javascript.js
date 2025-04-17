// MENU
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger?.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

// CARRINHO ABRIR/FECHAR
const cartSidebar = document.getElementById('cart-sidebar');
const overlay = document.getElementById('overlay');
const closeCart = document.getElementById('close-cart');
const cartIcons = document.querySelectorAll('.cart-icon');

cartIcons.forEach(icon => {
  icon.addEventListener('click', (e) => {
    e.preventDefault();
    abrirCarrinho();
  });
});

closeCart?.addEventListener('click', fecharCarrinho);
overlay?.addEventListener('click', fecharCarrinho);

function abrirCarrinho() {
  cartSidebar.classList.add('open');
  overlay.classList.add('active');
}

function fecharCarrinho() {
  cartSidebar.classList.remove('open');
  overlay.classList.remove('active');
}

// CARRINHO FUNCIONAL
const botoesAdicionar = document.querySelectorAll('.add-to-cart');
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const notificacao = document.getElementById('notificacao');

let total = 0;

botoesAdicionar.forEach(botao => {
  botao.addEventListener('click', () => {
    const nome = botao.getAttribute('data-nome');
    const preco = parseFloat(botao.getAttribute('data-preco'));
    const imagem = botao.getAttribute('data-img');

    if (!nome || isNaN(preco) || !imagem) return;

    // Cria item visual no carrinho
    const item = document.createElement('div');
    item.classList.add('cart-item');
    item.innerHTML = `
      <img src="${imagem}" alt="${nome}" class="item-icon" style="width:40px; height:40px; border-radius:5px;">
      <span style="flex:1;">${nome}</span>
      <span>R$ ${preco.toFixed(2)}</span>
      <button class="remove-btn" style="background:none; border:none; color:white; font-size:18px;">✖</button>
    `;

    // Adiciona item
    cartItems.appendChild(item);
    total += preco;
    atualizarTotal();

    // Remover item
    item.querySelector('.remove-btn').addEventListener('click', () => {
      item.remove();
      total -= preco;
      atualizarTotal();
    });

    // Abrir carrinho automaticamente
    abrirCarrinho();

    // Notificação
    if (notificacao) {
      notificacao.classList.add('show');
      setTimeout(() => {
        notificacao.classList.remove('show');
      }, 2000);
    }
  });
});

function atualizarTotal() {
  cartTotal.textContent = `R$ ${total.toFixed(2)}`;
}



