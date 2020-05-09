<template>
    <div class="container">
        <div v-if="mensaje" class="alert alert-primary my-2" v-bind="color" :class="color" role="alert">
            {{ mensaje}}
        </div>
        <table class="table">
                
                <thead class="thead-dark">
                    <tr class="container">
                        <!-- <th  scope="col-1">Id</th> -->
                        <th  scope="col-2">Usuari@</th>
                        <th  scope="col-5">Publicación</th>
                        <th  scope="col-3">Acción</th>
                    </tr>
                </thead>
    
                <tbody>

                    <!-- @foreach ($fondo as $Color)    -->
                    <tr v-for="publicacion in publicaciones" :key="publicacion.id">
                        <!-- <th scope="row">{{publicacion.id}}</th> -->
                        <td>{{publicacion.usuario}} </td>
                        <td>{{publicacion.publicacion}}</td>

                        <td>
                            <a class="btn btn-outline-primary btn-sm" @click.prevent="aceptar(publicacion)" href=""><span>Acceptar</span></a>
                            <a class="btn btn-outline-danger btn-sm" href=""><span>Eliminar</span></a>

                        </td>
    
                    </tr>
                    <!-- @endforeach -->
                </tbody>
            </table>
            <nav>
                <ul class="pagination">
                    <li class="page-item" v-if="paginas.pagina_actual > 1">
                        <a href="#" class="page-link" @click.prevent="cambiarPagina(paginas.pagina_actual - 1)">Atras</a>
                    </li>
                    <li class="page-item" v-for="pagina in numeroDePaginas" :key="pagina" :class="[ pagina == esActiva ? 'active':'']">
                        <a href="#" class="page-link" @click.prevent="cambiarPagina(pagina)">{{pagina}}</a>
                    </li>
                    <li class="page-item" v-if="paginas.pagina_actual < paginas.ultima_pagina">
                        <a href="#" class="page-link" @click.prevent="cambiarPagina(paginas.pagina_actual + 1)">Siguiente</a>
                    </li>
                </ul>
            </nav>
        
    </div>
</template>
<script>
export default {
    data(){
        return {
            mensaje:'',
            publicaciones:[],
            paginas:{
                'total': 0,
                'pagina_actual' :0,
                'por_pagina' :0,
                'ultima_pagina' :0,
                'desde':0 ,
                'hasta' :0,
            }
        }
    },
    created(){
        let me = this;
        me.TraerPublicacion();
    },
    computed:{
        esActiva(){
            const me = this;
            return me.paginas.pagina_actual;
        },//fin de esActiva

        numeroDePaginas(){
            const me = this;
            if(!me.paginas.hasta){
                return []
            }
            let desde = me.paginas.pagina_actual - 2;
            if(desde < 1){
                desde = 1;
            }
            let hasta = desde +(2*2);
            if(hasta >= me.paginas.ultima_pagina){
                hasta = me.paginas.ultima_pagina;
            }
            let paginaArray=[];
            while(desde <= hasta){
                paginaArray.push(desde);
                desde++;
            }
            return paginaArray;

        }

    },
    methods:{

        TraerPublicacion(pagina){
            let me = this;
            let url = '/publicaciones?page='+pagina;
            axios.get(url).then(response =>{
                me.publicaciones = response.data.publicaciones.data;
                me.paginas = response.data.paginas;
            })
        },
        cambiarPagina(pagina){
            let me = this;
            me.paginas.pagina_actual = pagina;
            me.TraerPublicacion(pagina);
        },
        aceptar(publicacion){
            const me = this;
            me.vaciar();
            let url = '/publicaciones-aceptar'
            let datos ={
                'id': publicacion.id,
                'usuario': publicacion.usuario,
            }
            axios.put(url,datos).then(res =>{
                me.mensaje = res.data.mensaje;
                me.TraerPublicacion(me.paginas.pagina_actual);
                me.cerrarMensaje();

            })

        },
        vaciar(){
            this.mensaje='';
        },
        cerrarMensaje(){
            setTimeout(vaciar=>{
                this.vaciar()
            }, 4000);
        }

    }
}
</script>