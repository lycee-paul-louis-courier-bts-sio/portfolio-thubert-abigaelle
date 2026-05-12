<!-- intro -->
<div class="grille-2">
    <div class="card">
        <div class="col">
            <h1>Epoka Presse : gestion des revues</h1>
            <div class="content">
                <p>
                    Epoka Presse est une société fictive de presse qui a besoin d'une application pour gérer
                    ses articles, images et ventes. Pour ce projet, nous étions une petite équipe de 3 dans laquelle j'avais
                    le rôle de chef de projet.
                    <br>
                    Nous nous sommes dispatché le travail à l'aide l'outil <b>Jira</b> avec un tableau Kanban.
                    Pour les différentes versions de l'application, nous les avons gérées en créant une branche par nouvelle fonctionnalité
                    via l'outil <b>Bitbucket</b>.
                    <br>
                    Pour la base de données, nous avions un existant sur <b>SQL Server</b> à adapter. Cependant, nous avons rencontré quelques difficultés
                    à relier la base de données à notre application, car celle-ci utilise le framework <b>CodeIgniter</b>.
                    Après quelques recherches, nous sommes parvenus à les relier (voir la procédure téléchargeable plus bas).
                </p>
                <div class="center">
                    <img src="assets/images/ap/epoka-revues/logo.png" alt="Logo Epoka" width="200">
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="center">
            <img class="thumbnail" src="assets/images/ap/epoka-revues/accueil.PNG" alt="Page d'accueil" width="750">
        </div>
    </div>
</div>

<div class="card">
    <div class="swiper">
        <div class="swiper-wrapper">            
            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/jira.png" alt="Tableau kanban sur Jira">
                <p>Tableau kanban sur Jira pour se distribuer les tâches</p>
            </div>
            
            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/mcd.png" alt="Diagramme MCD de la base de données">
                <p>Diagramme MCD de la base de données</p>
            </div>
            
            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/diagramme_bd.png" alt="Diagramme de la base de données">
                <p>Diagramme de la base de données</p>
            </div>
            
            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/bitbucket.PNG" alt="Branche master Bitbucket">
                <p>Historique de la branche master sur Bitbucket</p>
            </div>

            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/page_vente.PNG" alt="Formulaire d'ajout d'une vente">
                <p>Formulaire d'ajout d'une vente</p>
            </div>

            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/page_image.PNG" alt="Formulaire d'ajout d'une image">
                <p>Formulaire d'ajout d'une image</p>
            </div>
            
            <div class="mini-card girafe swiper-slide">
                <img class="thumbnail" src="assets/images/ap/epoka-revues/page_article.PNG" alt="Formulaire d'ajout d'un article">
                <p>Formulaire d'ajout d'un article</p>
            </div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<!-- liens -->
<div class="card transparent">
    <div class="center">
            <a download href="assets/docs/ap/epoka/Procédure d’installation de SQL Server avec Code Igniter.pdf">
                <span class="nav-icon material-symbols-rounded">download</span>
                Procédure d’installation de SQL Server avec Code Igniter
            </a>
    </div>
</div>

<!-- tab compétences -->
<div class="card">
    <?php include 'entete-tab-comp.html'; ?>
        <tr>
            <th>Implémentation de la base de données bd_epoka_presse</th>
            <td class="date">septembre à octobre 2025</td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td></td>
            <td class="coche"></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <th>Développement des fonctionnalités de la gestion des revues</th>
            <td class="date">novembre à décembre 2025</td>
            <td></td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td class="coche"></td>
            <td></td>
            <td class="coche"></td>
        </tr>
    </table>
</div>