<template>
  <Link
    title="Cadastrar"
    class="
      inline-flex
      items-center
      px-2
      py-2
      bg-indigo-600
      border border-transparent
      rounded-md
      font-semibold
      text-xs text-white
      uppercase
      tracking-widest
      hover:bg-indigo-700
      active:bg-indigo-900
      focus:outline-none
      focus:border-indigo-900
      focus:ring focus:ring-indigo-300
      disabled:opacity-25
      transition
    "
  >
    <PlusIcon class="h-4 w-4" aria-hidden="true" />
  </Link>
</template>

<script>
import { PlusIcon } from "@heroicons/vue/solid";
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Link,
    PlusIcon
  },
};
</script>
