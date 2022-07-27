<main id="new-client-page">
    <div class="wrapper main-wrapper">
        <div class="content">
            <div class="title">
                <p class="byline"><i class="fa-solid fa-globe"></i> Nuevo cliente</p>
                <h1 class="heading">Crea un nuevo cliente</h1>
                <p class="excerpt">Crear y configura un nuevo cliente de Inadaptado.</p>
            </div>

            <!-- New client -->
            <form class="form" id="new-client-form" action="#">

                <!-- Client name -->
                <label class="label half-box active" for="clientName__input">
                    <input class="input" id="clientName__input" type="text" placeholder="Nombre">
                </label>

                <!-- Client first name -->
                <label class="label half-box active" for="clientFirstname__input">
                    <input class="input" id="clientFirstname__input" type="text" placeholder="Apellido">
                </label>

                <!-- Client email -->
                <label class="label half-box active" for="clientEmail__input">
                    <input class="input" id="clientEmail__input" type="text" placeholder="Email">
                </label>

                <!-- Client phone -->
                <label class="label half-box active" for="clientPhone__input">
                    <input class="input" id="clientPhone__input" type="text" placeholder="Teléfono">
                </label>

                <!-- Client brand -->
                <label class="label active" for="clientBrand__input">
                    <input class="input" id="clientBrand__input" type="text" placeholder="Marca">
                </label>

                <!-- Comment -->
                <label class="label active" for="clientComment__input">
                    <textarea class="input" id="clientComment__input" name="clientComment__input" rows="5" placeholder="Comentarios"></textarea>
                </label>

                <!-- Hosting -->
                <label class="label half-box center active" for="clientHosting__input">
                    <input type="checkbox" id="clientHosting__input" value="true"> Servidor
                </label>

                <!-- Domain -->
                <label class="label half-box center active" for="clientDomain__input">
                    <input type="checkbox" id="clientDomain__input" value="true"> Dominio
                </label>
            </form><!-- /New client -->

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
            <?php require_once './templates/blankpage.php'; ?>
        </aside>
    </div>
</main>

<script src="./js/nuevo.js" async></script>