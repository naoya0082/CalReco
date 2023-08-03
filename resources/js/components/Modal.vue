<template>
    <div class="modal" v-if="isOpenWeightModal">
        <div class="modal-background">
            <div class="modal-content" style="width:400px">
                今日の体重を入力してください
                <hr>
                <form method="POST" @submit.prevent="submitForm">
                    <div class="input-weight">
                        <input v-model="weight" type="number" name="weight" id="weight" step="0.01" style="width: 80%; margin-right: 5px;" placeholder="60">
                        <input type="submit" name="" id="" class="weight-upd-btn btn btn-primary mt-2" value="登録">
                    </div>
                </form>
                <div class="close-modal" @click="close">✕</div>
            </div>
        </div>
    </div>
    <!-- <div class="modal" v-if="isOpenMealModal">
        <div class="modal-background">
            <div class="modal-content" style="width:600px">
                食事の記録
                <hr>
                <form method="POST" action="/home">
                    <div class="input-meal">
                        <input type="number" name="weight" id="weight" step="0.01" style="width: 80%; margin-right: 5px;" placeholder="60">
                        <input type="submit" name="" id="" class="weight-upd-btn btn btn-primary mt-2" value="登録" @click="updateWeight">
                    </div>
                </form>
                <div class="close-modal" @click="close">✕</div>
            </div>
        </div>
    </div> -->
</template>
  
<script>
import axios from 'axios';
import { ref } from 'vue';

export default {
  name: "Modal",
  setup() {
    const isOpenWeightModal = ref(false);
    const isOpenMealModal = ref(false);
    const weight = ref('');

    const submitForm = async () => {
        if(weight.value != '') {
            try {
                const response = await axios.post('/api/weight', { weight: weight.value });
                // 何らかの処理
                isOpenWeightModal.value = false;
                console.log(response);
            } catch (error) {
                // エラーハンドリング
                alert("エラーが発生しました。時間をおいて再度お試しください。");
                console.log(error);
                return;
            }
        }
    }
    
    const open = (num) => {
        if (num == 1) {
            isOpenMealModal.value = true;
        } else if (num == 2) {
            isOpenWeightModal.value = true;
        }
    }

    const close = () => {
        isOpenWeightModal.value = false;
        isOpenMealModal.value = false;
    }

    return {
        isOpenWeightModal,
        isOpenMealModal,
        open,
        close,
        weight,
        submitForm
    }
  }
}
</script>
   
<style>
.modal {
    z-index: 100; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
    display: block
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    /* width: 400px; */
    position: relative;
}

.close-modal {
    border-radius: 50%;
    background-color: #fff;
    width: 25px;
    height: 25px;
    text-align: center;
    position: absolute;
    top:-10px;
    right: -13px;
    cursor: pointer;
    box-shadow: 0px 1px 5px gray;
    padding-top: 2px;
}

.input-weight {
    display: flex;
    justify-content: left;
}
</style>
  