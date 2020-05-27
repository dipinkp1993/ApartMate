<template>
<div class="layout-content" id="app">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Add Families</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item">Dashboard</li>
 <li class="breadcrumb-item active">Family Management</li>
</ol>
</div>
<div class="card mb-4" v-if="NoUpClick">
<h6 class="card-header">Family Management </h6>
<div class="card-body">
<form>
  
<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Floor Name</label>
<select v-model="floorValue.fno" name="fno" class="custom-select" @change.prevent="getFloorDetails(floorValue.fno)" >
<option disabled value="">Select Floor</option>
<option v-bind:key="flat.floor_no"  v-for="flat in flats" :value="flat.floor_no">{{flat.floor_no}}</option>
</select>
 
<div class="clearfix"></div>
</div>

</div>
</form>
</div>
</div>
<!-----------------************************----->



<!----***************************------>
<div class="card mb-4" v-if="show">
<h6 class="card-header">Add Family To a Flat</h6>
<div class="card-body">
<div class="card-datatable table-responsive">
<table class="datatables-demo table  table-bordered" cell-spacing="0">
  
<thead>
<tr>

<th>Total Flats</th>


</tr>
</thead>
<tbody v-bind:key="flat.fid"  v-for="flat in newFlat">
<tr >

<td>{{flat.tot_flat}}</td>

</tr>
<tr><i>Click Buttons to Add Family</i></tr>
<tr>&nbsp;</tr>
<div  v-for="q in flat.tot_flat"  v-bind:key="q">
<input type="hidden" name="flatnoumber" id="flatnumber" :value="q">
  <input type="hidden" name="floornumber" id="floornumber" :value="flat.floor_no">
  </div>
<div v-if="showFam">

<tr  v-for="n in flat.tot_flat"  v-bind:key="n" class="btn btn-dark" >

<div v-if="Cfloor==n" >
<button data-toggle="tooltip"  v-bind:title='buttonText(l)'  class="btn btn-info red-tooltip" @mouseover="showTotalMemebers(n,flat.floor_no)"  @click="showFamilyForm(n,flat.floor_no)"><div v-if="n<10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{n}}</div><div v-else>{{n}}</div></button>
</div>
<div v-else>
<button data-toggle="tooltip" v-bind:title='buttonText(l)' class="btn btn-primary red-tooltip" @mouseover="showTotalMemebers(n,flat.floor_no)" @click="showFamilyForm(n,flat.floor_no)"><div v-if="n<10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{n}}</div><div v-else>{{n}}</div></button>
</div>
</tr>
</div>
<div v-else>
<tr  v-for="n in flat.tot_flat"  v-bind:key="n" class="btn btn-dark" >
<button data-toggle="tooltip" v-bind:title='buttonText(l)' class="btn btn-primary red-tooltip" @mouseover="showTotalMemebers(n,flat.floor_no)" @click="showFamilyForm(n,flat.floor_no)"><div v-if="n<10">&nbsp;&nbsp;&nbsp;&nbsp;
  {{n}}</div><div v-else>{{n}}</div></button>
</tr>
</div>
</tbody>
</table>
<!---------->
 
<!---------->
</div>


</div>
</div>
<!--------------------------------------->
<div class="card mb-4" v-if="showFam">
  <div v-if="NoUpClick">
<h6 class="card-header">Add Family | Flat Number - {{Cfloor}} | Floor Number - {{Cflat}} </h6>
<div class="card-body">
<form action="#"  enctype="multipart/form-data">

<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Name</label>
<input type="text" name="mname"  id="mname" v-model="newMember.mname"  class="form-control" placeholder="Name Of Member"> 
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Age</label>
<input type="number" name="mage" id="mage" v-model="newMember.mage"   class="form-control" placeholder="Age" >
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Profession| Education</label>
<input type="text" name="mprof" id="mprof" v-model="newMember.mprof"   class="form-control" placeholder="Profession" >
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
  <label class="form-label">Gender</label>
<div class="custom-controls-stacked">
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="newMember.gender"  class="custom-control-input" value="male" checked>
<span class="custom-control-label">Male</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="newMember.gender"  value="female" class="custom-control-input">
<span class="custom-control-label">Female</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio"  value="others" v-model="newMember.gender"  class="custom-control-input">
<span class="custom-control-label">Others</span>
</label>
</div>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Add image</label>
<!--<input type="file" id="file" ref="myFiles" class="form-control" 
  @change="previewFiles">-->
   <input @change="previewFiles" id="avatar" type="file" name="avatar">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Contact Number</label>
<input type="text" name="mcno" id="mcno" v-model="newMember.mcno"    placeholder="Contact Number" class="form-control">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Email id</label>
<input type="email" name="em" id="em" v-model="newMember.em"   class="form-control" placeholder="Email">
<div class="clearfix"></div>
</div>
</div>



<button  class="btn btn-primary"  
          @click.prevent="createMembers(newMember,Cfloor,Cflat)">+ Add </button>
</form>
</div>
  </div>
  <div v-else>
    <div class="form-group row" v-for="om in oneMember " :key="om.id">
    <h6 class="card-header">Update Family | Flat Number - {{Cfloor}} | Floor Number - {{Cflat}} </h6>
<div class="card-body">
<form action="#"  enctype="multipart/form-data">

<div class="form-row">
<div class="form-group col-md-6">
<label class="form-label">Name</label>
<input type="text" name="mname"  id="mname"  v-model="om.name"   class="form-control" placeholder="Name Of Member"> 
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Age</label>
<input type="number" name="mage" id="mage" v-model="om.age"   class="form-control" placeholder="Age" >
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Profession| Education</label>
<input type="text" name="mprof" id="mprof" v-model="om.profession"   class="form-control" placeholder="Profession" >
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
  <label class="form-label">Gender</label>
<div class="custom-controls-stacked">
<div v-if="om.gender=='male'">
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  class="custom-control-input" value="male" checked>
<span class="custom-control-label">Male</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="omr.gender"  value="female" class="custom-control-input">
<span class="custom-control-label">Female</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  value="others"  class="custom-control-input">
<span class="custom-control-label">Others</span>
</label>
</div>
<div v-else-if="om.gender=='female'">
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"   class="custom-control-input" value="male">
<span class="custom-control-label">Male</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  value="female" class="custom-control-input" checked>
<span class="custom-control-label">Female</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender" value="others"  class="custom-control-input">
<span class="custom-control-label">Others</span>
</label>
</div>
<div v-else-if="om.gender=='others'">
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  class="custom-control-input" value="male">
<span class="custom-control-label">Male</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  value="female" class="custom-control-input">
<span class="custom-control-label">Female</span>
</label>
<label class="custom-control custom-radio">
<input name="gender" type="radio" v-model="om.gender"  value="others"  class="custom-control-input" checked>
<span class="custom-control-label">Others</span>
</label>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Change image</label>
<!--<input type="file" id="file" ref="myFiles" class="form-control" 
  @change="previewFiles">-->
   <input @change="previewFiles" id="avatar" type="file" name="avatar">
    <div class="media align-items-center">
    <img :src="'/member_images/'+om.image" class="d-block ui-w-140 img-fluid img-thumbnail" alt="">
    </div>
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Contact Number</label>
<input type="text" name="mcno" id="mcno" v-model="om.cno"   placeholder="Contact Number" class="form-control">
<div class="clearfix"></div>
</div>
<div class="form-group col-md-6">
<label class="form-label">Email id</label>
<input type="email" name="em" id="em" v-model="om.email"   class="form-control" placeholder="Email">
<div class="clearfix"></div>
</div>
</div>



<button  class="btn btn-primary"  
          @click.prevent="">+ Update</button>
</form>
</div>
    </div>
  </div>
<div v-if="showFamMem">
 
  <!-------------------->
  <div class="card" v-if="l>0">
    <div class="card-body">
                      
    <div class="table table-bordered table-responsive" id="table">
    <table class="table table-bordered table-striped " id="table">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
       <tr v-bind:key="member.id"  v-for="member in members">
            <td class="align-middle py-3">
              <div class="media align-items-center">
              <img :src="'/member_images/'+member.image" class="d-block ui-w-40 rounded-circle" alt="">
              </div>
              </td>
            <td class="align-middle py-3">{{ member.name }}</td>
            <td class="align-middle py-3">{{ member.age }}</td>
            <td  class="align-middle py-3">{{ member.cno }}</td>
            <td  @click="deleteMember(member.id)" class="btn btn-primary"><span><i class="fas fa-trash-alt"></i> Delete</span></td>
             <td  @click="updateMemberForm(member.id)" class="btn btn-info"><span><!--<a :href="'/invoice/'+2+'/history'">--><i class="fas fa-edit"> </i> Update</span></td>
        </tr>
    </table>
</div>
            <hr>
                    </div>
                </div>
              <div v-else>
                <h4 class="text-center alert alert-warning">No Member Added Yet</h4>
                  
          
              </div>

  <!------------------->
</div>
</div>
<!--------------------------------------->

</div>
</div>
</template>
<script>


    export default {
        data(){
    return{
    flats:[],
    newMember : {mname:"",
    mage:"",mprof:"",gender:"",mcno:"",em:"",flatno:"",floorno:"",image:''},
    errors: [],
    hasError: false,
    hasDeleted: false,
    hasAdded: false,
    hasUpdated:false,
    NoUpClick:true,
    delMsg:'',
    show:false,
    floorValue:{"fno":""},
    oneMember:{id:"",name:"",
    age:"",profession:"",gender:"",cno:"",email:"",flat_no:"",floorno:""},
    onf:{fid:"",floor_no:"",
    tot_flat:""},
    totFlat:null,
    showFam:false,
    Cfloor:"",
    Cflat:"",
    files:[],
    data:[],
    showFamMem:false,
    memdata:[],
    members:[],
    newFlat:[],
    l:null
    
  }},
 methods : {
    previewFiles(event) {
   
       let files = event.target.files;
       if (files.length) this.avatar = files[0];
  },
    createMembers: function(newMember,Cfloor,Cflat){
     
      var input = this.newMember;
      input['floorno']=Cflat;
      input['flatno']=Cfloor;
      console.log(input);
      var form_data = new FormData();
      for ( var key in input ) {
    form_data.append(key, input[key]);
}
      console.log(this.avatar); 
      form_data.append('file', this.avatar);
      

      axios.post('http://127.0.0.1:8000/admin/createmembers',form_data) 
      .then(res =>{
       console.log(res); 
       this.newMember={}; 
      this.getMembers(Cflat,Cfloor);
        }) 
.catch(error => console.log(error)); //             
   
       
    },
   
     deleteMember(id){
        if(confirm("Want to delete?"))
         {
        axios.post('http://127.0.0.1:8000/admin/deletemember/'+id).then((response) =>
         {
          this.members=this.members.filter(mem =>mem.id!==id),
          this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = true;
          
        
    });
      }  },
    updateMemberForm(fid){
        this.NoUpClick=false,
        this.hasUpdated=false,
        this.hasAdded=false,
        this.oneMember=this.members.filter(mem =>mem.id==fid)
        console.log(this.oneMember);
    },
    GetFlatMembers()
    {
       var f=document.getElementById('floornumber');
       var p=document.getElementById('flatnumber');
       console.log('hai'+f);
       this.getMembers(f,p);
    },

    updateFlats(input){
        axios.post('http://127.0.0.1:8000/admin/updateflats',input).then(response => {
         this.oneMember = {floor_no:'',tot_flat:''};
        this.hasError = false;
         this.hasAdded=false;
         this.hasDeleted = false;
         this.hasUpdated=true;
          this.NoUpClick=true
         alert('Details have been updated successfully'); 
         axios.get('http://127.0.0.1:8000/admin/getflats').then(res =>
         this.flats = res.data).catch(err=>console.log(err))
      });
    },
    getFloorDetails(fv)
    {
      axios.post('http://127.0.0.1:8000/admin/getfloordetails/'+fv).then((res) =>
         {
          this.show=true;
          this.newFlat = res.data,
          this.totFlat=this.newFlat.tot_flat;
          console.log(res.data);
          this.hasError = false;
          this.hasAdded=false;
          this.hasDeleted = true;  
          this.Cfloor="";
          this.Cflat="";  
          this.showFam=false;     
          
    });
    this.GetFlatMembers(); 
    },
    showFamilyForm(fl,flono)
    {
      this.showFam=true;
      this.Cfloor=fl;
      this.Cflat=flono;
      this.showFamMem=true;
      this.NoUpClick=true;
       /*axios.post('http://127.0.0.1:8000/admin/getfamilymembers/'+fl+'/'+flono) 
      .then(res =>{
       console.log(res); 
       this.members = res.data
        }) */
      this.getMembers(flono,fl);
     
    },
     showTotalMemebers(fl,flono)
    {
      this.showFam=true;
      this.Cfloor=fl;
      this.Cflat=flono;
      this.showFamMem=true;
       /*axios.post('http://127.0.0.1:8000/admin/getfamilymembers/'+fl+'/'+flono) 
      .then(res =>{
       console.log(res); 
       this.members = res.data
        }) */
      this.NoUpClick=true;
      this.getMembers(flono,fl);
     
    },
     getMembers(floo_num,flat_num)
    {
    
     axios.post('http://127.0.0.1:8000/admin/getfamilymembers/'+floo_num+'/'+flat_num) 
      .then(res =>{
       console.log(res); 
       this.members = res.data
       this.l=this.members.length;
        }) 
    },
     buttonText(k) {
      return "Total members : " + k; 
    }
   
      }, 
      mounted() {
         axios.get('http://127.0.0.1:8000/admin/getflats').then(res =>
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
.tooltip-arrow,
.red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}
</style>
