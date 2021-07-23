<template>
  <div class="container">
    
      <button id="viewMessage" @click="changeButton" >Visualizza messaggi</button>
     <div v-if="clickMessages">
      <messages v-for="(message, index) in messages"
      :key="index"
      :content="message.content"
      :sender_email="message.sender_email">
      >
        
    
      
    </messages>
    </div> 
  </div>
</template>

<script>
import Messages from './Messages.vue';
import axios from "axios";

export default {
  components:{Messages},
  name: "ButtonMessage",
  data() {
    return {
      clickMessages:false,
      messages:[]
    };
  },
  methods: {
    changeButton() {
      this.clickMessages= !this.clickMessages
      console.log("ciao")
      console.log(this.clickMessages)

    },
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/api/message")
      .then((resp) => {
        this.messages = resp.data.result;
      });
  }
};
</script>