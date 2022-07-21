<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                
               <!-- follow button  -->
                <button class="btn btn-info mx-3" href="#" role="button" @click="followUser">Follow</button>
                <!-- /follow button -->

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'userId',
        ],

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.userId)
                    .then(response => {
                        alert(response.data);
                    });
            }
        }
    }
</script>
