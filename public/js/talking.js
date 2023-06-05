/* ======================= GET DATA ============================== */
// Get the GET Data from URL
var urlParams = new URLSearchParams(window.location.search);
var nTalk = urlParams.get('n');

// Get data from PHP
function getDataFromPHP() {
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    resolve(response);
                } else {
                    reject(xhr.status);
                }
            }
        };

        xhr.open('GET', 'model/sendjs.php', true);
        xhr.send();
    });
}




/*========================== TEXTS ==============================*/
const txt_dict = {
    elodie1: "Vérifiez que vous avez la possibilité de communiquer entre vous pendant l'escape game (des appels entre trois personnes sont fortement recommandés). Il est primordial de s'entraider !",
    elodie2: "Félicitations, vous avez trouvé comment voyager dans le temps. Vous êtes partis pour votre premier voyage. Direction le laboratoire de Léonard De Vinci. Cliquez sur 'Ok' lorsque vous serez dans le labo de Léonard pour qu'il vous donne ses instructions.",
    ldv1: "Bienvenue dans mon bureau !\nJ'ai effectué des recherches sur le mécanisme caché à l'intérieur de la Dent du Chat. La civilisation passulurienne est l’ancienne civilisation de l’Antiquité qui a conçu ce mécanisme sous le sommet de la Dent du Chat, qui doit se mettre en marche le 11 juillet 2045. Son déclenchement a pour but de propulser la Dent du Chat dans le lac du Bourget, ce qui fera déferler une vague dévastatrice sur la vallée. Cet évènement est un dernier hommage que le peuple a voulu rendre à leur dieu de la Mort pour la date de la fin de leur calendrier.\nJe sais qu'il existe un moyen de le désactiver mais je n'ai jamais trouvé les éléments nécessaires. Tout ce que je sais, c'est qu'il faut voyager dans le passé, à l'époque de la construction et dans le présent. Il y a forcément des informations à obtenir.",
    ldv2: "Vous avez réussi à rassembler toutes les parties du plan, 1/3 d'entre vous peut maintenant se rendre à l'endroit indiqué !",
    ldv3: "Vous avez réussi à trouver la maison du chef Passulurien, un 2ème tiers d'entre vous peut maintenant se rendre dans la maison n°12. Veillez à rester discrets ! Si l’on vous surprend là-bas, vos jours seront en danger...",
    ldv4: "N'oubliez pas qu'il est très important de communiquer pendant votre aventure. S'il vous manque des informations, pensez à contacter ceux qui restent chez De Vinci.\nPour résumer: - 1/3 part en exploration; - 1/3 part chez les passuluriens; - 1/3 reste ici, et garde ABSOLUMENT la tablette.\nPour les deux groupes qui partent en voyage, il est important de revenir ici une fois que vous avez trouvez l'objet nécessaire. Vous n'avez pas la possibilité d'effectuer un voyage une deuxième fois. Ne revenez pas les mains vides ! Cliquez sur 'Ok' lorsque tous les groupes seront partis.",
    ldv5: "Maintenant que vous n'êtes plus qu'1/3, je peux vous dire qu'une salle secrète se trouve dans cette pièce. Il y a une trappe en carton, vous pouvez maintenant la retirer.",
    ldv6: "Rendez-vous maintenant dans la grotte pour que vous puissiez enfin en finir avec ce maudit mécanisme ! Bon courage !"
};




/*========================== FUNCTIONS ==============================*/
// Set variables
var okBtn = document.getElementById('ok-btn');
var nextBtn = document.getElementById('next-btn');
var clickCount = 1;

function handleClick(array, elementId) {
    var element = document.getElementById(elementId);

    if (element.innerHTML == array[clickCount - 1]) {
        if (clickCount < array.length) {
            // Clear the box message
            element.innerHTML = "";

            typeWriter(array[clickCount], elementId, 20); // Call the typeWriter() function
            clickCount++; // Increment the click count

            if (clickCount >= array.length) {
                nextBtn.style.display = "none";
                okBtn.style.display = "block";
            }
        } else {
            nextBtn.style.display = "none";
            okBtn.style.display = "block";
        }
    }
}

function handleLastClick(array, elementId, redirect) {
    var element = document.getElementById(elementId);

    if (element.innerHTML == array[clickCount - 1]) {
        window.location.href = redirect;
    }
}

// function startSound() {
//     var fileUrl = '../../model/sound_start.txt';

//     // Create a new Blob with the content "1"
//     var content = '1';
//     var blob = new Blob([content], { type: 'text/plain' });

//     // Create a new XMLHttpRequest to upload the Blob
//     var xhr = new XMLHttpRequest();
//     xhr.open('PUT', fileUrl, true);
//     xhr.setRequestHeader('Content-Type', 'text/plain');

//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === 4 && xhr.status === 200) {
//             console.log('File saved successfully.');
//         } else {
//             console.log('Error while saving the file.');
//         }
//     };

//     xhr.send(blob);
// }

/*========================== CALL THE FUNCTIONS ==============================*/
getDataFromPHP()
    .then(function (codesState) {
        // console.log(codesState);

        // ================ TALK 1 =====================
        if (nTalk == 1) {
            var text = splitText(txt_dict.elodie1, 250);
            typeWriter(text[0], "message", 20);

            // Display the right button
            okBtn.style.display = "block";
            nextBtn.style.display = "none";

            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "scanner.php?n=1"); });
        }
        // ================ TALK 2 ===================== 
        else if (nTalk == 2) {
            var text = splitText(txt_dict.elodie2, 250);
            typeWriter(text[0], "message", 20);

            nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "talking.php?n=3"); });
        }
        // ================ TALK 3 =====================  
        else if (nTalk == 3) {
            var text = splitText(txt_dict.ldv1, 250);
            typeWriter(text[0], "message", 20);

            nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "choice.php?n=1"); });

            // // enable the sound in Passulurian Room
            // startSound();
        }
        // ================ TALK 4 =====================  
        else if (nTalk == 4) {
            // Display the right button
            okBtn.style.display = "block";
            nextBtn.style.display = "none";

            if (codesState[1] === true && codesState[2] === true) {
                okBtn.addEventListener('click', function () { handleLastClick(text, "message", "talking.php?n=6"); });
            } else {
                txt_dict.ldv2 += "\nPS : Attendez de trouver l'autre code de voyage avant de vous séparer.";
                okBtn.addEventListener('click', function () { handleLastClick(text, "message", "choice.php?n=1"); });
            }

            // Display the text
            var text = splitText(txt_dict.ldv2, 250);
            typeWriter(text[0], "message", 20);
        }
        // ================ TALK 5 ===================== 
        else if (nTalk == 5) {
            if (codesState[1] === true && codesState[2] === true) {
                nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
                okBtn.addEventListener('click', function () { handleLastClick(text, "message", "talking.php?n=6"); });
            } else {
                txt_dict.ldv3 += "\nPS : Attendez de trouver l'autre code de voyage avant de vous séparer.";
                nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
                okBtn.addEventListener('click', function () { handleLastClick(text, "message", "choice.php?n=1"); });
            }

            // Display the text
            var text = splitText(txt_dict.ldv3, 150);
            typeWriter(text[0], "message", 20);
        }
        // ================ TALK 6 ===================== 
        else if (nTalk == 6) {
            var text = splitText(txt_dict.ldv4, 250);
            typeWriter(text[0], "message", 20);

            nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "talking.php?n=7"); });
        }
        // ================ TALK 7 ===================== 
        else if (nTalk == 7) {
            var text = splitText(txt_dict.ldv5, 200);
            typeWriter(text[0], "message", 20);

            nextBtn.addEventListener('click', function () { handleClick(text, "message"); });
            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "choice.php?n=2"); });
        }
        // ================ TALK 8 ===================== 
        else if (nTalk == 8) {
            // Display the right button
            okBtn.style.display = "block";
            nextBtn.style.display = "none";

            var text = splitText(txt_dict.ldv6, 250);
            typeWriter(text[0], "message", 20);

            okBtn.addEventListener('click', function () { handleLastClick(text, "message", "waiting.php"); });
        }
    })
    .catch(function (error) {
        console.log('Error:', error);
    });