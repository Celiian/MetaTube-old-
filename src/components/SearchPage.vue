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

    body{
        margin: 0px;
    }
    #filter-button{
        padding: 1%;
        font-size: var(--font-medium);
        background-color: var(--dark-theme);
        color: var(--dark-text);
        margin-top: 30px;
        margin-left: 5%;
    }
    .row{
        display: flex;
        flex-direction: row;
        flex-wrap : wrap;
    }
    .column{
        display: flex;
        flex-direction: column;
        flex-wrap : wrap;
    }
    .video-title{
        margin-bottom: 0px;
    }
    .video-watch-count{
        margin-top: 0px;
    }
    .video-text{
        font-size: var(--font-small);
    }
    #filter-box{
        display : none;
        width: 90%;
        padding: 2%;
        border-bottom: 1px solid lightgrey;
        background-color: var(--dark-theme);
        color: var(--dark-text);
    }
    .filter-box-title{
        font-size: var(--font-large);
    }
    .search-card{
        width: 90%;
        margin-top: 16px;
        color: var(--dark-text);
    }
    .filter-box-menu{
        width: 33%;
    }
    .filter-box-menu-button{
        font-size: var(--font-medium);
    }
    #search-page{
        background-color: var(--dark-theme);
    }
    #search-page-content{
        justify-content: center;
    }
    .video-img{
        width: 350px;
        height: 200px;
        margin-right: 16px;
    }
</style>

