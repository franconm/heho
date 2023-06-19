<!-- Display if tablet vertical -->
<div id="turn-tablet">
    <div>
        <div><img src="public/icon/rotate_device.svg"></div>
        <h1>Veuillez tourner la tablette à l'horizontal pour pouvoir jouer.</h1>
    </div>
</div>

<!-- Side bar -->
<div id="side-bar">
    <div class="progress-bar">
        <div class="progress-bar-fill"></div>
        <span class="time-print">60:00</span>
        <img src="public/icon/sablier.svg">
    </div>
</div>

<!-- Indices -->
<div id="get-clues">
    <img src="public/icon/lightbulb.svg" alt="Ampoule">
</div>

<div id="clues">
    <div>
        <h3>Indices</h3>
        <div>
            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> OKLM</div>
                <div class="toggle-content">Mendeleïev indique que les éléments S et Gm sont utiles</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> TGV1</div>
                <div class="toggle-content">Superposer pour retrouver le chemin</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> TGV2</div>
                <div class="toggle-content">La main droite de l'homme aux dimensions parfaites vous indique la route à
                    suivre
                </div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> LOL1</div>
                <div class="toggle-content">La maison du chef se trouve dans la partie droite du plan</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> LOL2</div>
                <div class="toggle-content">La maison du chef se situe en dessous de la maison champignon</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> PTDR</div>
                <div class="toggle-content">Regardez le calendrier et les mois de l'année</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> RVBO</div>
                <div class="toggle-content">Un chiffre est indiqué sur la plaque, cherchez une explication sur la carte
                    de
                    la
                    Scuola d'Abaco</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> MSKN</div>
                <div class="toggle-content">Scannez le logo type Hiro</div>
            </div>

            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> HDMI</div>
                <div class="toggle-content">Il y anguille sous ROCHE…</div>
            </div>
            <div class="toggle-container">
                <div class="toggle-button"><img src="public/icon/arrow_down.svg"> NUKE</div>
                <div class="toggle-content">
                    <img src="public/img/clues/code_maze.png">
                </div>
            </div>
        </div>
        <button id="close-btn">Fermer</button>
    </div>
</div>

<script>
    // BUTTONS ACTIONS
    var getCluesButton = document.getElementById("get-clues");
    var cluesContainer = document.getElementById("clues");
    var closeButton = document.getElementById("close-btn");

    getCluesButton.addEventListener("click", function () {
        cluesContainer.style.display = "flex";
    });

    closeButton.addEventListener("click", function () {
        cluesContainer.style.display = "none";
    });

    // SHOW/HIDE THE CLUES
    var toggleButtons = document.getElementsByClassName("toggle-button");

    Array.from(toggleButtons).forEach(function (button) {
        button.addEventListener("click", function () {

            var content = this.nextElementSibling;
            var icon = this.querySelector('img');

            content.style.display = (content.style.display === "none") ? "block" : "none";
            icon.style.transform = (icon.style.transform === "rotate(-90deg)") ? "rotate(0deg)" : "rotate(-90deg)";
        });
    });
</script>