<!-- intro -->
<div class="grille-2">
    <div class="card">
        <div class="col">
            <h1>Epoka Presse Mobile : gestion des abonnés</h1>
            <div class="content">
                <p>
                    Epoka Presse est une société fictive de presse qui a besoin d'une <b>application mobile Android</b> pour gérer
                    ses abonnés. Pour ce projet, j'étais seule.
                    <br>
                    Pour commencer, j'ai créé une application de <b>web service de type REST</b> utilisant <b>SQL Server</b>.
                    Celle-ci devait afficher les informations d'un abonné ainsi que ses abonnements
                    à partir de son code et de son mot de passe.
                    Pour cela, j'ai réutilisé la librairie de classe créée dans l'application web Jakarta de gestion des abonnés d'Epoka.
                    <br>
                    Puis j'ai créé l'application mobile à l'aide du logiciel <b>Android Studio</b>.
                    Je n'ai cependant pas eu le temps de finir cette application par manque de temps,
                    elle ne contient donc que la page d'accueil actuellement.
                </p>
                <div class="center">
                    <img src="assets/images/ap/epoka-revues/logo.png" alt="Logo Epoka" width="200">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos-mobile/accueil.png" alt="" class="Accueil de l'application">
            <br>
            <br>
            <p>Accueil de l'application mobile</p>
        </div>
    </div>
</div>

<div class="card">
    <div class="grille-3">
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos-mobile/webservices1.PNG" alt="Requête GET avant modification">
            <p>Requête GET des informations d'un abonné avec son identifiant et son mot de passe</p>
        </div>
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos-mobile/webservices2.PNG" alt="Requête PUT modification">
            <p>Requête PUT pour modifier le code postal de l'abonné</p>
        </div>
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos-mobile/webservices3.PNG" alt="Requête GET après modification">
            <p>Requête GET pour vérifier que le code postal a bien été modifié</p>
        </div>
    </div>
</div>

<!-- tab compétences -->
<div class="card">
    <?php include 'entete-tab-comp.html'; ?>
        <tr>
            <th>Web Service type RESTED : Obtention des abonnements de l’abonné
                + Modification des informations du compte de l’abonné</th>
            <td class="date">mars 2026</td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td></td>
            <td></td>
            <td class="coche"></td>
            <td></td>
        </tr>

        <tr>
            <th>Application Mobile Android : Mettre en place une fenêtre de connexion + Affichage</th>
            <td class="date">mars à mai 2026</td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td></td>
            <td class="coche"></td>
            <td class="coche"></td>
        </tr>
    </table>
</div>