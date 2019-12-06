<template>
    <div>
        <!-- <h1 class="display-4 text-center">Editar Menu {{$Titulo->Titulo}} </h1>  
        <form action="{{ route('actualizar.Menu',$Titulo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-row  ">   
                        <div class="col-sm-3">
                                <label for="nombre">Renombrar titulo:</label>
                                <input class="form-control"type="text"
                                        id="nombre"
                                        name="nombre"
                                        placeholder="Renombrar titulo"
                                        class="form-control mb-2"
                                        required
                                        value="{{ $Titulo->Titulo }}">
                        </div>


                        <div class="col-sm-3">
                                <label for="color">Cambiar color de fondo</label>
                                <input class="form-control" type="text"
                                        id="color"
                                        name="colorFondo"
                                        minlength="7" 
                                        maxlength="9"
                                        value="{{ $Titulo->colorFondo}}"
                                        >
                        </div>
                        <div class="col-sm-3">
                                <label for="color1">Cambiar color de texto</label>
                                <input class="form-control" type="text" minlength="7" maxlength="9" value="{{ $Titulo->colorTexto}}" name="colorTexto" id="color1">
                        </div>
                        {{-- <div class="col-sm-3">
                                <label for="Tipografia">Cambiar ancho del texto</label>
                                <input class="form-control" type=Texto value="{{ $Titulo}}" name="colorTexto" id="Tipografia">
                        </div> --}}
                </div>
                <button class="btn btn-warning my-3 btn-md" type="submit">Guardar Cambios</button>
        </form>               -->
        <h1>hoolaa</h1>
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
             console.log(res.data)
             this.menus = res.data;
        })
    }
}
</script>