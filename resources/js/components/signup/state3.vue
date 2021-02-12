<template>
    <div class="row mb-5" style="background:white;border-radius:10px;padding:10px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <label for="name">نام و نام خانوادگی :</label>
                    <input type="text" v-model="name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="sazman">سازمان</label>
                    <input type="text" v-model="sazman" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="semat">سمت :</label>
                    <input type="text" v-model="semat" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="phone">شماره تلفن :</label>
                    <input type="text" v-model="phone" class="form-control">

                </div>
            </div>

            <div class="row mt-4 mb-3">
                <div class="col-md-12" style="text-align:center">
                    <button @click="submitdata" class="btn btn-success">ارسال اطلاعات</button>
                </div>
            </div>
        </div>
        <notifications group="foo" />
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data : function(){
        return{
            name : '',
            sazman : '',
            semat : '',
            phone : '',
            title_err_empty : 'خطا در ارسال اطلاعات',
        }
    },
    methods:{
        submitdata:function(){
            if(this.name.length < 3){
                this.$notify({
                    group: 'foo',
                    type: 'error',
                    title: this.title_err_empty,
                    text: 'لطفا نام و نام خانوادگی خود را کامل وارد کنید'
                })
            }
            else if(this.sazman.length < 3){
                this.$notify({
                    group: 'foo',
                    type: 'error',
                    title: this.title_err_empty,
                    text: 'لطفا سازمان خود را کامل وارد کنید'
                })
            }else if(this.semat.length < 3){
                this.$notify({
                    group: 'foo',
                    type: 'error',
                    title: this.title_err_empty,
                    text: 'لطفا سمت خود را کامل وارد کنید'
                })
            }else if(this.phone.length < 3){
                this.$notify({
                    group: 'foo',
                    type: 'error',
                    title: this.title_err_empty,
                    text: 'لطفا شماره تلفن خود را کامل وارد کنید'
                })
            }else{
                axios.post('/api/send_data_state3',{
                    'name':this.name,'sazman':this.sazman,'semat':this.semat,'phone':this.phone
                }).then((res)=>{
                    if(res.data.status === '200'){
                        alert('با تشکر از شما اطلاعات ثبت شد')
                    }else{
                        alert('خطا در ثبت اطلاعات')
                    }
                })
            }
        }
    }
}
</script>