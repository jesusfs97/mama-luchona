<template>
    <div class="row container">
        <div class="col-12 col-xl-6">
            <div class="form-group row">
                
                <div class="col-12 p-0 my-2 row">
                <label for="frase" class="col-4 display-5 col-md-4 col-lg-4 col-xl-4 form-label my-2 mx-0 text-monospace">Frase de inicio:</label>
                    <input v-model="nuevaFrase" type="text" class="form-control col-6 col-xl-5 col-lg-5 col-md-5 mt-2" id="frase">
                    <small v-if="error" class="error text-danger">{{error}}</small>
                <button @click.prevent="guardarFrase" class=" col-4 col-lg-2 col-md-2 col-xl-2 form-button btn btn-primary btn-sm mx-1 my-2">Guardar</button>
                </div>
            </div>
        </div>
        

        <div class="col-12 col-xl-6">
            <div class="row">
                <label for="frase" class="col-3 col-form-label my-2 mx-0">Frase actual</label>
                
                <div class="col-9 p-0 my-2">
                    <p class="text-monospace"> {{frase_actual}} </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            frase_actual : '',
            nuevaFrase: '',
            error:'',
        }
    },
    created(){
        this.traerFrase();

    },
    methods: {
        traerFrase(){
            let me = this;
            let url = '/frase';
            axios.get(url).then(response =>{
                me.frase_actual = response.data.frase;
            })
        },
        guardarFrase(){
            let me = this;
            let url = '/frase-nueva';
            let datos = {
                'nuevaFrase' : me.nuevaFrase,
            }
            axios.post(url,datos)
                .then(res =>{
                    me.frase_actual = res.data.frase
                })
        }
        
    },
    mounted(){

    },
    
}
</script>