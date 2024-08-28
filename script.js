document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.add-to-cart');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const productName = this.getAttribute('data-product');
            const messageId = `message-${productName.replace(/\s+/g, '').toLowerCase()}`;
            const messageElement = document.getElementById(messageId);

            if (messageElement) {
                messageElement.textContent = `${productName} se agregó al carrito`;
                setTimeout(() => {
                    messageElement.textContent = '';
                }, 3000); // El mensaje desaparece después de 3 segundos
            }
        });
    });
});
