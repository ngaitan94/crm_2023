//VARIABLES


    //Centro de correos
    const emailSenderForm = document.getElementById('email-sender');
    const emailPreviewContainer = document.getElementById('emailPreviewContainer');

    //Centro de correos - Form inputs
    const typeEmailInput = document.getElementById('typeEmail__input');
    const fromEmailInput = document.getElementById('fromEmail__input');
    const nameClientInput = document.getElementById('nameClient__input');
    const emailClientInput = document.getElementById('emailClient__input');
    const subjectInput = document.getElementById('subject__input');
    const preheaderInput = document.getElementById('preheader__input');
    const messageInput = document.getElementById('message__input');
    const bannerInput = document.getElementById('banner__input');
    const headingInput = document.getElementById('heading__input');
    const ctaLabelInput = document.getElementById('ctalabel__input');
    const ctaLinkInput = document.getElementById('ctalink__input');

    //Centro de correos - Gmail preview
    const subjectPreview = document.getElementById('subject__preview');
    const preheaderPreview = document.getElementById('preheader__preview');
    const fromEmailPreview = document.getElementById('fromEmail__preview');
    const emailClientPreview = document.getElementById('emailClient__preview');

    //Centro de correos - HTML email variables
    let nameClientVariable = document.getElementById("nameClientVariable");
    const preheaderVariable = document.getElementById("preheaderVariable");
    const messageVariable = document.getElementById("messageVariable");

    //Centro de correos - Button actions
    const sendButton = document.getElementById('sendButton');
    const resetButton = document.getElementById('resetButton');
    const mobileButton = document.getElementById('mobileButton');
    const desktopButton = document.getElementById('desktopButton');

//EVENT LISTENERS

document.addEventListener('DOMContentLoaded', () => {
    //Centro de correos - Input text replace
    subjectInput.addEventListener("keyup", ()=> {
        subjectPreview.innerHTML = subjectInput.value;
    });

    preheaderInput.addEventListener("keyup", ()=> {
        preheaderPreview.innerHTML = preheaderInput.value;
    });

    emailClientInput.addEventListener("keyup", ()=> {
        emailClientPreview.innerHTML = emailClientInput.value;
    });

    //Name
    nameClientInput.addEventListener("keyup", ()=> {
        nameClientVariable.innerHTML = nameClientInput.value;
    });

    //Centro de correos - Button Actions
    sendButton.addEventListener('click', sendEmail);
    resetButton.addEventListener('click', resetEmailSenderForm);
    mobileButton.addEventListener('click', mobileEmailPreview);
    desktopButton.addEventListener('click', desktopEmailPreview);
});

//FUNCTIONS

//Centro de correos - Send email
function sendEmail(e) {
    e.preventDefault();
    emailSenderForm.submit();
}

//Centro de correos - Reset form
function resetEmailSenderForm(e) {
    e.preventDefault();
    emailSenderForm.reset();
}

//Centro de correos - Switch from emails
function switchFromEmail(fromEmail) {
    switch(fromEmail) {
        case 'hola':
            fromEmailPreview.innerHTML = '&lt;' + fromEmailInput.value + '@inadaptado.cl&gt;';
            break;

        case 'soporte':
            fromEmailPreview.innerHTML = '&lt;' + fromEmailInput.value + '@inadaptado.cl&gt;';
            break;

        case 'nicolas':
            fromEmailPreview.innerHTML = '&lt;' + fromEmailInput.value + '@inadaptado.cl&gt;';
            break;

        default:
            fromEmailPreview.innerHTML = '&lt;hola@inadaptado.cl&gt;';
            break;
    }
}

//Centro de correos - Switch type emails
function switchTypeEmail(emailtype) {
    switch(emailtype) {
        case 'bienvenida':
            emailPreviewContainer.setAttribute("src", "../mail/templates/2022/Bienvenida_Cliente");
            subjectInput.value = 'Bienvenido a la familia Inadaptado 🤘';
            subjectPreview.innerHTML = subjectInput.value;
            preheaderInput.value = "Todo comienzo tiene su encanto.";
            preheaderPreview.innerHTML = preheaderInput.value;
            nameClientVariable = document.getElementById("nameClientVariable");



            headingInput.parentNode.classList.remove('active');
            bannerInput.parentNode.classList.remove('active');
            messageInput.parentNode.classList.remove('active');
            ctaLabelInput.parentNode.classList.remove('active');
            ctaLinkInput.parentNode.classList.remove('active');
            break;

        case 'checklist':
            emailPreviewContainer.setAttribute("src", "../mail/templates/2022/Checklist_Cliente");
            subjectInput.value = '✅ Comencemos tu proyecto.';
            subjectPreview.innerHTML = subjectInput.value;
            preheaderInput.value = "Checklist Inadaptado.";
            preheaderPreview.innerHTML = preheaderInput.value;
            nameClientVariable = document.getElementById("nameClientVariable");



            headingInput.parentNode.classList.remove('active');
            bannerInput.parentNode.classList.remove('active');
            messageInput.parentNode.classList.remove('active');
            ctaLabelInput.parentNode.classList.remove('active');
            ctaLinkInput.parentNode.classList.remove('active');
            break;

        default:
            emailPreviewContainer.setAttribute("src", "../mail/templates/2022/BoillerPlate_2022");
            subjectInput.value = '';
            subjectPreview.innerHTML = 'Este es el Subject de tu mail, no uses mas de 60 caracteres';
            preheaderInput.value = '';
            preheaderPreview.innerHTML = 'Este es el Preheader, insentiva la accion del usuario';
            break;
    }
}

//Centro de correos - Mobile size
function mobileEmailPreview(e) {
    e.preventDefault();
    mobileButton.classList.add('active');
    desktopButton.classList.remove('active');
    emailPreviewContainer.width = '380';
}

//Centro de correos - Desktop size
function desktopEmailPreview(e) {
    e.preventDefault();
    desktopButton.classList.add('active');
    mobileButton.classList.remove('active');
    emailPreviewContainer.width = '650';
}
