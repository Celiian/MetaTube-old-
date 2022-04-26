<script>
    import filters from './../partials/Filters.vue'
    export default {
        components: { filters },
        name: "SearchPage",
    }

    // eslint-disable-next-line no-unused-vars
    function displayFilter() {
        if(document.getElementById('filter-box').style.display == 'none'){document.getElementById('filter-box').style.display = 'block'}else{
                    document.getElementById('filter-box').style.display = 'none'
                }
    }
</script>

<template>
    <filters></filters>
</template>


<style>
    .row{
        display: flex;
        flex-direction: row;
    }
    .column{
        display: flex;
        flex-direction: column;
    }
    #filter-box{
        display : none;
    }
    #filter-box:hover{
        display : block;
    }

</style>

