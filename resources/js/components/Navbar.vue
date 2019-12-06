<template>
    <div >
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top barra-transparente">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Mamás Luchonas</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                    data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item mx-2" v-for="(m, index) in menus" :key="index">
                            <a class="nav-link py-1 px-2 rounded js-scroll-trigger font-weight-bold"
                                v-bind:style="{ backgroundColor: m.colorFondo, color:m.colorTexto}"
                                v-bind:href="m.href" >{{ m.Titulo}} </a>
                        </li>
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Despegable</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Acción</a>
                                <a class="dropdown-item" href="#">Otra acción</a>
                                <a class="dropdown-item" href="#">Algo mas aqui</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Link separado</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</template>

<script>
export default {
     data(){
        return{
            menus:[],
            }

    },
    mounted(){
        axios.get('/Barra').then(res =>{
           this.menus = res.data;
        });
    },
    
}
</script>