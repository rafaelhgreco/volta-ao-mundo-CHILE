// script.js
window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const sticky = header.offsetTop;

    if (window.pageYOffset > sticky) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});

$(document).ready(function(){
    // Quando o documento estiver completamente carregado, execute a função passada

    $('a.nav-link').on('click', function(event) {
        // Adiciona um evento de clique para todos os elementos <a> com a classe 'nav-link'

        if (this.hash !== "") {
            // Verifica se o atributo 'hash' do link não está vazio
            // 'hash' é a parte da URL que vem depois do '#'

            event.preventDefault();
            // Previne o comportamento padrão do clique no link

            var hash = this.hash;
            // Armazena o valor do 'hash' do link clicado

            $('html, body').animate({
                // Anima a rolagem da página

                scrollTop: $(hash).offset().top
                // Rola a página até a posição do elemento cujo id corresponde ao 'hash'
                // 'offset().top' obtém a posição vertical do elemento na página
            }, 800, function(){
                // Define a duração da animação para 800 milissegundos

                window.location.hash = hash;
                // Atualiza a URL na barra de endereços para incluir o 'hash' do elemento para onde rolou
            });
        }
    });
});
