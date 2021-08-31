<template>
  <div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ title }}
      </h2>
    </div>
    <div class="col-span-6 sm:col-span-3 text-right" v-if="routeButton">
      <button-create :href="routeButton" />
    </div>
  </div>
</template>

<script>
import ButtonCreate from "@/Components/Buttons/ButtonCreate.vue";

export default {
  components: {
    ButtonCreate,
  },
  props: ["routeButton", "title"],
};
</script>