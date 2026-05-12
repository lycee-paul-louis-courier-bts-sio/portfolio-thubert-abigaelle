<!-- intro -->
<div class="card">
    <div class="col">
        <h1>Epoka Presse : gestion des abonnés</h1>
        <div class="content">
            <p>
                Epoka Presse est une société fictive de presse qui a besoin d'une application web pour gérer
                ses abonnés. Pour ce projet, j'étais seule.
                <br>
                Pour commencer, j'ai ajouté aux classes métiers déjà fournies des méthodes et réaliser des tests à l'aide de <b>Junit 4</b>.
                Ces classes utilisent par ailleurs l'<b>ORM Hibernate</b> qui permet de les persister dans une base de données <b>SQL Server</b> aussi fournie.
                <br>
                Une fois la librairie de classes prête, j'ai créé l'application web qui utilise <b>Jakarta EE</b> avec <b>Maven</b>.
                J'ai créé trois pages JSP : une première qui permet de visualiser tous les abonnements non renouvelés et sur le point de s'arrêter,
                une seconde qui affiche tous les abonnements d'un abonné sélectionné, et une dernière qui présente un formulaire pour ajouter un abonnement.
            </p>
            <div class="center">
                <img src="assets/images/ap/epoka-revues/logo.png" alt="Logo Epoka" width="200">
            </div>
        </div>
    </div>
</div>

<div class="grille-2">
    <div class="card">
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos/liste-abos.PNG" alt="Liste des abonnements">
            <br>
            <p>Liste des abonnements triés par catégorie (à renouveler bientôt et immédiatement)</p>
        </div>
    </div>
    <div class="card">
        <div class="col">
            <img class="thumbnail" src="assets/images/ap/epoka-abos/form-new-abo.PNG" alt="Formulaire de nouvel abonement">
            <br>
            <p>Formulaire de nouvel abonnement</p>
        </div>
    </div>
</div>

<!-- tab compétences -->
<div class="card">
    <?php include 'entete-tab-comp.html'; ?>
        <tr>
            <th>Bibliothèque Java : Persistance des données (ORM Hibernate) + Implémentation et tests des règles métiers (Junit 4)</th>
            <td class="date">décembre 2025</td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th>Application Web Jakarta EE (avec Maven) : Afficher les abonnements de code oranger ou rouge
                + Ajouter un nouvel abonnement</th>
            <td class="date">mars 2026</td>
            <td></td>
            <td class="coche"></td>
            <td></td>
            <td></td>
            <td class="coche"></td>
            <td class="coche"></td>
        </tr>
    </table>
</div>