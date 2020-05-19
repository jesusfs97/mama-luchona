<template>
    <div>
        <div class="input-group my-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="image" @change="getImage" accept="image/*">
                <label class="custom-file-label" for="inputGroupFile03">{{ cambio }}</label>
            </div>
            <div class="input-group-prepend">
                <button @click="CargarImagen()" class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Subir Imagen</button>
            </div>
        </div>
        <small class="form-text text-danger">{{ alerta }}</small>

        <div class="row">

            <div v-if ="img" v-bind:key="img" class="col-sm-3" style="width: 75px;">
                <input type="hidden" :value="img" name="imagen">
                <small class="form-text text-success">{{ msj }}</small>
            </div>
            <input v-else type="hidden" name="imagen" value='/img/principales/default.png' id="">
        </div>
    </div>
</template>
<script>
    export default {

        data(){
            return {
                cambio:'Imagen Principal',
                imagen :null,
                img:'',
                msj:'',
                alerta:'',
                color:'',
            }
        },
        methods  : {
            getImage(event){
                let me = this;
                //Asignamos la imagen a  nuestra data
                me.imagen = event.target.files[0];
                me.cambio ='Se cargo la imagen ';
            },
            Tiempo(param){
                let me = this;
                return setTimeout(function(){
                    me.alerta='';
                    me.msj='';
                    me.color='';
                    }, 2900);
            },
            CargarImagen(){
                //Creamos el formData
                let data = new  FormData();
                let me = this;
                
                //Añadimos la imagen seleccionada
                data.append('imagen', me.imagen);
                //Añadimos el método PUT dentro del formData
                // Como lo hacíamos desde un formulario simple _(no ajax)_
                data.append('_method', 'PUT');
                //Enviamos la petición
                axios.post('/imagenPrincipal',data)
                .then(function (response) {
                    if (response.data === 'no llego' ){
                        me.alerta = 'Porfavor selecciona una imagen';
                        me.color = 'alert-danger';
                        me.Tiempo();
                    }else{
                        me.img = response.data;
                        me.msj = 'Se guardo la imagen';
                        me.Tiempo();
                    }
                })
            },  
        }
    }
</script>