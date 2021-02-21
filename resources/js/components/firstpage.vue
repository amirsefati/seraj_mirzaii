<template>
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="header">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1">
                    <div class="right_sidebar">

                    </div>
                </div>

                <div class="col-md-8 col-10">
                    <div class="row mt-4">
                        <div class="col-md-12 p-4" style="box-shadow: 5px 5px 10px 3px rgba(0,0,0,0.09);">
                            <div style="height:450px; overflow: auto;padding:5px" v-html="document_file"></div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <div class="col-md-4 box_state">
                                    <router-link to="state1" class="link_item">
                                        امضای عادی 
                                    </router-link>
                                </div>
                                <div class="col-md-4 box_state">
                                    <router-link to="state2" class="link_item">
                                        تشکل ها  
                                    </router-link>
                                </div>
                                <div class="col-md-4 box_state">
                                    <router-link to="state3" class="link_item">
                                        امضای شاخص 
                                    </router-link>
                                </div>
                            </div>
                            <router-view></router-view>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-1">
                    <div class="left_sidebar">

                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import './firstpage.css';
import axios from 'axios'
export default {
    created(){
        axios.get('./docx.html')
        .then((res)=>{
            this.document_file = res.data
        })
        
    },
    data:function(){
        return{
        document_file : ''
    }}
}
</script>