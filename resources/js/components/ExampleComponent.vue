<template>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" class="form-control" v-model="mensaje">
                        <span v-text="mensaje"></span>
                        <hr>

                        <ul>
                            <li v-for="item in lenguajes" :key="item"  v-text="item" ></li>
                        </ul>
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
                mensaje:'',
                lenguajes:['PHP', 'JS', 'Java', 'Dart'],
                lenguaje:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
