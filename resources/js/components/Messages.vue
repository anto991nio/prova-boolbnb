<template>

  <div class="card w-25 px-2 my-2 " style="width: 18rem">
        <div class="card-body">

         <p class="card-text">
            <span>{{ content }}</span>
            <span>{{ sender_email }}</span>
        </p>
        </div>
    </div>
    
</template>

<script>

export default {
  name: "Messages",
  props: {
    content: String,
    sender_email: String,
  }
  
};
</script>