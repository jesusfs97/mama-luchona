<template>
    <div class="container" style="display:flex">
        <a class="navbar-brand js-scroll-trigger" v-bind:style="{ backgroundColor: titulo.colorFondo, color:titulo.colorTexto}" v-bind:href="titulo.href" >{{titulo.Titulo }}</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
            data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item mx-2" v-for="(m, index) in menus" :key="index">
                    <a class="nav-link py-1 px-2 rounded js-scroll-trigger font-weight-bold"
                        v-bind:style="{ backgroundColor: m.colorFondo, color:m.colorTexto}"
                        v-bind:href="m.href" >{{ m.Titulo}} </a>
                </li>               
            </ul>
        </div>
    </div>
</template>

<script>
export default {
     data(){
        return{
            menus:[],
            titulo:'',
        }

    },
    methods : {

        get(){
            let me = this;
            axios.get('/Administrar/Menu')
            .then(res =>{
                me.menus = res.data;
                me.titulo = me.menus.pop();
            });
        },
    },
    mounted(){
        this.get();
    },
    
}
</script>