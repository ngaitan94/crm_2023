<main id="send-page">
    <div class="wrapper main-wrapper">
        <div class="content">
            <div class="title">
                <p class="byline"><i class="fa-solid fa-globe"></i> Centro de correos</p>
                <h1 class="heading">Crea un email</h1>
            </div>

            <!-- Email Sender -->
            <form class="form" id="email-sender" action="./app/validar_formulario.php">
                
                <!-- Type email -->
                <label class="label half-box active" for="typeEmail__input">
                    <select class="input" id="typeEmail__input" name="typeEmail__input" onChange="switchTypeEmail(this.options[this.selectedIndex].value)">
                        <option value="generico">Mensaje Generico</option>
                        <option value="bienvenida">Bienvenida Cliente</option>
                        <option value="checklist">Checklist Cliente</option>
                    </select>
                </label>
                
                <!-- From Email -->
                <label class="label half-box active" for="fromEmail__input">
                    <select class="input" id="fromEmail__input" name="fromEmail__input" onChange="switchFromEmail(this.options[this.selectedIndex].value)">
                        <option value="hola">hola@inadaptado.cl</option>
                        <option value="soporte">soporte@inadaptado.cl</option>
                        <option value="nicolas">nicolas@inadaptado.cl</option>
                    </select>
                </label>
                
                <!-- Client name -->
                <label class="label half-box active" for="nameClient__input">
                    <input class="input" id="nameClient__input" type="text" placeholder="Nombre Cliente">
                </label>

                <!-- Client email -->
                <label class="label half-box active" for="emailClient__input">
                    <input class="input" id="emailClient__input" type="email" placeholder="Email Cliente">
                </label>

                <!-- Subject -->
                <label class="label active" for="subject__input">
                    <input class="input" id="subject__input" type="text" maxlength="60" placeholder="Subject">
                </label>

                <!-- Preheader -->
                <label class="label active" for="preheader__input">
                    <input class="input" id="preheader__input" type="text" maxlength="90" placeholder="Preheader">
                </label>
                
                <!-- Main banner -->
                <label class="label active" for="banner__input">
                    <input class="input" id="banner__input" type="url" placeholder="Main Banner URL">
                </label>

                <!-- Heading -->
                <label class="label active" for="heading__input">
                    <input class="input" id="heading__input" type="text" maxlength="60" placeholder="Heading">
                </label>

                <!-- Message -->
                <label class="label active" for="message__input">
                    <textarea class="input" id="message__input" name="message__input" rows="8" placeholder="Mensaje"></textarea>
                </label>

                <!-- CTA label -->
                <label class="label active" for="ctalabel__input">
                    <input class="input" id="ctalabel__input" type="text" maxlength="20" placeholder="CTA label">
                </label>

                <!-- CTA link -->
                <label class="label active" for="ctalink__input">
                    <input class="input" id="ctalink__input" type="url" placeholder="CTA link">
                </label>
            </form><!-- /Email Sender -->

            <div id="actions-buttons">
                <button class="btn" id="resetButton">
                    <i class="fa-solid fa-delete-left"></i> Reset
                </button>    

                <button class="btn" id="sendButton">
                    <i class="fa-solid fa-paper-plane"></i> Enviar
                </button>
            </div>
        </div>

        <aside class="aside">
            <div id="gmail-preview">
                <div class="header">
                    <div class="title">
                        <h2 class="subject" id="subject__preview">Este es el Subject de tu mail, no uses mas de 60 caracteres</h2>
                        <p class="preheader" id="preheader__preview">Este es el Preheader, insentiva la accion del usuario</p>
                    </div>

                    <img class="icons" src="./img/gmail_icon_01.png" alt="">
                </div>

                <div class="headers">
                    <div class="profile">
                        <img src="./img/icons/unnamed.png" alt="">
                    </div>

                    <div class="info">
                        <p class="emisor">Agencia Inadaptado <span id="fromEmail__preview">&lt;hola@inadaptado.cl&gt;</span></p>
                        <p class="receptor">para <span id="emailClient__preview">nombre@servidor.cl</span></p>
                    </div>

                    <div class="icons">
                        <img src="./img/gmail_icon_02.png" alt="">
                    </div>

                    <button class="btn" id="mobileButton" href="#">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </button>

                    <button class="btn active" id="desktopButton" href="#">
                        <i class="fa-solid fa-display"></i>
                    </button>
                </div>

                <div id="email-preview">
                    <iframe class="container" id="emailPreviewContainer" src="../mail/templates/2022/BoillerPlate_2022" width="650" frameborder="0"></iframe>
                </div>
            </div>
        </aside>
    </div>
</main>

<script src="./js/correos.js" async></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>