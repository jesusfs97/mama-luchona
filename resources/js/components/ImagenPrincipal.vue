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

        <div class="row">
            <div v-for="(img,index) in imgs" v-bind:key="img" class="col-sm-3" style="width: 75px;">
                <small class="form-text text-muted text-dark bold">Click en la imagen</small>
                <img @click="copyTestingCode(index)" :src="img" class="rounded float-left mx-auto img-sm">
                <input type="hidden" :id="'imagen'+index" :value="img">
            </div>
        </div>
    </div>
</template>
<script>
    export default {

        data(){
            return {
                cambio:'Imagen Principal',
                imagen :null,
                imgs:[],
                msj:'',
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
            Tiempo(){
                let me = this;
                return setTimeout(function(){
                    me.msj='';
                    me.color='';
                    }, 2500);
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
                    if (response.data === 'no llego'){
                        me.msj = 'Porfavor selecciona una imagen';
                        me.color = 'alert-danger';
                        me.Tiempo();
                    }else{
                        me.imgs.push(response.data)
                    }
                })
            },
            copyTestingCode (index) { 
                let iden = '#imagen'+index;
                let testingCodeToCopy = document.querySelector(iden);
                testingCodeToCopy.setAttribute('type', 'text');
                testingCodeToCopy.select();

                    try {
                      let successful = document.execCommand('copy');
                      let msg = successful ? 'Se copio al portapapeles' : 'Fallo';
                      let me = this;
                      me.msj ='la URL '+msg;
                      me.Tiempo();
                    } catch (err) {
                      alert('Oops, fallo al copiar');
                    }

                    /* unselect the range */
                    testingCodeToCopy.setAttribute('type', 'hidden')
                    window.getSelection().removeAllRanges()
            },
        updated() {
           this.copyTestingCode();
        }
    
        }
    }
</script>