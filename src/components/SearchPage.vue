<script>
    import { useI18n } from 'vue-i18n'

    export default {
    name: 'app',
    setup() {
        
        function displayFilter() {
            if (document.getElementById("filter-box").style.display == "none") {
                document.getElementById("filter-box").style.display = "flex";
            }
            else{
                document.getElementById("filter-box").style.display = "none";
            }
        }

        const { t } = useI18n({
        inheritLocale: true,
        useScope: 'local'
        })

        return { 
            t,
            displayFilter
        }
    },   
    }
</script>

<template>
    <section id="search-page">
        <button v-on:click="displayFilter" type="button" id="filter-button">Filters</button>
        <div id="search-page-content" class="row">
            <div id="filter-box" class="row">
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title">Date d'ajout</h3>
                    <a onclick="" class="filter-box-menu-button">Dernière heure</a>
                    <a onclick="" class="filter-box-menu-button">This week</a>
                    <a onclick="" class="filter-box-menu-button">This month</a>
                    <a onclick="" class="filter-box-menu-button">This year</a>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title">Type</h3>
                    <a onclick="" class="filter-box-menu-button">Vidéo</a>
                    <a onclick="" class="filter-box-menu-button">Chaîne</a>
                    <a onclick="" class="filter-box-menu-button">Playlist</a>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title">Trier par</h3>
                    <a onclick="" class="filter-box-menu-button">Pertinence</a>
                    <a onclick="" class="filter-box-menu-button">Date de mise en ligne</a>
                    <a onclick="" class="filter-box-menu-button">Nombre de vues</a>
                    <a onclick="" class="filter-box-menu-button">Avis</a>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="../img/cucumber.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div>
                        <h3 class="filter-box-title video-title">Titre de vidéo</h3>
                        <p class="video-text video-watch-count">Nombre de vues</p>
                        <p class="video-text">Description</p>
                    </div>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="../img/cucumber.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div>
                        <h3 class="filter-box-title video-title">Titre de vidéo</h3>
                        <p class="video-text video-watch-count">Nombre de vues</p>
                        <p class="video-text">Description</p>
                    </div>
                </div>
            </div>
            <div class="column search-card">
                <div class="row">
                    <img src="../img/cucumber.jpeg" class="video-img" alt="CUCUMBER POWER">
                    <div>
                        <h3 class="filter-box-title video-title">Titre de vidéo</h3>
                        <p class="video-text video-watch-count">Nombre de vues</p>
                        <p class="video-text">Description</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style>
    @import url('../style/global.css');
    @import url('../style/SearchPage.css');

</style>

