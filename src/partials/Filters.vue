<template>
<section>
        <button type="button" @click="displayfilter" id="filter-button">Filtres</button>
        <div id="filter-box" class="row">
            <div class="column">
                <h3>Date d'ajout</h3>
                <a onclick="">Dernière heure</a>
                <a onclick="">Aujourd'hui</a>
                <a onclick="">Cette semaine</a>
                <a onclick="">Ce mois-ci</a>
                <a onclick="">Cette année</a>
            </div>
            <div class="column">
                <h3>Type</h3>
                <a onclick="">Vidéo</a>
                <a onclick="">Chaîne</a>
                <a onclick="">Playlist</a>
            </div>
            <div class="column">
                <h3>Trier par</h3>
                <a onclick="">Pertinence</a>
                <a onclick="">Date de mise en ligne</a>
                <a onclick="">Nombre de vues</a>
                <a onclick="">Avis</a>
            </div>
        </div>
    </section>
    <section class="column">
        <div class="row">
            <a href=""><img src=""></a>
            <div>
                <h3>Titre de vidéo</h3>
                <p>Nombre de vues</p>
                <p>Description</p>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "filters",
    }
    
</script>