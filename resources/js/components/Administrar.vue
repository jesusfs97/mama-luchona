<template>
    <div class="container align-items-center" >
        <form v-if="activo" @submit.prevent="guardar(menu)">
            <div class="form-row  ">   
                <div class="col-sm-3">
                    <label for="nombre">Renombrar titulo:</label>
                    <input class="form-control mb-2" type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Renombrar titulo"
                        required
                        v-model="menu.Titulo">
                </div>
                <div class="col-sm-3">
                    <label for="color">Cambiar color de fondo</label>
                    <input class="form-control" type="text"
                        id="color"
                        name="colorFondo"
                        minlength="7" 
                        maxlength="9"
                        v-model="menu.colorFondo">
                </div>
                <div class="col-sm-3">
                        <label for="color1">Cambiar color de texto</label>
                        <input class="form-control" type="text"
                            minlength="7"
                            maxlength="9"
                            name="colorTexto" id="color1"
                            v-model="menu.colorTexto">
                </div>
                <!-- <div class="col-sm-3">
                        <label for="Tipografia">Cambiar ancho del texto</label>
                        <input class="form-control" type="text" value="{{ $Titulo}}" name="colorTexto" id="Tipografia">
                </div> -->
            </div>

            <div class="row w-100 align-items-center">
                <div class="col text-center">
                    <button class="btn btn-warning my-3 btn-md " type="submit">Guardar Cambios</button>
                </div>	
            </div>
        </form>
    
        <nav class="navbar navbar-expand-lg text-uppercase barra-transparente">
            <div class="container">
                
                <span class="navbar-brand js-scroll-trigger">Mamá Luchona</span>
                <i class="fas fa-edit"></i>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ">

                        <li class="nav-item mx-2" v-for="(m, index) in menus" :key="index">
                            
                            <span class="nav-link py-1 px-2 rounded js-scroll-trigger font-weight-bold"
                                v-bind:style="{ backgroundColor: m.colorFondo, color:m.colorTexto}"
                                v-bind:href="m.href" > <i class="fas fa-edit icono btn" @click="editar(m)"></i>{{ m.Titulo}} </span>
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
            menu:{Titulo:"",
                colorFondo:"",
                colorTexto:"",
                Tipografia:"",
            },
            activo:false,
        }

    },
    methods:{
        editar(m){
            this.activo = true;
            this.menu.Titulo = m.Titulo;
            this.menu.colorFondo = m.colorFondo;
            this.menu.colorTexto = m.colorTexto;
            this.menu.id = m.id;

        },
        guardar(menu){
            const params = { 
                Titulo: menu.Titulo,
                colorFondo: menu.colorFondo,
                colorTexto: menu.colorTexto,
            };

            axios.put(`/Administrar/Menu/${menu.id}`, params).then(res=>{
            const index = this.menus.findIndex(Buscar => Buscar.id === menu.id);
            console.log(res.data);
            this.menus[index] = res.data;
            
                axios.get('/Administrar/Menu').then(res =>{
                    this.menus = res.data;
                });
            });
        }
    },
    
    mounted(){
        axios.get('/Administrar/Menu').then(res =>{
           this.menus = res.data;
        });
    },
    
}
</script>