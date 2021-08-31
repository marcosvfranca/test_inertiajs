<template>
  <button
    title="Excluir"
    class="
      inline-flex
      ml-1
      items-center
      px-2
      py-2
      bg-red-600
      border border-transparent
      rounded-md
      font-semibold
      text-xs text-white
      uppercase
      tracking-widest
      hover:bg-red-700
      active:bg-red-900
      focus:outline-none
      focus:border-red-900
      focus:ring focus:ring-gray-300
      disabled:opacity-25
      transition
    "
  >
    <TrashIcon class="h-4 w-4" aria-hidden="true" />
  </button>
</template>

<script>
import { TrashIcon } from "@heroicons/vue/solid";

export default {
  components: {
    TrashIcon
  }
};
</script>
