<template>
<div >
        <nav class="navbar navbar-expand-lg text-uppercase barra-transparente">
            <div class="container">
                
                <span class="navbar-brand js-scroll-trigger">Mamá Luchona</span>
                <i class="fas fa-edit"></i>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item mx-2" v-for="(m, index) in menus" :key="index">
                            <i class="fas fa-edit"></i>
                            <span class="nav-link py-1 px-2 rounded js-scroll-trigger font-weight-bold"
                                v-bind:style="{ backgroundColor: m.colorFondo, color:m.colorTexto}"
                                v-bind:href="m.href" >{{ m.Titulo}} </span>
                                
                        </li>
                    
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Despegable</span>
                            <div class="dropdown-menu">
                                <span class="dropdown-item" href="#">Acción</span>
                                <span class="dropdown-item" href="#">Otra acción</span>
                                <span class="dropdown-item" href="#">Algo mas aqui</span>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-item" href="#">Link separado</span>
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
    created(){
        axios.get('/Barra').then(res =>{
           this.menus = res.data;
        });
    },
    
}
</script>