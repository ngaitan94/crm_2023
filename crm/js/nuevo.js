//VARIABLES

    //Crear cliente
    const newClientForm = document.getElementById('new-client-form');

//EVENT LISTENERS

    document.addEventListener('DOMContentLoaded', () => {
        resetButton.addEventListener('click', resetNewClientForm);
    });

//FUNCTIONS

    //Crear cliente - Reset form
    function resetNewClientForm(e) {
        e.preventDefault();
        newClientForm.reset();
    }

    //Crear cliente - Send email
    function sendNewClientForm(e) {
        e.preventDefault();
        newClientForm.submit();
    }
