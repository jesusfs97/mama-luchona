<template>
    <div class="container align-content-center" >
        <div class="row input-group">
            <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 rounded bg-rosa area">
                <div class="input-group my-3">
                     <input type="text"
                        class="form-control"
                        placeholder="¿Que tienes en mente mamá?..."
                        aria-label="¿Que tienes en mente mamá?..."
                        v-model="pensamiento">
                    
                    <div class="input-group-append">
                        <button @click.prevent="enviarPensamiento()" class="btn btn-outline-info" type="button" id="button-addon2">Enviar</button>
                    </div>
                </div>
                <div class="text-center rounded">
                     <p class="t-A p-3">{{pensamiento}}</p>
                </div>
            </div>

            <!-- Seccion donde se muestran las opiniones o consejos -->

            <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8 rounded py-3 area t-A align-content-center">
                <a v-if="paginas.pagina_actual > 1" class="carousel-control-prev" href="#" @click.prevent="cambiarPagina(paginas.pagina_actual -1)" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <div v-for="pensamiento in pensamientos" :key="pensamiento.id">
                    <div class="card-header">
                        {{pensamiento.usuario}}
                    </div>
                    <div class="card-body mx-5">
                        <p class="card-text">{{pensamiento.publicacion}}</p>
                    </div>
                </div>
                
                <a class="carousel-control-next" href="#" v-if="paginas.pagina_actual < paginas.ultima_pagina" @click.prevent="cambiarPagina(paginas.pagina_actual + 1)" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div> 
</template>
<script>
export default {
    data(){
        return {
            pensamientos :[],
            pensamiento:'',
            usuario:'Juanita',
            mensaje:'',
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
        const me = this;
        me.TraerPensamientos();

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
    methods: {
        TraerPensamientos(pagina){
            let me = this;
            let url ='/pensamientos-aceptados?page='+pagina;
            axios.get(url).then(res =>{
                me.pensamientos = res.data.pensamientos.data;
                me.paginas = res.data.paginas;
            }).catch(error =>{
                console.log(error);
            })
        },
        cambiarPagina(pagina){
            let me = this;
            me.paginas.pagina_actual = pagina;
            me.TraerPensamientos(pagina);
        },
        enviarPensamiento(){
            const me = this;
            let url = '/pensamiento-guardar';
            let datos= {
                'pensamiento' : me.pensamiento,
            }
            axios.post(url,datos).then(res =>{
                me.mensaje = res.data;
            }).catch(error =>{
                console.log(error)
            });
        },
    },
}
</script>