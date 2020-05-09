<template>
    <header class="masthead text-white text-center" style="background-color:#000;" id="Inicio">
        <div class="container d-flex align-items-center flex-column">
        
            <h1 class="masthead-heading text-uppercase mb-0">{{proyecto}}</h1>
            
            <div class="divider-custom divider-light">
                
                <!-- Icon Divider -->
                <div class="divider-custom-line"></div>
        
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                
                <div class="divider-custom-line"></div>
            
            </div>
            <!-- Masthead Subheading -->
            <p class="masthead-subheading font-weight-light mb-0">«{{mensaje}}»</p>
        </div>
    </header>
        
</template>
<script>
export default {
    data(){
        return{
            mensaje:'',
            proyecto:'Mamá luchona',

        }
    },
    methods:{
        traerFrase(){
            let me = this;
            let url = '/frase';
            axios.get(url).then(response =>{
                me.mensaje = response.data.frase
            }).catch(error =>{
                console.log(error)

            });
        }
    },
    created(){
        this.traerFrase()
    }

}
</script>