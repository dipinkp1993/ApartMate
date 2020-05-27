<template>
    <div class="container" id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                      
                         <p>{{ message }}</p>
                        
            <h4 v-on:mouseover="reverseMessage">Reverse Message</h4>
            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</template>

<script>


    export default {
      data(){
        return{
        noti: 'How are you?',
        message:document.getElementById("na"),
        errors: [],
        name: null,
        email: null,
        movie: null
        }},
        methods: {
   
     capitalise: function () {
      this.noti = this.noti.length
   
        },
        reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }}
    }
</script>
