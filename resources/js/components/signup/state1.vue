<template>
    <div class="row mb-5" style="background:white;border-radius:10px;padding:10px">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-4">
                    <label for="name">نام و نام خانوادگی :</label>
                    <input type="text" v-model="name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="kind">وضعیت:</label>
                    <select name="" v-model="kind" class="form-control" id="">
                        <option value="">انتخاب کنید ...</option>
                        <option value="دانشجو">دانشجو</option>
                        <option value="فارق التحصیل">فارق التحصیل</option>
                        <option value="طلبه">طلبه</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="grade">مقطع تحصیلی</label>
                    <input type="text" v-model="grade" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="university">دانشگاه :</label>
                    <input type="text" v-model="university" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="email">ایمیل :</label>
                    <input type="text" v-model="email" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="phone">شماره تماس :</label>
                    <input type="text" v-model="phone" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="field">رشته تحصیلی :</label>
                    <input type="text" v-model="field" class="form-control">
                </div>
            </div>

            <div class="row mt-4 mb-3">
                <div class="col-md-12" style="text-align:center">
                    <button @click="submitdata" class="btn btn-success">ثبت امضا</button>
                </div>
            </div>
        </div>
            <notifications group="foo"/>
    </div>
</template>


<script>

import axios from 'axios'

export default {
    data : function(){
        return{
            name : '',
            kind : '',
            grade : '',
            email : '',
            university : '',
            field : '',
            phone : '',
            title_err_empty : 'خطا در ارسال اطلاعات',
        }
    },
    methods:{
        submitdata:function(){
            if(this.name.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا نام و نام خانوادگی خود را کامل وارد کنید'
                })
            }
            else if(this.kind.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا وضعیت خود را انتخاب کنید'
                })
            }else if(this.grade.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا مقطع تحصیلی خود را انتخاب کنید'
                })
            }
            else if(this.university.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا دانشگاه خود را کامل وارد کنید'
                })
            }else if(this.email.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا ایمیل خود را کامل وارد کنید'
                })
            }else if(this.phone.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا شماره تلفن خود را کامل وارد کنید'
                })
            }else if(this.field.length < 3){
                this.$notify({
                    group: 'foo',
                    type:'error',
                    title: this.title_err_empty,
                    text: 'لطفا رشته تحصیلی خود را کامل وارد کنید'
                })
            }
            else{
                axios.post('/api/send_data_state1',{
                    'name':this.name,'kind':this.kind,'grade':this.grade,'university':this.university,'email':this.email,'phone':this.phone,'field':this.field
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