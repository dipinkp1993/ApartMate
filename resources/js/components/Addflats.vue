<template>
<div class="layout-content" id="app">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Floors and Flats</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Dashboard</li>
 <li class="breadcrumb-item active">Floors and Rooms</li>
</ol>
</div>
<div class="card mb-4" v-if="NoUpClick">
<h6 class="card-header">Add Floors & Corresponding Total Flats</h6>
<div class="card-body">
<form>
  
<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Floor Name</label>
<input type="text" name="floor_no" v-model="newFlat.floor_no" id="floor_no" class="form-control" placeholder="Floor Name">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Total Flats</label>
<input type="number" name="tot_flat" id="tot_flat" v-model="newFlat.tot_flat" class="form-control" placeholder="Total Flats">
<div class="clearfix"></div>
</div>
</div>

<button  class="btn btn-primary"  @click.prevent="createFlats()"
            id="name" name="name">Add it!!!</button>
</form>
</div>
</div>
<!-----------------************************----->

<div class="card mb-4" v-else>
<h6 class="card-header">Add Floors & Corresponding Total Flats</h6>
<div class="card-body" v-for="onf in oneMember" :key="onf.fid">
<form>
  
<div class="form-row" >
<div class="form-group col-md-6">
<label class="form-label">Floor Name</label>
<input type="text" name="floor_no" v-model="onf.floor_no" id="floor_no" class="form-control" placeholder="Floor Name">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Total Flats</label>
<input type="number" name="tot_flat" id="tot_flat" v-model="onf.tot_flat" class="form-control" placeholder="Total Flats">
<div class="clearfix"></div>
 <input type="hidden" class="form-control" id="fid" name="fid" v-model="onf.fid">
</div>
</div>

<button  class="btn btn-primary"  @click.prevent="updateFlats(onf)"
            id="name" name="name">Update it!</button>
</form>
</div>
</div>

<!----***************************------>
<div class="card mb-4">
<h6 class="card-header">Manage Flats</h6>
<div class="card-body">
<div class="card-datatable table-responsive">
<table class="datatables-demo table table-striped table-bordered">
<thead>
<tr>
<th>Floor Name</th>
<th>Total Flats</th>
<th colspan="2">Actions</th>

</tr>
</thead>
<tbody>
<tr v-bind:key="flat.fid"  v-for="flat in flats">
<td>{{flat.floor_no}}</td>
<td>{{flat.tot_flat}}</td>
<td class="center btn btn-info" @click="updateFlatForm(flat.fid)" ><i class="fas fa-edit"> Edit</i>
</td>
<td class="center btn btn-danger" @click="deleteFlat(flat.fid)"><i class="fas fa-trash-alt"></i> Delete</td>
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
    return{
    flats:[],
    newFlat :{floor_no:"",
    tot_flat:""},
    errors: [],
    hasError: false,
    hasDeleted: false,
    hasAdded: false,
    hasUpdated:false,
    NoUpClick:true,
    delMsg:'',
    show:true,
    oneMember:{fid:"",floor_no:"",
    tot_flat:""},
    onf:{fid:"",floor_no:"",
    tot_flat:""}
    
  }},
 methods : {
     getMembers: function(){
        },
    createFlats: function(){
        var input = this.newFlat;
    if(input['floor_no'] == '' || input['tot_flat']==''){
        alert("Please Fill Required Field");
        this.hasError = true;
        this.hasDeleted = false;
        this.hasAdded=false
    }
    else{
        
        axios.post('/admin/addflats',input).then(response => {
          if(response.data==true)
         {
          this.newFlat = {floor_no:'',tot_flat:''};
        this.hasError = false;
         this.hasAdded=true;
         this.hasDeleted = false;
         axios.get('/admin/getflats').then(res =>
         this.flats = res.data).catch(err=>console.log(err))
         }
         else{
          alert("Floor Number already exists") ;
        this.hasError = true;
         this.hasAdded=false;
         this.hasDeleted = false;
         axios.get('/admin/getflats').then(res =>
         this.flats = res.data).catch(err=>console.log(err))

         }
      });
    

}


    },
    deleteFlat(fid){
         if(confirm("Want to delete?"))
         {
        
        axios.post('/admin/deleteflat/'+fid).then((response) =>
         {
          this.flats=this.flats.filter(fla=>fla.fid!==fid),
          this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = true;
          
        
    });
     } },
    updateFlatForm(fid){
        this.NoUpClick=false,
        this.hasUpdated=false,
        this.hasAdded=false,
        this.oneMember=this.flats.filter(fla =>fla.fid==fid)
       
       

    },

    updateFlats(input){
        
       
    
       
        axios.post('/admin/updateflats',input).then(response => {
         this.oneMember = {floor_no:'',tot_flat:''};
        this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = false;
         this.hasUpdated=true;
          this.NoUpClick=true
         alert('Details have been updated successfully'); 
         axios.get('/admin/getflats').then(res =>
         this.flats = res.data).catch(err=>console.log(err))
      });

    },
      },
      mounted() {
         axios.get('/admin/getflats').then(res =>
         this.flats = res.data).catch(err=>console.log(err))
        }
    
     }
    
</script>
<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
