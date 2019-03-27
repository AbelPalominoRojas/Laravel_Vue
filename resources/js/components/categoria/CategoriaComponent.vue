<template>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">Categorias</div>

                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>Cod</th>
                                    <th>Categoria</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in categorias" :key="item.codcategoria" >
                                    <td v-text="item.codcategoria"></td>
                                    <td v-text="item.nombrecat"></td>
                                    <td v-text="item.descripcioncat"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>

</template>


<script>
export default {
    data(){
        return {
            categorias:[]
        }
    },
    methods:{

        getAllCategorias(){

            let urlApi ='http://localhost:3000/categoria',
                me = this;

            axios.get(urlApi)
            .then(function (response) {
                // handle success
                //console.log(response);

                me.categorias = response.data;
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });

        }

    },
    mounted(){
        this.getAllCategorias();
    }
}
</script>
