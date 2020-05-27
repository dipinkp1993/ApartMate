<template>
    <div class="container" id="app">
    <div class="form-group row" v-if="NoUpClick">
    <div class="col-md-4">
        <input type="text" class="form-control" id="name" name="name"
            v-model="newMember.name" placeholder=" Enter Name" >
       <p v-if="hasError" class="text-center alert alert-danger" 
    >Correctly Enter Values!</p>
            <p class="text-center alert alert-success" 
            v-if="hasDeleted">Deleted Successfully!</p>
             <p class="text-center alert alert-success" 
            v-if="hasAdded">Added Successfully!</p>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" id="age" name="age"
            v-model="newMember.age" placeholder=" Enter Age" required>
       
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" @click.prevent="createMembers()"
            id="name" name="name">
            <span class="glyphicon glyphicon-plus"></span> ADD
        </button>
    </div>
</div>
<!-----*************************************************--->
<div class="form-group row" v-else>
    <div class="form-group row" v-for="om in oneMember " :key="om.id">
    <div class="col-md-4">
        <input type="text" class="form-control" id="name" name="name"
            v-model="om.name"  required>
       <p v-if="hasError" class="text-center alert alert-danger" 
    >Correctly Enter Values!</p>
            <p class="text-center alert alert-success" 
            v-if="hasDeleted">Deleted Successfully!</p>
             <p class="text-center alert alert-success" 
            v-if="hasAdded">Added Successfully!</p>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" id="age" name="age"
            v-model="om.age"  required>
       <input type="hidden" class="form-control" id="id" name="id"
            v-model="om.id">
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" @click.prevent="updateMembers(om)"
            id="name" name="name">
            <span class="glyphicon glyphicon-plus"></span> Update
        </button>
    </div>
    </div>
</div>

<!-----***************************************************---->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                   

                    <div class="card-body">
                      
                     <div class="table table-borderless" id="table">
    <table class="table table-borderless" id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
       <tr v-bind:key="member.id"  v-for="member in members">
            <td>{{ member.id }}</td>
            <td>{{ member.name }}</td>
            <td>{{ member.age }}</td>
            <td  @click="deleteMember(member.id)" class="btn btn-danger"><span>Delete Member</span></td>
             <td  @click="updateMemberForm(member.id)" class="btn btn-info"><span>Update Member</span></td>
        </tr>
    </table>
</div>
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
    members:[],
    newMember : {name:"",
    age:""},
    errors: [],
    hasError: false,
    hasDeleted: false,
    hasAdded: false,
    hasUpdated:false,
    NoUpClick:true,
    oneMember:  {id:"",name:"",
    age:""}
    
  }},
  methods : {
     getMembers: function(){
        },
    createMembers: function(){
        var input = this.newMember;
    if(input['name'] == '' || input['age']==''){
        this.hasError = true;
        this.hasDeleted = false;
        this.hasAdded=false
    }
    else{
        
        axios.post('http://127.0.0.1:8000/admin/addmembers',input).then(response => {
          this.newMember = {name:'',age:''};
        this.hasError = false;
         this.hasAdded=true;
         this.hasDeleted = false;
         axios.get('http://127.0.0.1:8000/admin/getmembers').then(res =>
         this.members = res.data).catch(err=>console.log(err))
      });
    

}


    },
    deleteMember(id){
        
        axios.post('http://127.0.0.1:8000/admin/deletemember/'+id).then((response) =>
         {
          this.members=this.members.filter(mem =>mem.id!==id),
          this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = true;
          
        
    });
        },
    updateMemberForm(id){
        this.NoUpClick=false,
        this.hasUpdated=false,
        this.hasAdded=false,
        this.oneMember=this.members.filter(mem =>mem.id==id)
       

    },

    updateMembers(input){
        
       
    if(input['name'] == '' || input['age']==''){
        this.hasError = true;
        this.hasDeleted = false;
        this.hasAdded=false
        this.hasUpdated=true
    }
    else{
       
        
        axios.post('http://127.0.0.1:8000/admin/updatemembers',input).then(response => {
         this.oneMember = {name:'',age:''};
        this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = false;
         this.hasUpdated=true;
          this.NoUpClick=true
          console.log(response.data)
         axios.get('http://127.0.0.1:8000/admin/getmembers').then(res =>
         this.members = res.data).catch(err=>console.log(err))
      });
    

}


    },
      },
      mounted() {
         axios.get('http://127.0.0.1:8000/admin/getmembers').then(res =>
         this.members = res.data).catch(err=>console.log(err))
        }
    }
</script>

