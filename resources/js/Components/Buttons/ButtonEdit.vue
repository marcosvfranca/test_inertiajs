<template>
  <Link
    title="Alterar"
    class="
      inline-flex
      items-center
      ml-1
      px-2
      py-2
      bg-green-600
      border border-transparent
      rounded-md
      font-semibold
      text-xs text-white
      uppercase
      tracking-widest
      hover:bg-green-700
      active:bg-green-900
      focus:outline-none
      focus:border-green-900
      focus:ring focus:ring-gray-300
      disabled:opacity-25
      transition
    "
  >
    <PencilAltIcon class="h-4 w-4" aria-hidden="true" />
  </Link>
</template>

<script>
import { PencilAltIcon } from "@heroicons/vue/solid";
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    PencilAltIcon,
    Link
  },
};
</script>
